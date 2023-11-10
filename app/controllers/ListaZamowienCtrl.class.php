<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;


class ListaZamowienCtrl {

    private $data;
    
    public function action_listaZamowien() {
		        
        $this->data = App::getDB()->select("zamowienie", [
            "idzamowienie",
            "data",
            "status"

        ],["ORDER" =>[
            "status",
            "data" => "ASC"
            
        ]] );
  
        
        App::getSmarty()->assign("data",$this->data);        
        App::getSmarty()->display("ListaZamowien.tpl");
        
    }
    
}