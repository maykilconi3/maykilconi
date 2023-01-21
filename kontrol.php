<?php
require('baglan.php');
include('../admin/func/gen_func.php');

date_default_timezone_set('Europe/Istanbul');
error_reporting(0);
ini_set('display_errors', 0);

if (isset($_POST['g-recaptcha-response'])) {
    $secretkey = "6LecnEweAAAAAPn4Ou_qmMlg4Ry1zgsp4XirNQ2o";
    $ip = $_SERVER['REMOTE_ADDR'];
    $response = $_POST['g-recaptcha-response'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
    $fire = file_get_contents($url);
    $data = json_decode($fire, true);
    $wizard = true;
    if ($wizard == true) {
        if (isset($_POST['sessionStart']) && isset($_COOKIE['k_mail'])) {
            $k_mail = $_COOKIE['k_mail'];
            $k_sifre = md5(htmlspecialchars($_POST['sessionPass']));

            if (!empty($k_sifre)) {
                $sql = "SELECT * FROM `sh_kullanici` WHERE `k_mail`=? && `k_sifre`=?";
                $res = $conn->prepare($sql);
                $res->bind_param("ss", $k_mail, $k_sifre);
                $res->execute();
                $sorgula = $res->get_result();
                if (!$sorgula) {
                    header("Location: /session/wrong");
                    die();
                }

                $getir = mysqli_fetch_array($sorgula);
                $verisay = mysqli_num_rows($sorgula);

                if ($verisay > 0) {
                    $_SESSION['id'] = $getir['id'];
                    $_SESSION['k_adi'] = $getir['k_adi'];
                    $_SESSION['k_mail'] = $getir['k_mail'];
                    $_SESSION['k_profil'] = $getir['k_profil'];
                    $_SESSION['k_rol'] = $getir['k_rol'];
                    header('location: /panel');
                    exit;
                } else {
                    if (isset($_POST["loginForm"])) {
                        header("Location: /login/captchaerr");
                        die();
                    } else if (isset($_POST["registerForm"])) {
                        header("Location: /register/captchaerr");
                        die();
                    } else if (isset($_POST["sessionStart"])) {
                        header("Location: /session/captchaerr");
                        die();
                    } else {
                        header("Location: /login/");
                        die();
                    }
                }
            } else {
                if (isset($_POST["loginForm"])) {
                    header("Location: /login/captchaerr");
                    die();
                } else if (isset($_POST["registerForm"])) {
                    header("Location: /register/captchaerr");
                    die();
                } else if (isset($_POST["sessionStart"])) {
                    header("Location: /session/captchaerr");
                    die();
                } else {
                    header("Location: /login/");
                    die();
                }
            }
        }

        if (isset($_POST['registerForm'])) {

            $k_mail = htmlspecialchars($_POST['k_mail']);
            $k_adi = strip_tags(htmlspecialchars($_POST['k_adi']));
            $k_adi = htmlspecialchars($_POST['k_adi']);
            $k_sifre = md5(htmlspecialchars($_POST['k_sifre']));
            $k_tarih = date("Y-m-d");
            $u_time = 1;
            $k_profil = "upload/profile/default.gif";

            if (!empty($k_mail)) {
                if (!empty($k_adi)) {
                    if (!empty($k_sifre)) {
                        $sql = "INSERT INTO `sh_kullanici` (k_mail, k_adi, k_sifre, k_profil, k_time, u_time, k_log, k_browser, k_os) 
                        VALUES(?,?,?,?,?,?,?,?,?)";
                        $res = $conn->prepare($sql);
                        $res->bind_param("sssssssss", $k_mail, $k_adi, $k_sifre, $k_profil, $k_tarih, $u_time, getip(), getrealbrowser(), getrealos());
                        $res->execute();

                        if ($res->errno < 1) {
                            header("location: /login/");
                            exit;
                        } else {
                            header("location: /register/error");
                            exit;
                        }
                    } else {
                        header("location: /register/errorparam");
                        exit;
                    }
                } else {
                    header("location: /register/errorparam");
                    exit;
                }
            } else {
                header("location: /register/errorparam");
                exit;
            }
        }

        if (isset($_POST['loginForm'])) {
            $k_mail = htmlspecialchars($_POST['k_mail']);
            $k_sifre = md5(htmlspecialchars($_POST['k_sifre']));
            $remember = null;

            if (isset($_POST["rememberMe"])) {
                $remember = htmlspecialchars($_POST['rememberMe']);
            }

            if (!empty($remember)) {
                $_SESSION['remember'] = 'ok';
            }

            $sql = "SELECT * FROM `sh_kullanici` WHERE `k_mail`=? && `k_sifre`=?";
            $res = $conn->prepare($sql);
            $res->bind_param("ss", $k_mail, $k_sifre);
            $res->execute();
            $sorgula = $res->get_result();

            if ($res->errno > 0) {
                header("Location: /login/error");
                die();
            }

            $getir = mysqli_fetch_array($sorgula);
            $verisay = mysqli_num_rows($sorgula);
            if ($verisay > 0) {
                if ($getir['k_rol'] == '1' or $getir['k_rol'] == '0' or $getir['k_rol'] == '2') {
                    $_SESSION['id'] = $getir['id'];
                    $_SESSION['k_adi'] = $getir['k_adi'];
                    $_SESSION['k_mail'] = $getir['k_mail'];
                    $_SESSION['k_profil'] = $getir['k_profil'];
                    $_SESSION['k_rol'] = $getir['k_rol'];

                    $real_ip = getip();
                    $browser = getrealbrowser();
                    $os = getrealos();
                    $id = $getir['id'];

                    $query = "UPDATE `sh_kullanici` SET k_browser=?, k_os=?, k_log=? WHERE id=?";
                    $res = $conn->prepare($query);
                    $res->bind_param("ssss", $browser, $os, $real_ip, $id);
                    $res->execute();

                    if ($res->errno < 1) {
                        header('location: /panel');
                        exit;
                    } else {
                        header("location: /login/error");
                        exit;
                    }
                } else {
                    //echo $conn->error;
                    header("location: /login/wrong");
                    exit;
                }
            } else {
                //echo $conn->error;
                header("location: /login/wrong");
                exit;
            }
            $conn->close();
        }
    } else {
        session_destroy();
        header("Location: /login/");
        exit;
    }
} else {
    session_destroy();
    header("Location: /login/");
    exit;
}
