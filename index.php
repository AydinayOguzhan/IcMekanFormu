<?php
    require_once("/wamp64/www/icMekanFormu/Business/girisFormuManager.php");
    $girisFormuManager = new GirisFormuManager();

    $pencereTuru = $girisFormuManager->GetPencereTuru();
    $isiklandirmaTuru = $girisFormuManager->GetIsiklandirmaTuru();
    $cepheTuru = $girisFormuManager->GetCepheTuru();
    $tahtaTuru = $girisFormuManager->GetTahtaTuru();
    $isitmaTuru = $girisFormuManager->GetIsitmaTuru();
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>İç Mekan Giriş Formu</title>

    <link href="./style.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


</head>

<script>
    function save() {
        var firstNameError = document.getElementById("firstNameError").style.display="none";
        var lastNameError = document.getElementById("lastNameError").style.display="none";

        var binaId = document.getElementById("binaId").value;
        var altFonksiyon = document.getElementById("altFonksiyon").value;
        var odaNo = document.getElementById("odaNo").value;
        var en = document.getElementById("en").value;
        var boy = document.getElementById("boy").value;
        var toplamAlan = document.getElementById("toplamAlan").value;
        var pencereAlani = document.getElementById("pencereAlani").value;
        var pencereTuru = document.getElementById("pencereTuru").value;
        var kaloriferPetek = document.getElementById("kaloriferPetek").value;
        var klima = document.getElementById("klima").value;
        var klimaSayisi = document.getElementById("klimaSayisi").value;
        var isiklandirma = document.getElementById("isiklandirma").value;
        var isiklandirmaTuru = document.getElementById("isiklandirmaTuru").value;
        var cephe = document.getElementById("cephe").value;
        var projeksiyon = document.getElementById("projeksiyon").value;
        var meksisKodu = document.getElementById("meksisKodu").value;
        var mekanAdi = document.getElementById("mekanAdi").value;
        var sorumluKisi = document.getElementById("sorumluKisi").value;
        var yukseklik = document.getElementById("yukseklik").value;
        var hacim = document.getElementById("hacim").value;
        var kati = document.getElementById("kati").value;
        var kitaplik = document.getElementById("kitaplik").value;
        var sandalye = document.getElementById("sandalye").value;
        var bilgisayar = document.getElementById("bilgisayar").value;
        var tahtaSayisi = document.getElementById("tahtaSayisi").value;
        var tahtaTuru = document.getElementById("tahtaTuru").value;
        var masa = document.getElementById("masa").value;
        var isitmaTuru = document.getElementById("isitmaTuru").value;
        var ogrenciKapasitesi = document.getElementById("ogrenciKapasitesi").value;
        var kisiSayisi = document.getElementById("kisiSayisi").value;
        var firstName = document.getElementById("firstName").value;
        var lastName = document.getElementById("lastName").value;
        var date = new Date().toISOString().slice(0, 19).replace('T', ' ');

        var header1 = document.getElementById("header1").value;
        var input1 = document.getElementById("input1").value;
        var header2 = document.getElementById("header2").value;
        var input2 = document.getElementById("input2").value;
        var header3 = document.getElementById("header3").value;
        var input3 = document.getElementById("input3").value;
        var header4 = document.getElementById("header4").value;
        var input4 = document.getElementById("input4").value;
        var header5 = document.getElementById("header5").value;
        var input5 = document.getElementById("input5").value;
        var header6 = document.getElementById("header6").value;
        var input6 = document.getElementById("input6").value;
        var header7 = document.getElementById("header7").value;
        var input7 = document.getElementById("input7").value;
        var header8 = document.getElementById("header8").value;
        var input8 = document.getElementById("input8").value;
        var header9 = document.getElementById("header9").value;
        var input9 = document.getElementById("input9").value;
        var header10 = document.getElementById("header10").value;
        var input10 = document.getElementById("input10").value;
        var header11 = document.getElementById("header11").value;
        var input11 = document.getElementById("input11").value;
        var header12 = document.getElementById("header12").value;
        var input12 = document.getElementById("input12").value;

        var url = "Connections/girisFormuConnection.php";

        if (firstName == "" ) {
            var firstNameError = document.getElementById("firstNameError");
            firstNameError.style.display = "block";
            firstNameError.innerHTML = "Lütfen bu alanı boş bırakmayınız"
        } else if(lastName == ""){
            var firstNameError = document.getElementById("firstNameError").style.display="none";
            var lastNameError = document.getElementById("lastNameError");
            lastNameError.style.display = "block";
            lastNameError.innerHTML = "Lütfen bu alanı boş bırakmayınız"
        }else {
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    binaId: binaId,
                    altFonksiyon: altFonksiyon,
                    odaNo: odaNo,
                    en: en,
                    boy: boy,
                    toplamAlan: toplamAlan,
                    pencereAlani: pencereAlani,
                    pencereTuru: pencereTuru,
                    kaloriferPetek: kaloriferPetek,
                    klima: klima,
                    klimaSayisi: klimaSayisi,
                    isiklandirma: isiklandirma,
                    isiklandirmaTuru: isiklandirmaTuru,
                    cephe: cephe,
                    projeksiyon: projeksiyon,
                    meksisKodu: meksisKodu,
                    mekanAdi: mekanAdi,
                    sorumluKisi: sorumluKisi,
                    yukseklik: yukseklik,
                    hacim: hacim,
                    kati: kati,
                    kitaplik: kitaplik,
                    sandalye: sandalye,
                    bilgisayar: bilgisayar,
                    tahtaSayisi: tahtaSayisi,
                    tahtaTuru: tahtaTuru,
                    masa: masa,
                    isitmaTuru: isitmaTuru,
                    ogrenciKapasitesi: ogrenciKapasitesi,
                    kisiSayisi: kisiSayisi,
                    firstName: firstName,
                    date: date,
                    lastName: lastName,
                    header1: header1,
                    input1: input1,
                    header2: header2,
                    input2: input2,
                    header3: header3,
                    input3: input3,
                    header4: header4,
                    input4: input4,
                    header5: header5,
                    input5: input5,
                    header6: header6,
                    input6: input6,
                    header7: header7,
                    input7: input7,
                    header8: header8,
                    input8: input8,
                    header9: header9,
                    input9: input9,
                    header10: header10,
                    input10: input10,
                    header11: header11,
                    input11: input11,
                    header12: header12,
                    input12: input12,
                },
            })
            .done(function(response) {
                if (response == true) {
                    window.location.reload();
                }else{
                    alert("Bir hata oluştu lütfen tekrar deneyin");
                }
                console.log(response);
            })
        }
    }
