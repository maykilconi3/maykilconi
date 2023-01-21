<?php
error_reporting(0);
session_start();
if ($_SESSION['id']) {
    header("location: /panel");
}
$page_title = 'Kayıt Ol';
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Suck My Dick Bitches!">
    <meta name="keywords" content="worlwide,automation">
    <meta name="author" content="SkyCheck">

    <title><?php echo $page_title ?> - Jweak</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../assets/plugins/pace/pace.css" rel="stylesheet">


    <link href="../assets/css/main.min.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">
    <script src="https://google.com/recaptcha/api.js"></script>
</head>

<body class="<?php if (!empty($body_class)) {
                    echo $body_class;
                } ?>">
    <!--BAŞLANGIC-->
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-4">
                <div class="card login-box-container">
                    <div class="card-body">
                        <div class="authent-logo">
                            <a href="javascript:void(0)">Jweak</a>
                        </div>
                        <div class="authent-text">
                            <p>Jweak'a Hoşgeldiniz</p>
                            <p>Kayıt olmak için aşağıdaki alanları <br> bütün doldurunuz.</p>
                        </div>
                        <?php if (htmlspecialchars($_GET["alert"]) == 'errorext') { ?>
                            <div class="alert alert-danger" role="alert">
                                Geçersiz Avatar! Sadece .jpg, .jpeg ve .png uzantıları geçerlidir.
                            </div>
                        <?php } else if (htmlspecialchars($_GET["alert"]) == 'error') { ?>
                            <div class="alert alert-danger" role="alert">
                                Kayıt hatası! Lütfen yönetici ile iletişime geçin.
                            </div>
                        <?php } else if (htmlspecialchars($_GET["alert"]) == 'errorparam') { ?>
                            <div class="alert alert-danger" role="alert">
                                Lütfen boş alan bırakmayın veya doğru doldurun!
                            </div>
                        <?php } else if (htmlspecialchars($_GET["alert"]) == 'captchaerr') { ?>
                            <div class="alert alert-danger" role="alert">
                                Captcha hatalı girildi!
                            </div>
                        <?php } ?>
                        <form action="../server/kontrol.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input name="k_mail" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                    <label for="floatingInput">E-Posta</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input name="k_adi" type="text" class="form-control" id="floatingAdi" placeholder="Jackson" maxlength="8" minlength="3" required>
                                    <label for="floatingAdi">Kullanıcı Adı</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input name="k_sifre" type="password" class="form-control" id="floatingPassword" placeholder="Password" maxlength="16" minlength="8" required>
                                    <label for="floatingPassword">Şifre</label>
                                </div>
                            </div>
                            <center style="margin-bottom: 10px;">
                                <div class="g-recaptcha" data-sitekey="6LecnEweAAAAACdB5jIQ0yYSGNYqSUE1oj6cQhjw"></div>
                            </center>
                            <div class="d-grid">
                                <button name="registerForm" type="submit" class="btn btn-info m-b-xs">Kayıt Ol</button>
                            </div>
                        </form>
                        <center>
                            <div class="d-grid" style="margin-top: -15px; width: 200px; height: 35px;">
                                <button onclick="window.open('http://www.discord.gg/jweakk');" class="btn btn-primary">Discord</button>
                            </div>
                        </center>
                        <div class="authent-reg">
                            <p>Zaten bir hesabın var mı? <a href="/login/">Giriş Yap</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--BİTİŞ-->
    <?php include('inc/footer_main.php'); ?>