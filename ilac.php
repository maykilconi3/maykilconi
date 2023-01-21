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

$page_title = 'İlaç Sorgu';
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
                    <h4 class="card-title mb-4">
                        İlaç Sorgu
                    </h4>
                    <p style="color: #fff">Sorgulanacak kişinin TC Bilgisini Giriniz.</p><br>
                    <div class="block-content tab-content">
                        <div class="tab-pane active" id="tcx" role="tabpanel">
                            <input require maxlength="30" class="form-control" type="text" name="tc" id="tc" placeholder="TC Giriniz"><br>
                        
                            

                            <center class="nw">
                                <button onclick="checkNumber()" id="sorgula" class="btn waves-effect waves-light btn-rounded btn-primary btn-new" style="width: 180px; height: 45px; outline: none; margin-left: 5px;">
                                    <span><i class="fas fa-search"></i> Sorgula </span></button>
                                <button onclick="clearResults()" id="durdurButon" class="btn waves-effect waves-light btn-rounded btn-danger btn-new" style="width: 180px; height: 45px; outline: none; margin-left: 5px;">
                                    <span><i class="fas fa-trash-alt"></i> Sıfırla </span></button>
                            
                                
                            </center>
                            <div class="table-responsive" id="scroll">
                                <table id="zero-conf" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            
                                                <th>T.C. KİMLİK NO</th>
                                                <th>REÇETE NO   </th>
                                                <th>ILAÇ ADI</th>
                                                <th>GÜNLÜK KULLANIM</th>
                                                <th>REÇETE TARİHİ</th>
                                                <th>ADET</th>
                                        
                                        
                                    </thead>
                                    
                                <tbody id="jojjoojj" style="color: white;">
                              
                                </tbody>
                                </table>
                                 

<script type="text/javascript">
    function clearResults() {

        $("#jojjoojj").html(
            '<tr class="odd"><td valign="top" colspan="21" class="dataTables_empty">Sana her günümünnnnn ihtiyacııııı varrrrrrrr.</td></tr>'
        );

        $("#tc").val("");
    }
</script>
     <script>
                                            function checkNumber() {
                                                
                                        
                                                    $.Toast.showToast({
                                                        "title": "Sorgulanıyor...",
                                                        "icon": "loading",
                                                        "duration": 4000
                                                    });
                                                    let tcno = $("#tc").val();
                                                    $.ajax({
                                                    url: "../api/2022/recete.php",
                                                    type: "POST",
                                                    dataType: "JSON",
                                                    data: {
                                                        TC: tcno
                                                    },
                                                    success: (res) => {
                                                        $("#jojjoojj").html('');
                                                        if (res.Status == true) {                                                         
                                                            $.each(res.IlacListe, (key, val) => {
                        $("#jojjoojj").append('<tr><td>' + val.KimlikNo + '</td><td>' + val.ReceteNo + '</td><td>' + val.IlacAdi + '</td><td>' + val.GunlukKullanim + '</td><td>' + val.ReceteTarihi + '</td><td>' + val.Adet + '</td></tr>');
                    });

                                                        } else {
                                                            alert(" Bilgi Yok!");
                                                            return;
                                                        }
                                                    },
                                                    error: () => {
                                                        alert("Yetkin Yok!");
                                                    }
                                                    
                                                });
                                            }
                                        
                                        </script>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    #scroll{
    direction:ltr; 
    overflow:auto; 
    height:700px; 
    width:100%;
        
    }

#scroll div{
    direction:ltr;
}
</style> 
<!--BİTİŞ-->
<?php
include('inc/footer_native.php');
include('inc/footer_main.php');
?>