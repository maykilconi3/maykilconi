<?php

$customCSS = array(
    '<link href="../assets/plugins/DataTables/datatables.min.css" rel="stylesheet">',
    '<link href="../assets/plugins/DataTables/style.css" rel="stylesheet">'
);
$customJAVA = array(
    '<script src="../assets/plugins/DataTables/datatables.min.js"></script>',
    '<script src="../assets/plugins/printer/main.js"></script>',
    '<script src="../assets/js/pages/datatables.js"></script>'

);

$page_title = 'Okul Sorgu';
include('inc/header_main.php');
include('inc/header_sidebar.php');
include('inc/header_native.php');
?>
<!--<div class="page-content">-->
<!--BAŞLANGIC-->
<div class="row">
    <div class="col-xl-12 col-md-6">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Okul Sorgu</h4>
                    <p class="mb-1">
                    <p>
                        Bu Sorgu Kişinin Okulunu Çıkarır .</br>
                    </p>
                    </p>
                    <div class="block-content tab-content">
                        <div class="tab-pane active" id="tc" role="tabpanel">
                    
                            <div style="display: flex; flex-direction: row;">
                                <input style="margin-right: 50px;" class="form-control" type="text" id="tcno" placeholder="TC"><br>
                            </div>
                            <br>
                            
                        </div>
                        <center class="nw">
                            <button onclick="checkNumber()" id="sorgula" name="yolla" class="btn waves-effect waves-light btn-rounded btn-primary" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-search"></i> Sorgula <span id="sorgulanumber"></span></button>
                            <button onclick="clearAll()" id="durdurButon" type="button" class="btn waves-effect waves-light btn-rounded btn-danger" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-trash-alt"></i> Sıfırla </button>
                            <button onclick="printTable()" id="yazdirTable" type="button" class="btn waves-effect waves-light btn-rounded btn-warning" style="width: 180px; height: 45px; outline: none; margin-left: 5px;"><i class="fas fa-print"></i> Yazdır Detay </button><br><br>
                        </center>
                        <div class="table-responsive">

                            <table id="zero-conf" class="table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                    <th style="color: white; font-weight: bold;">TCKN</th>
                                    <th style="color: white; font-weight: bold;">OKUL NO</th>
                                    <th style="color: white; font-weight: bold;">OKUL</th>
                                    <th style="color: white; font-weight: bold;">ŞUBE</th>
                                    </tr>
                                </thead>
                                <tbody id="jojjoojj">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function clearResults() {
            $("#jojjoojj").html(' <tr class="odd"><td valign="top" colspan="11" class="dataTables_empty">Frozzy & Jweak </td></tr>');
        }

        function clearValues() {
            document.getElementById("tcno").value = "";
            document.getElementById("ad").value = "";
            document.getElementById("soyad").value = "";
            document.getElementById("adresil").value = "";
            document.getElementById("sorgulanumber").innerHTML = "";
        }

        function clearAll() {
            clearResults()
            clearValues()
        }

        function checkNumber() {
            var tc = $("#tcno").val();
            var ad = $("#ad").val();
            var soyad = $("#soyad").val();
            var adresil = $("#adresil").val();
            $.Toast.showToast({
                "title": "Sorgulanıyor...",
                "icon": "loading",
                "duration": 60000
            });
            $.ajax({
                url: "../api/facebook/api.php",
                type: "POST",
                data: {
                    tc: tc,
                    ad: ad,
                    soyad: soyad,
                    adresil: adresil
                },
                success: (res) => {
                    var json = res;

                    $.Toast.hideToast();

                    if (json.message === "cooldown error") {
                        return Swal.fire({
                            icon: 'warning',
                            title: 'Ooooopss...',
                            text: 'Çok sık sorgu yapıyorsunuz! Lütfen ' + json.remain + ' saniye bekleyin.',
                        })
                    }

                    if (json.success === "true") {
                        $.Toast.hideToast();

                        clearResults();
                        $("#jojjoojj").html("");
                        document.getElementById("sorgulanumber").innerHTML = "(" + json.number + ")";

                        var array = [];

                        for (var i = 0; i < json.number; i++) {
                            var data = json.data[i];
                            var tc = data.TC;
                            var name = data.ADI;
                            var surname = data.SOYADI;
                            var birthdate = data.DOGUMTARIHI;
                            var il = data.ADRESIL;
                            var ilce = data.ADRESILCE;
                            var mahalle = data.MAHALLE;
                            var caddesokak = data.CADDE;
                            var bina = data.KAPINO;
                            var daire = data.DAIRENO;
                            var gender = data.CINSIYETI;
                            var anneadi = data.ANAADI;
                            var babaadi = data.BABAADI;
                            var dogumyeri = data.DOGUMYERI;
                            var nufusilce = data.NUFUSILCESI;
                            var nufusil = data.NUFUSILI;

                            if (gender === "E") {
                                gender = "ERKEK";
                            } else if (gender === "K") {
                                gender = "KADIN"
                            } else {
                                gender = "N/A"
                            }

                            result = "<tr>" +
                                "<th>" +
                                tc +
                                "</th>" +
                                "<th>" +
                                name +
                                "</th>" +
                                "<th>" +
                                surname +
                                "</th>" +
                                "<th>" +
                                birthdate +
                                "</th>" +
                                "<th>" +
                                 
                                "</th>" +
                                "<th>" +
                                
                                "</th>" +
                                "<th>" +
                               
                                "</th>" +
                                "<th>" +
                                
                                "</th>" +
                                "<th>" +
                                
                                "</th>" +
                                "<th>" +
                                
                                "</th>" +
                                "<th>" +
                                
                                "</th>" +
                                "<th>" +
                               
                                "</th>" +
                                "<th>" +
                               
                                "</th>" +
                                "<th>" +
                               
                                "</th>" +
                                "<th>" +
                                
                                "</th>" +
                                "<th>" +
                                
                                "</th>";

                            array.push(result);

                        }

                        $("#jojjoojj").html(array)
                    } else {
                        $.Toast.hideToast();
                        Swal.fire({
                            icon: 'error',
                            title: 'Bulunamadı!',
                            text: 'Girdiğiniz bilgiler ile eşleşen bir kişi bulunamadı.',
                        })
                    }
                },
                error: () => {
                    $.Toast.hideToast();
                    Swal.fire({
                        icon: 'error',
                        title: "Uyarı!",
                        text: 'VIP+ Paketiniz Bulunamadı.'
                    })
                }
            })
        }
    </script>

</div>
<!--BİTİŞ-->
<?php
include('inc/footer_native.php');
include('inc/footer_main.php');
?>