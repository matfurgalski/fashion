<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use app\forms\NewletterForm;

class HomeCtrl {

    private $form;

    public function __construct(){
		
		$this->form = new NewletterForm();		
	}

 
    public function action_home() {   
        
        App::getSmarty()->display("Home.tpl");    
    }
    
    
    public function action_newletter() {  

        $this->form->email = ParamUtils::getFromRequest('email', true, 'Błędne wywołanie aplikacji');
        
        if (empty(trim($this->form->email))) {
            Utils::addErrorMessage('Wprowadź email');
        }

      

    try {
        
              
        $exist = App::getDB()->has("newsletter", [
                    
            "OR"=>[           
            "email"=>$this->form->email
            ]
        ]);

        if (!$exist){
        App::getDB()->insert("newsletter", [   

            "email" => $this->form->email
            
        ]);
        Utils::addInfoMessage('Pomyślnie zapisano do newslettera');
    }else{
        Utils::addErrorMessage('Jestes już zapisany do newslettera');
    }
        
    }catch(\PDOException $e){
        Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
        if (App::getConf()->debug)
            Utils::addErrorMessage($e->getMessage());
    }
        
        App::getSmarty()->display("Home.tpl");    
    }
}
