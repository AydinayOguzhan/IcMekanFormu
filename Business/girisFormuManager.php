<?php

class GirisFormuManager
{

    private $girisFormuDal;
    function __construct()
    {
        require_once("/wamp64/www/icMekanFormu/DataAccess/girisFormuDal.php");
        require_once("/wamp64/www/icMekanFormu/Entities/girisFormu.php");
        require_once("/wamp64/www/icMekanFormu/Entities/listeDisi.php");
        require_once("/wamp64/www/icMekanFormu/Business/constants.php");
        $this->girisFormuDal = new GirisFormuDal();
    }

    function Add(GirisFormu $girisFormu)
    {
        if ($girisFormu->getAd() == "" || $girisFormu->getSoyad() == "") {
            return Constants::$fillTheBlanks;
        }
        
        return $this->girisFormuDal->Add($girisFormu);
    }

    function AddListeDisi(int $formId, ListeDisi ...$listeDisi){
        for ($i=0; $i < count($listeDisi); $i++) { 
            if ($listeDisi[$i]->getHeader() != "" || $listeDisi[$i]->getInput() != "") {
                $this->girisFormuDal->AddListeDisi($formId,$listeDisi[$i]);   
            }
        }
    }

    function GetPencereTuru()
    {
        return $this->girisFormuDal->GetPencereTuru();
    }
    function GetIsiklandirmaTuru()
    {
        return $this->girisFormuDal->GetIsiklandirmaTuru();
    }
    function GetCepheTuru()
    {
        return $this->girisFormuDal->GetCepheTuru();
    }
    function GetTahtaTuru()
    {
        return $this->girisFormuDal->GetTahtaTuru();
    }
    function GetIsitmaTuru()
    {
        return $this->girisFormuDal->GetIsitmaTuru();
    }
}