</script>

<body>
    <div class="container-fluid">
        <br>
        <div class="d-flex justify-content-sm-center">
            <h2 class="alert alert-primary p-2">Dokuz Eylül Üniversitesi Akıllı Üniversite Projesi İç Mekan Giriş Formu</h2>
        </div>
        <form>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-floating mb-3">
                        <input class="form-control" autofocus placeholder="Bina Id" type="number" id="binaId">
                        <label class="form-label" for="binaId">Bina Id</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" placeholder="Alt Fonksiyon" type="text" id="altFonksiyon">
                        <label class="form-label" for="altFonksiyon">Alt Fonksiyon</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" placeholder="Oda No" type="number" id="odaNo">
                        <label class="form-label" for="odaNo">Oda No</label>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" placeholder="En" type="number" id="en">
                                <label class="form-label" for="en">En</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" placeholder="Boy" type="number" id="boy">
                                <label class="form-label" for="boy">Boy</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" placeholder="Toplam Alanı (m2)" type="number" id="toplamAlan">
                        <label class="form-label" for="toplamAlan">Toplam Alanı (m2)</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" placeholder="Pencere Alanı (m2)" type="number" id="pencereAlani">
                        <label class="form-label" for="pencereAlani">Pencere Alanı (m2)</label>
                    </div>

                    <div class="mb-3">
                        <label for="pencereTuru">Pencere Türü</label>
                        <select class="form-select" id="pencereTuru" aria-label="Pencere Türü">
                            <option value="0" selected>Lütfen seçim yapınız</option>
                            <?php foreach ($pencereTuru as $key => $value) { ?>
                            <option value="<?php echo $value["id"] ?>"><?php echo $value["tur"]; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" placeholder="Kalorifer Petek (Adet)" type="number" id="kaloriferPetek">
                        <label class="form-label" for="kaloriferPetek">Kalorifer Petek (Adet)</label>
                    </div>

                    <div class="mb-3">
                        <label for="klima">Klima (Var/Yok)</label>
                        <select class="form-select" id="klima" aria-label="Klima">
                            <option value="0" selected>Lütfen seçim yapınız</option>
                            <option value="true">Var</option>
                            <option value="false">Yok</option>
                        </select>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" placeholder="Klima Sayısı" type="number" id="klimaSayisi">
                        <label class="form-label" for="klimaSayisi">Klima Sayısı</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" placeholder="Işıklandırma (Adet)" type="number" id="isiklandirma">
                        <label class="form-label" for="isiklandirma">Işıklandırma (Adet)</label>
                    </div>

                    <div class="mb-3">
                        <label for="isiklandirmaTuru">Işıklandırma Türü</label>
                        <select class="form-select" id="isiklandirmaTuru" aria-label="Işıklandırma Türü">
                            <option value="0" selected>Lütfen seçim yapınız</option>
                            <?php foreach ($isiklandirmaTuru as $key => $value) { ?>
                            <option value="<?php echo $value["id"] ?>"><?php echo $value["tur"]; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="cephe">Cephesi</label>
                        <select class="form-select" id="cephe" aria-label="Cephesi">
                            <option value="0" selected>Lütfen seçim yapınız</option>
                            <?php foreach ($cepheTuru as $key => $value) { ?>
                            <option value="<?php echo $value["id"] ?>"><?php echo $value["tur"]; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" placeholder="Projeksiyon (Adet)" type="number" id="projeksiyon">
                        <label class="form-label" for="projeksiyon">Projeksiyon (Adet)</label>
                    </div>
                </div>
                <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                <div class="col-sm-6">
                    <div class="form-floating mb-3">
                        <input class="form-control" placeholder="Meksis Kodu" type="number" id="meksisKodu">
                        <label class="form-label" for="meksisKodu">Meksis Kodu</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" placeholder="Mekan Adı" type="text" id="mekanAdi">
                        <label class="form-label" for="mekanAdi">Mekan Adı</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" placeholder="Sorumlu Kişi" type="text" id="sorumluKisi">
                        <label class="form-label" for="sorumluKisi">Sorumlu Kişi</label>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" placeholder="Yükseklik" type="number" id="yukseklik">
                                <label class="form-label" for="yukseklik">Yükseklik</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" placeholder="Hacim" type="number" id="hacim">
                                <label class="form-label" for="hacim">Hacim</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" placeholder="Katı" type="number" id="kati">
                        <label class="form-label" for="kati">Katı</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" placeholder="Kitaplık" type="number" id="kitaplik">
                        <label class="form-label" for="kitaplik">Kitaplık</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" placeholder="Sandalye" type="number" id="sandalye">
                        <label class="form-label" for="sandalye">Sandalye</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" placeholder="Bilgisayar" type="number" id="bilgisayar">
                        <label class="form-label" for="bilgisayar">Bilgisayar</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" placeholder="Tahta Sayısı" type="number" id="tahtaSayisi">
                        <label class="form-label" for="tahtaSayisi">Tahta Sayısı</label>
                    </div>

                    <div class="mb-3">
                        <label for="tahtaTuru">Tahta Türü</label>
                        <select class="form-select" id="tahtaTuru" aria-label="Tahta Türü">
                            <option value="0" selected>Lütfen seçim yapınız</option>
                            <?php foreach ($tahtaTuru as $key => $value) { ?>
                            <option value="<?php echo $value["id"] ?>"><?php echo $value["tur"]; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" placeholder="Masa" type="number" id="masa">
                        <label class="form-label" for="masa">Masa</label>
                    </div>

                    <div class="mb-3">
                        <label for="isitmaTuru">Isıtma Türü</label>
                        <select class="form-select" id="isitmaTuru" aria-label="Isıtma Türü">
                            <option value="0" selected>Lütfen seçim yapınız</option>
                            <?php foreach ($isitmaTuru as $key => $value) { ?>
                            <option value="<?php echo $value["id"] ?>"><?php echo $value["tur"]; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" placeholder="Öğrenci Kapasitesi" type="number" id="ogrenciKapasitesi">
                        <label class="form-label" for="ogrenciKapasitesi">Öğrenci Kapasitesi</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" placeholder="Kişi Sayısı" type="number" id="kisiSayisi">
                        <label class="form-label" for="kişiSayisi">Kişi Sayısı</label>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="alert alert-primary text-center">
                    <label>
                        <h5>Yukarıdaki Listede Olmayan Objeleri Eklemek İçin Aşağıdaki Formları Doldurunuz</h5>
                    </label>
                </div>
                <div class="col-sm-6">
                    <div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Başlık" type="text" id="header1">
                            <label class="form-label" for="header1">Başlık</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Değer" type="text" id="input1">
                            <label class="form-label" for="input1">Değer</label>
                        </div>
                    </div>

                    <div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Başlık" type="text" id="header2">
                            <label class="form-label" for="header2">Başlık</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Değer" type="text" id="input2">
                            <label class="form-label" for="input2">Değer</label>
                        </div>
                    </div>

                    <div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Başlık" type="text" id="header3">
                            <label class="form-label" for="header3">Başlık</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Değer" type="text" id="input3">
                            <label class="form-label" for="input3">Değer</label>
                        </div>
                    </div>

                    <div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Başlık" type="text" id="header4">
                            <label class="form-label" for="header4">Başlık</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Değer" type="text" id="input4">
                            <label class="form-label" for="input4">Değer</label>
                        </div>
                    </div>

                    <div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Başlık" type="text" id="header5">
                            <label class="form-label" for="header5">Başlık</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Değer" type="text" id="input5">
                            <label class="form-label" for="input5">Değer</label>
                        </div>
                    </div>

                    <div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Başlık" type="text" id="header6">
                            <label class="form-label" for="header6">Başlık</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Değer" type="text" id="input6">
                            <label class="form-label" for="input6">Değer</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="alert alert-primary text-end">
                            <label class="">Formu Dolduran:</label>
                        </div>
                    </div>
                </div>
                <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                <div class="col-sm-6">
                    <div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Başlık" type="text" id="header7">
                            <label class="form-label" for="header7">Başlık</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Değer" type="text" id="input7">
                            <label class="form-label" for="input7">Değer</label>
                        </div>
                    </div>

                    <div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Başlık" type="text" id="header8">
                            <label class="form-label" for="header8">Başlık</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Değer" type="text" id="input8">
                            <label class="form-label" for="input8">Değer</label>
                        </div>
                    </div>

                    <div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Başlık" type="text" id="header9">
                            <label class="form-label" for="header9">Başlık</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Değer" type="text" id="input9">
                            <label class="form-label" for="input9">Değer</label>
                        </div>
                    </div>

                    <div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Başlık" type="text" id="header10">
                            <label class="form-label" for="header10">Başlık</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Değer" type="text" id="input10">
                            <label class="form-label" for="input10">Değer</label>
                        </div>
                    </div>

                    <div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Başlık" type="text" id="header11">
                            <label class="form-label" for="header11">Başlık</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Değer" type="text" id="input11">
                            <label class="form-label" for="input11">Değer</label>
                        </div>
                    </div>

                    <div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Başlık" type="text" id="header12">
                            <label class="form-label" for="header12">Başlık</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Değer" type="text" id="input12">
                            <label class="form-label" for="input12">Değer</label>
                        </div>
                    </div>

                    <div>
                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="İsim" type="text" id="firstName">
                            <label class="form-label" for="firstName">İsim</label>
                        </div>
                        <label class="errorMessage" id="firstNameError"></label>

                        <div class="form-floating mb-3">
                            <input class="form-control" placeholder="Soy İsim" type="text" id="lastName">
                            <label class="form-label" for="lastName">Soy İsim</label>
                        </div>
                        <label class="errorMessage" id="lastNameError"></label>
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="button" onclick="save()">Kaydet</button>
                    </div>
                </div>
            </div>
        </form>
        <br><br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>