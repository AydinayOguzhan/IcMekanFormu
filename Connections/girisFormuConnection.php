<?php

$method = $_SERVER["REQUEST_METHOD"];
require_once("/wamp64/www/icMekanFormu/Entities/girisFormu.php");
require_once("/wamp64/www/icMekanFormu/Entities/listeDisi.php");
require_once("/wamp64/www/icMekanFormu/Business/girisFormuManager.php");

switch ($method) {
    case 'POST':
        $girisFormu = new GirisFormu();
        $listeDisi = new ListeDisi();
        $girisFormuManager = new GirisFormuManager();

        parse_str(file_get_contents("php://input"), $putVars);
        $girisFormu->setBinaId($putVars["binaId"]);
        $girisFormu->setAltFonksiyon($putVars["altFonksiyon"]);
        $girisFormu->setOdaNo($putVars["odaNo"]);
        $girisFormu->setEn($putVars["en"]);
        $girisFormu->setBoy($putVars["boy"]);
        $girisFormu->setToplamAlan($putVars["toplamAlan"]);
        $girisFormu->setPencereAlani($putVars["pencereAlani"]);
        $girisFormu->setPencereTuru($putVars["pencereTuru"]);
        $girisFormu->setKaloriferPetek($putVars["kaloriferPetek"]);
        $girisFormu->setKlima($putVars["klima"]);
        $girisFormu->setKlimaSayisi($putVars["klimaSayisi"]);
        $girisFormu->setIsiklandirma($putVars["isiklandirma"]);
        $girisFormu->setIsiklandirmaTuru($putVars["isiklandirmaTuru"]);
        $girisFormu->setCephe($putVars["cephe"]);
        $girisFormu->setProjeksiyon($putVars["projeksiyon"]);
        $girisFormu->setMeksisKodu($putVars["meksisKodu"]);
        $girisFormu->setMekanAdi($putVars["mekanAdi"]);
        $girisFormu->setSorumluKisi($putVars["sorumluKisi"]);
        $girisFormu->setYukseklik($putVars["yukseklik"]);
        $girisFormu->setHacim($putVars["hacim"]);
        $girisFormu->setKati($putVars["kati"]);
        $girisFormu->setKitaplik($putVars["kitaplik"]);
        $girisFormu->setSandalye($putVars["sandalye"]);
        $girisFormu->setBilgisayar($putVars["bilgisayar"]);
        $girisFormu->setTahtaSayisi($putVars["tahtaSayisi"]);
        $girisFormu->setTahtaTuru($putVars["tahtaTuru"]);
        $girisFormu->setMasa($putVars["masa"]);
        $girisFormu->setIsitmaTuru($putVars["isitmaTuru"]);
        $girisFormu->setOgrenciKapasitesi($putVars["ogrenciKapasitesi"]);
        $girisFormu->setKisiSayisi($putVars["kisiSayisi"]);
        $girisFormu->setAd($putVars["firstName"]);
        $girisFormu->setSoyad($putVars["lastName"]);
        $girisFormu->setTarih($putVars["date"]);

        $lastGirisFormId = $girisFormuManager->Add($girisFormu);
        if (is_numeric($lastGirisFormId) == false) {
            echo $lastGirisFormId;
        } else {
            $headerCount = 1;
            $inputCount = 1;
            for ($i = 0; $i < 12; $i++) {
                $listeDisi->setHeader($putVars["header" . $headerCount]);
                $listeDisi->setInput($putVars["input" . $inputCount]);
                $headerCount++;
                $inputCount++;
                $girisFormuManager->AddListeDisi($lastGirisFormId, $listeDisi);
            }
            echo true;
        }
        break;
    case 'PUT':
        echo 2;
        break;
    case 'DELETE':
        echo 3;
        break;
}
