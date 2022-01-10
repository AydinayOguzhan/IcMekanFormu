<?php

class GirisFormuManager{

    private $girisFormuDal;
    function __construct()
    {
        require_once("/wamp64/www/icMekanFormu/DataAccess/girisFormuDal.php");
        require_once("/wamp64/www/icMekanFormu/Entities/girisFormu.php");
        require_once("/wamp64/www/icMekanFormu/Entities/listeDisi.php");
        require_once("/wamp64/www/icMekanFormu/Business/constants.php");
        $this->girisFormuDal = new GirisFormuDal();
    }

    function Add(GirisFormu $girisFormu, ListeDisi $listeDisi){
        if ($girisFormu->getAd() == "" ||$girisFormu->getSoyad() == "") {
            return Constants::$fillTheBlanks;
        }
        return $this->girisFormuDal->Add($girisFormu, $listeDisi);
    }
}