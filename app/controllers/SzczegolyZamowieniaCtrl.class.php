<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;


class SzczegolyZamowieniaCtrl {

    private $data, $data2;
    
    public function action_szczegolyZamowienia() {
		        
        $idZamowienia = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        
        $this->data = App::getDB()->select("zamowienie_has_user", [
            "[><]produkty" => ["Produkty_idProdukty" => "idProdukty"]
        ], [
            "zamowienie_has_user.Produkty_idProdukty",
            "zamowienie_has_user.ilosc",
            "zamowienie_has_user.User_idUser",
            "produkty.nazwa",
            "produkty.rozmiar",
            "produkty.firma",
            
        ],[
            "zamowienie_has_user.zamowienie_idzamowienie" => $idZamowienia
        ]);

        foreach($this->data as $p){
            $id = $p["User_idUser"];
        }

        


        $this->data2 = App::getDB()->select("user", [
            "idUser",
            "email",
            "imie",
            "nazwisko",
            "adres",
            "kod_pocztowy",
            
        ],[
            "idUser" => $id
        ]);

        $stat = App::getDB()->get("zamowienie", "status", [
            "idzamowienie" => $idZamowienia
        ]);

        App::getSmarty()->assign("data",$this->data);
        App::getSmarty()->assign("data2",$this->data2);
        App::getSmarty()->assign("idZamowienia",$idZamowienia); 
        App::getSmarty()->assign("status",$stat);          
        App::getSmarty()->display("SzczegolyZamowienia.tpl");
    }

    public function action_zmienStatus() {

	
   

        $idZamowienia = ParamUtils::getFromRequest('idzamowienie', true, 'Błędne wywołanie aplikacji1');
        //$status = ParamUtils::getFromRequest('status', true, 'Błędne wywołanie aplikacji1');
        $zrealizowane = ParamUtils::getFromRequest('flexRadioDefault');        
        $wTrakcie = ParamUtils::getFromRequest('flexRadioDefault');
       
        if($zrealizowane == '2')
            $status = "zrealizowane";
        if($wTrakcie == '1')
            $status = "w trakcie realizacji";    
        
        App::getDB()->update("zamowienie", [

            "status" => $status  

                ], [
            "idzamowienie" => $idZamowienia
        ]);
       
       
    
        App::getRouter()->forwardTo('listaZamowien');
    }

       
        
    }
    
