<?php
$customJAVA = array(
    '<script src="https://google.com/recaptcha/api.js"></script>',
);
error_reporting(0);
session_start();

if (empty($_SESSION['id'])) {
    if (!empty($_COOKIE['k_adi'])) {
        header("location: /session");
    }
}

if ($_SESSION['id']) {
    header("location: /panel");
}
$page_title = 'Giriş Yap';
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Suck My Dick Bitches!">
    <meta name="keywords" content="worlwide,automation">
    <meta name="author" content="Jweak">

    <title><?php echo $page_title ?> - Jweak</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../assets/plugins/pace/pace.css" rel="stylesheet">
    <link rel="shortcur icon" href="../assets/icon/favicon-16x16.png">


    <link href="../assets/css/main.min.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">
</head>

<body class="login-page">
    <!--BAŞLANGIC-->
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-4">
                <div class="card login-box-container">
                    <div class="card-body">
                        <img style="height: 90px;" alt="image" src="/assets/lxst.png" class="SkyChecklogo">
                        <div style="margin-top: 30px;" class="authent-text">
                            <p>Jweak'a Hoşgeldiniz!</p>
                            <p>Lütfen hesabınıza giriş yapın!</p>
                        </div>
                        <?php if (htmlspecialchars($_GET["alert"]) == 'wrong') { ?>
                            <div class="alert alert-danger" role="alert">
                                Yanlış şifre girdiniz!
                            </div>
                        <?php } else if (htmlspecialchars($_GET["alert"]) == 'error') { ?>
                            <div class="alert alert-danger" role="alert">
                                Giriş hatası! Lütfen yönetici ile iletişime geçin.
                            </div>
                        <?php } else if (htmlspecialchars($_GET["alert"]) == 'captchaerr') { ?>
                            <div class="alert alert-danger" role="alert">
                                Captcha hatalı girildi!
                            </div>
                        <?php } ?>
                        <form action="../server/kontrol.php" method="POST">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input name="k_mail" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">E-Posta</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input name="k_sifre" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Şifre</label>
                                </div>
                            </div>
                            <div class="mb-3 form-check">
                                <input name="rememberMe" type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Beni Hatırla</label>
                            </div>
                            <center style="margin-bottom: 10px;">
                                <div class="g-recaptcha" data-sitekey="6LecnEweAAAAACdB5jIQ0yYSGNYqSUE1oj6cQhjw"></div>
                            </center>
                            <div class="d-grid">
                                <button name="loginForm" type="submit" class="btn btn-info m-b-xs">Giriş Yap</button>
                            </div>
                        </form>
                        <center style="margin-top: -20; display: flex; flex-direction: row; justify-content: space-between; align-items: center;">
                            <div class="d-grid" style="width: 183px; height: 35px;">
                                <button onclick="location.href='https://t.me/frozzylxst'" class="btn btn-warning">Telegram</button>
                            </div>
                            <div class="d-grid" style="width: 183px; height: 35px;">
                                <button onclick="window.open('http:');" class="btn btn-primary">Discord</button>
                            </div>
                        </center>
                        <!-----------
                        <div class="authent-reg">
                            <p>Not registered? <a href="/mallar">Create an account</a></p>
                        </div>
                        <!----------->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--BİTİŞ-->
    <?php include('inc/footer_main.php'); ?>