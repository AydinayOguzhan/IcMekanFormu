<?php

class GirisFormu{
    
    private $binaId;
    public function getBinaId()
    {
        return $this->binaId;
    }
    public function setBinaId($binaId)
    {
        $binaId != '' ? $this->binaId = $binaId:$this->binaId = 0;
        return $this;
    }

    private $altFonksiyon;
    public function getAltFonksiyon()
    {
        return $this->altFonksiyon;
    }
    public function setAltFonksiyon($altFonksiyon)
    {
        $this->altFonksiyon = $altFonksiyon;
        return $this;
    }

    private $odaNo;
    public function getOdaNo()
    {
        return $this->odaNo;
    }
    public function setOdaNo($odaNo)
    {
        $odaNo != '' ? $this->odaNo = $odaNo:$this->odaNo = 0;
        return $this;
    }

    private $en;
    public function getEn()
    {
        return $this->en;
    }
    public function setEn($en)
    {
        $en != '' ? $this->en = $en:$this->en = 0;
        return $this;
    }

    private $boy;
    public function getBoy()
    {
        return $this->boy;
    }
    public function setBoy($boy)
    {
        $boy != '' ? $this->boy = $boy:$this->boy = 0;
        return $this;
    }

    private $toplamAlan;
    public function getToplamAlan()
    {
        return $this->toplamAlan;
    }
    public function setToplamAlan($toplamAlan)
    {
        $toplamAlan != '' ? $this->toplamAlan = $toplamAlan:$this->toplamAlan = 0;
        return $this;
    }

    private $pencereAlani;
    public function getPencereAlani()
    {
        return $this->pencereAlani;
    }
    public function setPencereAlani($pencereAlani)
    {
        $pencereAlani != '' ? $this->pencereAlani = $pencereAlani:$this->pencereAlani = 0;
        return $this;
    }

    private $pencereTuru;
    public function getPencereTuru()
    {
        return $this->pencereTuru;
    }
    public function setPencereTuru($pencereTuru)
    {
        $this->pencereTuru = $pencereTuru;
        return $this;
    }

    private $kaloriferPetek;
    public function getKaloriferPetek()
    {
        return $this->kaloriferPetek;
    }
    public function setKaloriferPetek($kaloriferPetek)
    {
        $kaloriferPetek != '' ? $this->kaloriferPetek = $kaloriferPetek:$this->kaloriferPetek = 0;
        return $this;
    }

    private $klima;
    public function getKlima()
    {
        return $this->klima;
    }
    public function setKlima($klima)
    {
        $klima == "true"?$this->klima = 1:$this->klima = 0;
        return $this;
    }

    private $klimaSayisi;
    public function getKlimaSayisi()
    {
        return $this->klimaSayisi;
    }
    public function setKlimaSayisi($klimaSayisi)
    {
        $klimaSayisi != '' ? $this->klimaSayisi = $klimaSayisi:$this->klimaSayisi = 0;
        return $this;
    }

    private $isiklandirma;
    public function getIsiklandirma()
    {
        return $this->isiklandirma;
    }
    public function setIsiklandirma($isiklandirma)
    {
        $isiklandirma != '' ? $this->isiklandirma = $isiklandirma:$this->isiklandirma = 0;
        return $this;
    }

    private $isiklandirmaTuru;
    public function getIsiklandirmaTuru()
    {
        return $this->isiklandirmaTuru;
    }
    public function setIsiklandirmaTuru($isiklandirmaTuru)
    {
        $this->isiklandirmaTuru = $isiklandirmaTuru;
        return $this;
    }

    private $cephe;
    public function getCephe()
    {
        return $this->cephe;
    }
    public function setCephe($cephe)
    {
        $this->cephe = $cephe;
        return $this;
    }

    private $projeksiyon;
    public function getProjeksiyon()
    {
        return $this->projeksiyon;
    } 
    public function setProjeksiyon($projeksiyon)
    {
        $projeksiyon != '' ? $this->projeksiyon = $projeksiyon:$this->projeksiyon = 0;
        return $this;
    }

    private $meksisKodu;
    public function getMeksisKodu()
    {
        return $this->meksisKodu;
    }
    public function setMeksisKodu($meksisKodu)
    {
        $this->meksisKodu = $meksisKodu;
        return $this;
    }

