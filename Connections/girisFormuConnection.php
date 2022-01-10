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

        parse_str(file_get_contents("php://input"),$putVars);
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

        $listeDisi->setHeader1($putVars["header1"]);
        $listeDisi->setInput1($putVars["input1"]);
        $listeDisi->setHeader2($putVars["header2"]);
        $listeDisi->setInput2($putVars["input2"]);
        $listeDisi->setHeader3($putVars["header3"]);
        $listeDisi->setInput3($putVars["input3"]);
        $listeDisi->setHeader4($putVars["header4"]);
        $listeDisi->setInput4($putVars["input4"]);
        $listeDisi->setHeader5($putVars["header5"]);
        $listeDisi->setInput5($putVars["input5"]);
        $listeDisi->setHeader6($putVars["header6"]);
        $listeDisi->setInput6($putVars["input6"]);
        $listeDisi->setHeader7($putVars["header7"]);
        $listeDisi->setInput7($putVars["input7"]);
        $listeDisi->setHeader8($putVars["header8"]);
        $listeDisi->setInput8($putVars["input8"]);
        $listeDisi->setHeader9($putVars["header9"]);
        $listeDisi->setInput9($putVars["input9"]);
        $listeDisi->setHeader10($putVars["header10"]);
        $listeDisi->setInput10($putVars["input10"]);
        $listeDisi->setHeader11($putVars["header11"]);
        $listeDisi->setInput11($putVars["input11"]);
        $listeDisi->setHeader12($putVars["header12"]);
        $listeDisi->setInput12($putVars["input12"]);

        echo $girisFormuManager->Add($girisFormu,$listeDisi);
        break;
    case 'PUT':
        echo 2;
        break;
    case 'DELETE':
        echo 3;
        break;
}