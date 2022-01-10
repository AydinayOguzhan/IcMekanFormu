<?php

class GirisFormuDal
{
    function __construct()
    {
        require_once("/wamp64/www/icMekanFormu/Business/constants.php");
        require_once("/wamp64/www/icMekanFormu/Entities/girisFormu.php");
        require_once("/wamp64/www/icMekanFormu/Entities/listeDisi.php");
    }

    function Add(GirisFormu $girisFormu, ListeDisi $listeDisi)
    {
        require_once("/wamp64/www/icMekanFormu/DataAccess/connection.php");
        if ($girisFormuCon) {
            $query = mysqli_query($girisFormuCon, "INSERT INTO `ic_mekan_formu`(`pencere_turu_id`, `isiklandirma_turu_id`, `cephe_id`, `tahta_turu_id`, 
            `isitma_turu_id`, `bina_id`, `meksis_kodu`, `alt_fonksiyon`, `mekan_adi`, `oda_no`, `sorumlu_kisi`, `en`, `boy`, `yukseklik`, 
            `hacim`, `toplam_alan`, `pencere_alani`, `kalorifer_petek`, `klima`, `klima_sayisi`, `isiklandirma_adet`, `projeksiyon`, `kat`, 
            `kitaplik`, `sandalye`, `bilgisayar`, `tahta_sayisi`, `masa`, `ogrenci_kapasitesi`, `kisi_sayisi`, `ad`, `soyad`,`tarih`) 
            VALUES ('" . $girisFormu->getPencereTuru() . "','" . $girisFormu->getIsiklandirmaTuru() . "','" . $girisFormu->getCephe() . "','" . $girisFormu->getTahtaTuru() . "',
            '" . $girisFormu->getIsitmaTuru() . "','" . $girisFormu->getBinaId() . "','" . $girisFormu->getMeksisKodu() . "','" . $girisFormu->getAltFonksiyon() . "',
            '" . $girisFormu->getMekanAdi() . "','" . $girisFormu->getOdaNo() . "','" . $girisFormu->getSorumluKisi() . "','" . $girisFormu->getEn() . "',
            '" . $girisFormu->getBoy() . "','" . $girisFormu->getYukseklik() . "','" . $girisFormu->getHacim() . "','" . $girisFormu->getToplamAlan() . "',
            '" . $girisFormu->getPencereAlani() . "','" . $girisFormu->getKaloriferPetek() . "','" . $girisFormu->getKlima() . "','" . $girisFormu->getKlimaSayisi() . "',
            '" . $girisFormu->getIsiklandirma() . "','" . $girisFormu->getProjeksiyon() . "','" . $girisFormu->getKati() . "','" . $girisFormu->getKitaplik() . "',
            '" . $girisFormu->getSandalye() . "','" . $girisFormu->getBilgisayar() . "','" . $girisFormu->getTahtaSayisi() . "','" . $girisFormu->getMasa() . "',
            '" . $girisFormu->getOgrenciKapasitesi() . "','" . $girisFormu->getKisiSayisi() . "','" . $girisFormu->getAd() . "','" . $girisFormu->getSoyad() . "',
            '" . $girisFormu->getTarih() . "')");
            mysqli_close($girisFormuCon);
            if ($query == true) {
                return true;
            }
            return $girisFormuCon->error;
        } else {
            Constants::$connectionError;
        }
    }

    function GetPencereTuru()
    {
        require("/wamp64/www/icMekanFormu/DataAccess/connection.php");
        if ($girisFormuCon) {
            $query = mysqli_query($girisFormuCon, "SELECT * FROM `pencere_turu` ");
            if (mysqli_num_rows($query) > 0) {
                $datas = array();
                while ($row = mysqli_fetch_assoc($query)) {
                    $datas[] = $row;
                }
                mysqli_close($girisFormuCon);
                return $datas;
            } else {
                $datas = array();
                return $datas;
            }
        } else {
            $datas = array();
            return $datas;
        }
    }

    function GetIsiklandirmaTuru()
    {
        require("/wamp64/www/icMekanFormu/DataAccess/connection.php");
        if ($girisFormuCon) {
            $query = mysqli_query($girisFormuCon, "SELECT * FROM `isiklandirma_turu` ");
            if (mysqli_num_rows($query) > 0) {
                $datas = array();
                while ($row = mysqli_fetch_assoc($query)) {
                    $datas[] = $row;
                }
                mysqli_close($girisFormuCon);
                return $datas;
            } else {
                $datas = array();
                return $datas;
            }
        } else {
            $datas = array();
            return $datas;
        }
    }

    function GetCepheTuru()
    {
        require("/wamp64/www/icMekanFormu/DataAccess/connection.php");
        if ($girisFormuCon) {
            $query = mysqli_query($girisFormuCon, "SELECT * FROM `cephe_turu` ");
            if (mysqli_num_rows($query) > 0) {
                $datas = array();
                while ($row = mysqli_fetch_assoc($query)) {
                    $datas[] = $row;
                }
                mysqli_close($girisFormuCon);
                return $datas;
            } else {
                $datas = array();
                return $datas;
            }
        } else {
            $datas = array();
            return $datas;
        }
    }

    function GetTahtaTuru()
    {
        require("/wamp64/www/icMekanFormu/DataAccess/connection.php");
        if ($girisFormuCon) {
            $query = mysqli_query($girisFormuCon, "SELECT * FROM `tahta_turu` ");
            if (mysqli_num_rows($query) > 0) {
                $datas = array();
                while ($row = mysqli_fetch_assoc($query)) {
                    $datas[] = $row;
                }
                mysqli_close($girisFormuCon);
                return $datas;
            } else {
                $datas = array();
                return $datas;
            }
        } else {
            $datas = array();
            return $datas;
        }
    }

    function GetIsitmaTuru()
    {
        require("/wamp64/www/icMekanFormu/DataAccess/connection.php");
        if ($girisFormuCon) {
            $query = mysqli_query($girisFormuCon, "SELECT * FROM `isitma_turu` ");
            if (mysqli_num_rows($query) > 0) {
                $datas = array();
                while ($row = mysqli_fetch_assoc($query)) {
                    $datas[] = $row;
                }
                mysqli_close($girisFormuCon);
                return $datas;
            } else {
                $datas = array();
                return $datas;
            }
        } else {
            $datas = array();
            return $datas;
        }
    }
}