    private $mekanAdi;
    public function getMekanAdi()
    {
        return $this->mekanAdi;
    }
    public function setMekanAdi($mekanAdi)
    {
        $this->mekanAdi = $mekanAdi;
        return $this;
    }

    private $sorumluKisi;
    public function getSorumluKisi()
    {
        return $this->sorumluKisi;
    }
    public function setSorumluKisi($sorumluKisi)
    {
        $this->sorumluKisi = $sorumluKisi;
        return $this;
    }

    private $yukseklik;
    public function getYukseklik()
    {
        return $this->yukseklik;
    }
    public function setYukseklik($yukseklik)
    {
        $yukseklik != '' ? $this->yukseklik = $yukseklik:$this->yukseklik = 0;
        return $this;
    }

    private $hacim;
    public function getHacim()
    {
        return $this->hacim;
    }
    public function setHacim($hacim)
    {
        $hacim != '' ? $this->hacim = $hacim:$this->hacim = 0;
        return $this;
    }

    private $kati;
    public function getKati()
    {
        return $this->kati;
    }
    public function setKati($kati)
    {
        $kati != '' ? $this->kati = $kati:$this->kati = 0;
        return $this;
    }

    private $kitaplik;
    public function getKitaplik()
    {
        return $this->kitaplik;
    }
    public function setKitaplik($kitaplik)
    {
        $kitaplik != '' ? $this->kitaplik = $kitaplik:$this->kitaplik = 0;
        return $this;
    }

    private $sandalye;
    public function getSandalye()
    {
        return $this->sandalye;
    }
    public function setSandalye($sandalye)
    {
        $sandalye != '' ? $this->sandalye = $sandalye:$this->sandalye = 0;
        return $this;
    }

    private $bilgisayar;
    public function getBilgisayar()
    {
        return $this->bilgisayar;
    }
    public function setBilgisayar($bilgisayar)
    {
        $bilgisayar != '' ? $this->bilgisayar = $bilgisayar:$this->bilgisayar = 0;
        return $this;
    }

    private $tahtaSayisi;
    public function getTahtaSayisi()
    {
        return $this->tahtaSayisi;
    }
    public function setTahtaSayisi($tahtaSayisi)
    {
        $tahtaSayisi != '' ? $this->tahtaSayisi = $tahtaSayisi:$this->tahtaSayisi = 0;
        return $this;
    }

    private $tahtaTuru;
    public function getTahtaTuru()
    {
        return $this->tahtaTuru;
    }
    public function setTahtaTuru($tahtaTuru)
    {
        $this->tahtaTuru = $tahtaTuru;
        return $this;
    }

    private $masa;
    public function getMasa()
    {
        return $this->masa;
    }
    public function setMasa($masa)
    {
        $masa != '' ? $this->masa = $masa:$this->masa = 0;
        return $this;
    }

    private $isitmaTuru;
    public function getIsitmaTuru()
    {
        return $this->isitmaTuru;
    }
    public function setIsitmaTuru($isitmaTuru)
    {
        $this->isitmaTuru = $isitmaTuru;
        return $this;
    }

    private $ogrenciKapasitesi;
    public function getOgrenciKapasitesi()
    {
        return $this->ogrenciKapasitesi;
    }
    public function setOgrenciKapasitesi($ogrenciKapasitesi)
    {
        $ogrenciKapasitesi != '' ? $this->ogrenciKapasitesi = $ogrenciKapasitesi:$this->ogrenciKapasitesi = 0;
        return $this;
    }

    private $kisiSayisi;
    public function getKisiSayisi()
    {
        return $this->kisiSayisi;
    }
    public function setKisiSayisi($kisiSayisi)
    {
        $kisiSayisi != '' ? $this->kisiSayisi = $kisiSayisi:$this->kisiSayisi = 0;
        return $this;
    }

    private $ad;
    public function getAd()
    {
        return $this->ad;
    }
    public function setAd($ad)
    {
        $this->ad = $ad;
        return $this;
    }

    private $soyad;
    public function getSoyad()
    {
        return $this->soyad;
    }
    public function setSoyad($soyad)
    {
        $this->soyad = $soyad;
        return $this;
    }

    private $tarih;
    public function getTarih()
    {
        return $this->tarih;
    }
    public function setTarih($tarih)
    {
        $this->tarih = $tarih;
        return $this;
    }
}

?>