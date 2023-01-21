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
<h5 class="content-heading">Üyelik Paketleri</h5>
<h7 class="content-heading">Jweak Paketler ile daha hızlı ve güçlü çözümlere ulaşabilirsin!</h7>
<br>
<br>
<div class="block block-rounded">
    <div class="table-responsive">
        <table class="table table-borderless table-hover table-vcenter text-center mb-0">
            <thead class="table-dark text-uppercase fs-sm">
                <tr>
                    <th class="py-3" style="width: 180px;"></th>
                    <th class="py-3">Freemium</th>
                    <th class="py-3">Plus</th>
                    <th class="py-3">VİP</th>

                </tr>
            </thead>
            <tbody>
                <tr class="bg-body-light">
                    <td></td>
                    <td class="py-4">
                        <div class="h1 fw-bold mb-2">0 ₺</div>
                        <div class="h6 text-muted mb-0">aylık</div>
                    </td>
                    <td class="py-4">
                        <div class="h1 fw-bold mb-2">100 ₺</div>
                        <div class="h6 text-muted mb-0">aylık</div>
                    </td>
                </tr>
                <tr>
                    <td class="fw-semibold text-start">Ad Soyad PLUS</td>
                    <td><i class="fa fa-times fa-fw text-danger"></i></td>
                    <td><i class="fa fa-check fa-fw text-success"></i></td>
                </tr>
                <tr>
                    <td class="fw-semibold text-start">TC'den Sorgu</td>
                    <td><i class="fa fa-times fa-fw text-danger"></i></td>
                    <td><i class="fa fa-check fa-fw text-success"></i></td>
                </tr>
                <tr>
                    <td class="fw-semibold text-start">TC'den GSM</td>
                    <td><i class="fa fa-times fa-fw text-danger"></i></td>
                    <td><i class="fa fa-check fa-fw text-success"></i></td>
                </tr>
                <tr>
                    <td class="fw-semibold text-start">GSM'den TC</td>
                    <td><i class="fa fa-times fa-fw text-danger"></i></td>
                    <td><i class="fa fa-check fa-fw text-success"></i></td>
                </tr>
                <tr>
                    <td class="fw-semibold text-start">Hane Sorgu</td>
                    <td><i class="fa fa-times fa-fw text-danger"></i></td>
                    <td><i class="fa fa-check fa-fw text-success"></i></td>
                </tr>
                <tr>
                <td class="fw-semibold text-start">Okul Sorgu</td>
                <td><i class="fa fa-times fa-fw text-danger"></i></td>
                <td><i class="fa fa-check fa-fw text-success"></i></td>
                </tr>
                <tr>

                    <td class="fw-semibold text-start">Sokak Sorgu</td>
                    <td><i class="fa fa-times fa-fw text-danger"></i></td>
                    <td><i class="fa fa-check fa-fw text-success"></i></td>
                </tr>
                <tr>
                    <td class="fw-semibold text-start">Soyağacı Sorgu</td>
                    <td><i class="fa fa-times fa-fw text-danger"></i></td>
                    <td><i class="fa fa-check fa-fw text-success"></i></td>
                </tr>
                <tr>
                    <td class="fw-semibold text-start">Aile Sorgu</td>
                    <td><i class="fa fa-times fa-fw text-danger"></i></td>
                    <td><i class="fa fa-check fa-fw text-success"></i></td>
                </tr>
                <tr>
                    <td class="fw-semibold text-start">Vesika Sorgu</td>
                    <td><i class="fa fa-times fa-fw text-danger"></i></td>
                    <td><i class="fa fa-check fa-fw text-success"></i></td>
                </tr>
                <tr>
                <td class="fw-semibold text-start">İkametgah Sorgu</td>
                <td><i class="fa fa-times fa-fw text-danger"></i></td>
                <td><i class="fa fa-check fa-fw text-success"></i></td>
                </tr>
                <tr>
                <td class="fw-semibold text-start">İkametgah Sorgu</td>
                <td><i class="fa fa-times fa-fw text-danger"></i></td>
                <td><i class="fa fa-check fa-fw text-success"></i></td>



               </tr>
                <tr>
                <td class="fw-semibold text-start">İlaç Sorgu</td>
                    <td><i class="fa fa-times fa-fw text-danger"></i></td>
                    <td><i class="fa fa-check fa-fw text-success"></i></td>
                </tr>
                <tr>
                <td class="fw-semibold text-start">CC Checker</td>
                    <td><i class="fa fa-times fa-fw text-danger"></i></td>
                    <td><i class="fa fa-check fa-fw text-success"></i></td>
                </tr>
                <tr>
                <td class="fw-semibold text-start">BluTV Checker</td>
                    <td><i class="fa fa-times fa-fw text-danger"></i></td>
                    <td><i class="fa fa-check fa-fw text-success"></i></td>

                </tr>
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