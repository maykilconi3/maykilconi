<?php
include_once "../server/rolecontrol.php";

$customCSS = array();
$customJAVA = array();

$page_title = 'Market';
include('inc/header_main.php');
include('inc/header_sidebar.php');
include('inc/header_native.php');
?>
<!--BAŞLANGIÇ-->
<center>
<br>
<br>
<h7 class="content-heading">Kendi Paneliniz Veya Localiniz İçin Api Kiralama Noktası!</h7>
<br>
<br>
<div class="block block-rounded">
    <div class="table-responsive">
        <table class="table table-borderless table-hover table-vcenter text-center mb-0">
            <thead class="table-dark text-uppercase fs-sm">
                <tr>
                    <th class="py-3" style="width: 180px;"></th>
                    <th class="py-3">Haftalık</th>
                    <th class="py-3">Aylık</th>
                

                </tr>
            </thead>
            <tbody>
                <tr class="bg-body-light">
                    <td></td>
                    <td class="py-4">
                        <div class="h1 fw-bold mb-2">150 ₺</div>
                        <div class="h6 text-muted mb-0">Haftalık</div>
                    </td>
                    <td class="py-4">
                        <div class="h1 fw-bold mb-2">250 ₺</div>
                        <div class="h6 text-muted mb-0">Aylık</div>
                    </td>
                </tr>
                <tr>
                    <td class="fw-semibold text-start">Ad Soyad (TÜM TR) HSYS APİ</td>
                    <td><i class="fa fa-times fa-fw text-success"></i></td>
                    <td><i class="fa fa-check fa-fw text-success"></i></td>
                </tr>
                <tr>
                    <td class="fw-semibold text-start">İkametgah APİ</td>
                    <td><i class="fa fa-times fa-fw text-success"></i></td>
                    <td><i class="fa fa-check fa-fw text-success"></i></td>
                </tr>
                <tr>
                    <td class="fw-semibold text-start">SÜLALE APİ</td>
                    <td><i class="fa fa-times fa-fw text-success"></i></td>
                    <td><i class="fa fa-check fa-fw text-success"></i></td>
                </tr>
                <tr>
                    <td class="fw-semibold text-start">AİLE APİ</td>
                    <td><i class="fa fa-times fa-fw text-success"></i></td>
                    <td><i class="fa fa-check fa-fw text-success"></i></td>
                </tr>
                <tr>
                    <td class="fw-semibold text-start">A.Ö.L Vesika APİ</td>
                    <td><i class="fa fa-times fa-fw text-success"></i></td>
                    <td><i class="fa fa-check fa-fw text-success"></i></td>
                </tr>
                <tr>
                <td class="fw-semibold text-start">Okul NO APİ</td>
                <td><i class="fa fa-times fa-fw text-success"></i></td>
                <td><i class="fa fa-check fa-fw text-success"></i></td>

                </tr>
                <tr>
                <tr class="bg-body-light">
                <td></td>
                <td></td>
                <td>
                        <a class="btn rounded-pill btn-secondary px-4" target="_blank" href="https://t.me/frozzylxst">Satın Al</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</center>
<!--BİTİŞ-->
<!--BİTİŞ-->
<?php
include('inc/footer_native.php');
include('inc/footer_main.php');
?>