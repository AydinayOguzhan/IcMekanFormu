<?php 

class GirisFormuDal{
    function __construct()
    {
        require_once("/wamp64/www/icMekanFormu/Business/constants.php");
        require_once("/wamp64/www/icMekanFormu/Entities/girisFormu.php");
        require_once("/wamp64/www/icMekanFormu/Entities/listeDisi.php");
    }

    function Add(GirisFormu $girisFormu, ListeDisi $listeDisi){
        require_once("/wamp64/www/icMekanFormu/DataAccess/connection.php");
        if ($girisFormuCon) {
            $query = mysqli_query($girisFormuCon,"INSERT INTO `ic_mekan_formu`(`pencere_turu_id`, `isiklandirma_turu_id`, `cephe_id`, `tahta_turu_id`, 
            `isitma_turu_id`, `bina_id`, `meksis_kodu`, `alt_fonksiyon`, `mekan_adi`, `oda_no`, `sorumlu_kisi`, `en`, `boy`, `yukseklik`, 
            `hacim`, `toplam_alan`, `pencere_alani`, `kalorifer_petek`, `klima`, `klima_sayisi`, `isiklandirma_adet`, `projeksiyon`, `kat`, 
            `kitaplik`, `sandalye`, `bilgisayar`, `tahta_sayisi`, `masa`, `ogrenci_kapasitesi`, `kisi_sayisi`, `ad`, `soyad`,`tarih`) 
            VALUES ('".$girisFormu->getPencereTuru()."','".$girisFormu->getIsiklandirmaTuru()."','".$girisFormu->getCephe()."','".$girisFormu->getTahtaTuru()."',
            '".$girisFormu->getIsitmaTuru()."','".$girisFormu->getBinaId()."','".$girisFormu->getMeksisKodu()."','".$girisFormu->getAltFonksiyon()."',
            '".$girisFormu->getMekanAdi()."','".$girisFormu->getOdaNo()."','".$girisFormu->getSorumluKisi()."','".$girisFormu->getEn()."',
            '".$girisFormu->getBoy()."','".$girisFormu->getYukseklik()."','".$girisFormu->getHacim()."','".$girisFormu->getToplamAlan()."',
            '".$girisFormu->getPencereAlani()."','".$girisFormu->getKaloriferPetek()."','".$girisFormu->getKlima()."','".$girisFormu->getKlimaSayisi()."',
            '".$girisFormu->getIsiklandirma()."','".$girisFormu->getProjeksiyon()."','".$girisFormu->getKati()."','".$girisFormu->getKitaplik()."',
            '".$girisFormu->getSandalye()."','".$girisFormu->getBilgisayar()."','".$girisFormu->getTahtaSayisi()."','".$girisFormu->getMasa()."',
            '".$girisFormu->getOgrenciKapasitesi()."','".$girisFormu->getKisiSayisi()."','".$girisFormu->getAd()."','".$girisFormu->getSoyad()."',
            '".$girisFormu->getTarih()."')");
            return $girisFormuCon->error;
        }else{
            Constants::$connectionError;
        }
    }
}