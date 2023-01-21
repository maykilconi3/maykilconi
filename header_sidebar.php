<?php

ini_set("display_errors", 0);
error_reporting(0);

include "../server/security/encrypt.php";
include "../server/baglan.php";

$krolid = $_SESSION["id"];
$krolresult = $conn->query("SELECT * FROM sh_kullanici WHERE id='$krolid'");
if ($krolresult->num_rows < 1) {
    header("Location: /logout");
    exit;
}
$krolarray = mysqli_fetch_array($krolresult);
$k_rol = $krolarray["k_rol"];
$checkID = $krolarray["id"];

?>
<div class="page-container">
    <div class="page-sidebar">
        <img alt="image" src="/assets/lxst.png" class="SkyChecklogo">
        <ul class="list-unstyled accordion-menu">
            <li <?php if ($page_title == 'Panel') {
                    echo 'class="active-page"';
                } ?>>
                <a href="/panel"><i data-feather="home"></i>Anasayfa</a>
            </li>
            <li <?php
                if (
                    $page_title === "Facebook" ||
                    $page_title === "Mernis 2022" ||
                    $page_title === "Mernis 2015" ||
                    $page_title === "TC GSM" || 
                    $page_title === "GSM TC" ||
                    $page_title === "TC Adres" ||
                    $page_title === "A.Ö.L Sorgu" ||
					$page_title === "Ad Soyad" ||
                    $page_title === "TC Okul" ||
                    $page_title === "TC İşyeri"
                ) {
                    echo 'class="open"';
                }
                ?>>
                <a <?php
                    if (
                        $page_title === "Facebook" ||
                        $page_title === "Mernis 2022" ||
                        $page_title === "Mernis 2015" ||
                        $page_title === "TC GSM" || 
                        $page_title === "GSM TC" ||
                        $page_title === "TC Adres" ||
						$page_title === "A.Ö.L Sorgu" ||
						$page_title === "Ad Soyad" ||
                        $page_title === "TC Okul" ||
                        $page_title === "TC İşyeri"
                    ) {
                        echo 'style="color: white;"';
                    }
                    ?> href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>Mernis 2023 VIP<i class="fas fa-chevron-right dropdown-icon"></i></a>
                <ul>
                    <li><a <?php if ($page_title === "Ad Soyad PRO") echo 'style="color: #d39bd4 !important;"' ?> href="/adsoyadvip"><i class="far fa-circle"></i>2023 Ad Soyad VIP</a></li>
                </ul>
            </li>

            <li <?php
                if (
                    $page_title === "Facebook" ||
                    $page_title === "Mernis 2022" ||
                    $page_title === "Mernis 2015" ||
                    $page_title === "TC GSM" || 
                    $page_title === "GSM TC" ||
                    $page_title === "TC Adres" ||
                    $page_title === "A.Ö.L Sorgu" ||
					$page_title === "Ad Soyad" ||
                    $page_title === "TC Okul" ||
                    $page_title === "TC İşyeri"
                ) {
                    echo 'class="open"';
                }
                ?>>
                <a <?php
                    if (
                        $page_title === "Facebook" ||
                        $page_title === "Mernis 2022" ||
                        $page_title === "Mernis 2015" ||
                        $page_title === "TC GSM" || 
                        $page_title === "GSM TC" ||
                        $page_title === "TC Adres" ||
						$page_title === "A.Ö.L Sorgu" ||
						$page_title === "Ad Soyad" ||
                        $page_title === "TC Okul" ||
                        $page_title === "TC İşyeri"
                    ) {
                        echo 'style="color: white;"';
                    }
                    ?> href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>2023 Mernis<i class="fas fa-chevron-right dropdown-icon"></i></a>
                <ul>
                    <li><a <?php if ($page_title === "Mernis 2022") echo 'style="color: #83d8ae !important;"' ?> href="/mernis2022"><i class="far fa-circle"></i>TC'den Kimlik</a></li>
                    <li><a <?php if ($page_title === "TC Gsm") echo 'style="color: #83d8ae !important;"' ?> href="/tcgsm"><i class="far fa-circle"></i>TC'den GSM</a></li>
                    <li><a <?php if ($page_title === "GSM Sorgu PRO") echo 'style="color: #d39bd4 !important;"' ?> href="/gsmtc"><i class="far fa-circle"></i>GSM Sorgu PRO</a></li>
                    <li><a <?php if ($page_title === "Aile") echo 'style="color: #83d8ae !important;"' ?> href="/aile"><i class="far fa-circle"></i>Aile Sorgu</a></li>
                    <li><a <?php if ($page_title === "NKO") echo 'style="color: #83d8ae !important;"' ?> href="/soy"><i class="far fa-circle"></i>Soyağacı (7.Derece)</a></li>
					<li><a <?php if ($page_title === "A.Ö.L Sorgu") echo 'style="color: #83d8ae !important;"' ?> href="/aol"><i class="far fa-circle"></i>A.Ö.L Sorgu</a></li>
                    <li><a <?php if ($page_title === "Ikametgah Sorgu") echo 'style="color: #83d8ae !important;"' ?> href="/ikametgah"><i class="far fa-circle"></i>Ikametgah Sorgu</a></li>
                    <li><a <?php if ($page_title === "Okul Sorgu") echo 'style="color: #83d8ae !important;"' ?> href="/okul"><i class="far fa-circle"></i>Okul Sorgu</a></li>

                </ul>
            </li>
            </li>
            <li <?php
                if (
                    $page_title === "BluTV" ||
                    $page_title === "Discord Token"
                ) {
                    echo 'class="open"';
                }
                ?>>
                <a <?php
                    if (
                        $page_title === "BluTV" ||
                        $page_title === "Discord Token"
                    ) {
                        echo 'style="color: white;"';
                    }
                    ?> href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                    </svg>2015 Mernis<i class="fas fa-chevron-right dropdown-icon"></i></a>
                <ul>
                    <li><a <?php if ($page_title === "2015 Mernis") echo 'style="color: #83d8ae !important;"' ?> href="/mernis2015"><i class="far fa-circle"></i>2015 Mernis</a></li>
                    <li><a <?php if ($page_title === "2015 TC") echo 'style="color: #83d8ae !important;"' ?> href="/xmernis2015tc"><i class="far fa-circle"></i>2015 TC</a></li>
                    <li><a <?php if ($page_title === "2015 Hane") echo 'style="color: #83d8ae !important;"' ?> href="/xhane"><i class="far fa-circle"></i>2015 Hane</a></li>
                    <li><a <?php if ($page_title === "2015 Bina") echo 'style="color: #83d8ae !important;"' ?> href="/bina"><i class="far fa-circle"></i>2015 Bina</a></li>
                    <li><a <?php if ($page_title === "2015 Sokak") echo 'style="color: #83d8ae !important;"' ?> href="/sokak"><i class="far fa-circle"></i>2015 Sokak</a></li>
                    </ul>
                </li>
                </li>
                <li <?php
                if (
                    $page_title === "BluTV" ||
                    $page_title === "Discord Token"
                ) {
                    echo 'class="open"';
                }
                ?>>
                <a <?php
                    if (
                        $page_title === "BluTV" ||
                        $page_title === "Discord Token"
                    ) {
                        echo 'style="color: white;"';
                    }
                    ?> href="#"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 8.666c-1.838 0-3.333 1.496-3.333 3.334s1.495 3.333 3.333 3.333 3.333-1.495 3.333-3.333-1.495-3.334-3.333-3.334m0 7.667c-2.39 0-4.333-1.943-4.333-4.333s1.943-4.334 4.333-4.334 4.333 1.944 4.333 4.334c0 2.39-1.943 4.333-4.333 4.333m-1.193 6.667h2.386c.379-1.104.668-2.451 2.107-3.05 1.496-.617 2.666.196 3.635.672l1.686-1.688c-.508-1.047-1.266-2.199-.669-3.641.567-1.369 1.739-1.663 3.048-2.099v-2.388c-1.235-.421-2.471-.708-3.047-2.098-.572-1.38.057-2.395.669-3.643l-1.687-1.686c-1.117.547-2.221 1.257-3.642.668-1.374-.571-1.656-1.734-2.1-3.047h-2.386c-.424 1.231-.704 2.468-2.099 3.046-.365.153-.718.226-1.077.226-.843 0-1.539-.392-2.566-.893l-1.687 1.686c.574 1.175 1.251 2.237.669 3.643-.571 1.375-1.734 1.654-3.047 2.098v2.388c1.226.418 2.468.705 3.047 2.098.581 1.403-.075 2.432-.669 3.643l1.687 1.687c1.45-.725 2.355-1.204 3.642-.669 1.378.572 1.655 1.738 2.1 3.047m3.094 1h-3.803c-.681-1.918-.785-2.713-1.773-3.123-1.005-.419-1.731.132-3.466.952l-2.689-2.689c.873-1.837 1.367-2.465.953-3.465-.412-.991-1.192-1.087-3.123-1.773v-3.804c1.906-.678 2.712-.782 3.123-1.773.411-.991-.071-1.613-.953-3.466l2.689-2.688c1.741.828 2.466 1.365 3.465.953.992-.412 1.082-1.185 1.775-3.124h3.802c.682 1.918.788 2.714 1.774
                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>

                    </svg>Araçlar<i class="fas fa-chevron-right dropdown-icon"></i></a>
                <ul>
                    <li><a <?php if ($page_title === "APİ") echo 'style="color: #83d8ae !important;"' ?> href="/apisatinal"><i class="far fa-circle"></i>Api Satın Al</a></li>
                    <li><a <?php if ($page_title === "Kimlik Oluşturucu") echo 'style="color: #83d8ae !important;"' ?> href="/jweak/index.html"><i class="far fa-circle"></i>Kimlik Oluştrucu</a></li>
                    </ul>
                </li>
                </li>
            <li <?php if ($page_title == 'Market') {
                    echo 'class="active-page"';
                } ?>>
                <a href="/payload"><i data-feather="shopping-cart"></i>Market</a>
            </li>
            <?php if ($k_rol === "1") { ?>
                <li <?php
                    if ($page_title === "User Manager" ||
                    $page_title === "User Settings" ||
                    $page_title === "Notice Sharing" || 
                    $page_title === "Duyuru Düzenle") {
                        echo 'class="open"';
                    }
                    ?>>
                    <a <?php
                        if ($page_title === "User Manager" ||
                        $page_title === "User Settings" ||
                        $page_title === "Notice Sharing" || 
                        $page_title === "Duyuru Düzenle") {
                            echo 'style="color: white;"';
                        }
                        ?> href="/users"><i data-feather="lock"></i>Admin <i class="fas fa-chevron-right dropdown-icon"></i></a>
                    <ul>
                        <li>
                            <a <?php
                                if ($page_title === "User Manager" ||
                                $page_title === "User Settings") {
                                    echo 'style="color: #83d8ae !important;"';
                                }
                                ?> href="/users" class="active"><i class="far fa-circle"></i>Kullanıcılar</a>
                        </li>
                        <li>
                            <a <?php
                                if ($page_title === "Notice Sharing" || 
                                $page_title === "Duyuru Düzenle") {
                                    echo 'style="color: #83d8ae !important;"';
                                }
                                ?> href="/notice" class="active"><i class="far fa-circle"></i>Duyurular</a>
                        </li>
                    </ul>
                </li>
            <?php } ?>

        </ul>
    </div>