<?php
require '../server/baglan.php';
$customCSS = array('<link href="../assets/plugins/apexcharts/apexcharts.css" rel="stylesheet">');
$customJAVA = array(
  '<script src="../assets/plugins/apexcharts/apexcharts.min.js"></script>',
  '<script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>',
  '<script src="../assets/js/pages/dashboard.js"></script>'
);
$page_title = 'Panel';
include('inc/header_main.php');
include('inc/header_sidebar.php');
include('inc/header_native.php');

$query = "SELECT * FROM sh_kullanici";

if ($result = mysqli_query($conn, $query)) {
  $rowcount = mysqli_num_rows($result);
  $rowcount;
} else {
  $rowcount = "0";
}
?>
<!--BAŞLANGIC-->
<div class="main-wrapper">
  <div class="row">
    <div class="col-md-3">
      <div class="card stats-card">
        <div class="card-body">
          <div class="stats-info">
            <h9 class="card-title">Toplam Kullanıcı.<span class="stats-change stats-change-info"></span></h9>
            <h4 class="stats-text"><?php echo $rowcount; ?></h4>
          </div>
          <div class="stats-icon change-danger">
            <i class="material-icons">account_circle</i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card stats-card">
        <div class="card-body">
          <div class="stats-info">
            <h9 class="card-title">Üyelik<span class="stats-change stats-change-success"></span></h9>
            <p class="stats-text"><?php echo $uyelik; ?></p>
          </div>
          <div class="stats-icon change-success">
            <i class="material-icons">verified_user</i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <div class="card card-bg">
        <div class="card-body">
          <h5 class="card-title">Duyuru Paneli</h5>
          <table class="table crypto-table">
            <thead>
              <tr>
                <th scope="col">Duyuru İçeriği</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Yayın Tarihi</th>
                <th scope="col"></th>
                <th scope="col">Durum</th>

              </tr>
            </thead>
            <tbody>
              <?php
              $query = mysqli_query($conn, "SELECT * FROM `sh_duyuru`");
              while ($getvar = mysqli_fetch_assoc($query)) {
                echo '
                                <tr>
                                  <td><img src="" alt="">' . $getvar['d_icerik'] . '</td>
                                  <td></td>
                                  <td class="text-danger"></td>
                                  <td><button type="button" class="btn btn-link">' . $getvar['d_time'] . '</button></td>
                                  <td></td>
                                  <td class="text-success">Aktif</td>
                                </tr>
								';
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-bg">
        <div class="card-body">
          <h5 class="card-title">Üyelik Bilgileriniz</h5>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Üyelik</th>
                <th scope="col">Bitiş Tarihi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              switch ($uyelik) {
                case 'Freemium':
                  echo '                                          <tr>
                                        <td>Freemuim</td>
                                        <td><span class="badge bg-success">Süresiz</span></td>
                                        </tr>';
                  break;
                case 'Plus-':
                  echo '                                          <tr>
                                        <td>Plus-</td>
                                        <td><span class="badge bg-success">' . $bitis_tarihi . '</span></td>
                                        </tr>';
                  break;
                case 'Admin':
                  echo '
                                        <td>Admin</td>
                                        <td><span class="badge bg-success">Süresiz</span></td>
                                        </tr>';
                  break;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="content py-3">
  <div class="row fs-sm">
    <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
    <img src="../assets/lxst.png" height="50"> </a> <i class="fa fa-heart text-danger"></i> by & Frozzy<a class="fw-semibold" href="" target="_blank"> JweakTeam 6.0</a>
    </div>
    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
      
    </div>
  </div>
</div>

<!--BİTİŞ-->
<?php
include('inc/footer_native.php');
include('inc/footer_main.php');
?>