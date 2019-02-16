<?php 
include 'webkartali.php';
$kayit_sonucu = @$_GET['sonuc'];

if (empty($_SESSION['user'])) {
  header('Location: index.php');
}

    function kisalt($metin, $uzunluk){
        $metin = substr($metin, 0, $uzunluk)."...";
        $metin_son = strrchr($metin, " ");
        $metin = str_replace($metin_son," ...", $metin);
        return $metin;
    }

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title><?php echo $title ?></title>
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a href="anasayfa.php" class="logo">WebKartalı</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a href="#" data-toggle="offcanvas" class="sidebar-toggle"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">

              <!-- User Menu-->
              
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img src="images/AhmeTT2.jpg" alt="User Image" class="img-circle"></div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['user']; ?></p>
              <p class="designation">Web Developer</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li><a href="anasayfa.php"><i class="fa fa-home"></i><span>AnaSayfa</span></a></li>
            <li><a href="aktifler.php"><i class="fa fa-user-plus"></i><span>Aktifler</span></a></li>
            <li><a href="pasifler.php"><i class="fa fa-user-times"></i><span>Pasifler</span></a></li>
            <li><a href="index.php"><i class="fa fa-sign-out"></i><span>Çıkış</span></a></li>
          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-cogs"></i> Pasif Personeller</h1>
            <p>www.webkartali.com</p>
          </div>

<?php 

  if ($kayit_sonucu == "2") {
    echo $hatali_sonuc;
  } elseif ($kayit_sonucu == "1") {
    echo $basarili_sonuc;
  }else{
    echo "";
  }

?>

          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">AnaSyafa</a></li>
            </ul>
          </div>
        </div>
  <!-- Tablo Başlangıç -->
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table id="sampleTable" class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th width='120'>İŞLEM</th>
                          <th>AdiSoyadi</th></th>
                          <th>Unvani</th>
                          <th>Bransi</th>
                          <th>Kadro</th>
                          <th>İletişim</th>
                          <th>Mail</th>
                          <th>DogumTarihi</th>
                          <th>Cinsiyet</th>
                          <th>OgrenimDurumu</th>
                          <th>Askerlik</th>
                          <th>KurumAdi</th>
                          <th>AtamaSekli</th>
                          <th>BaslamaTarihi</th>
                          <th>AyrilisTarihi</th>
                          <th>TerfiTarihi</th>
                          <th>SonDurum</th>
                   </tr>
                  </thead>
                  <tbody>
                    
<?php 
$tumunu_cek = mysqli_query($connn, "SELECT * FROM personeller WHERE pers_AyrilisTarihi !='0000-00-00' ");
while ($tumunu_ayrs = mysqli_fetch_array($tumunu_cek, MYSQLI_ASSOC)) {

  echo '<tr>
    <td>'.$tumunu_ayrs['pers_id'].'</td>
    <td>
        <a href="personel_sil.php?pid='.$tumunu_ayrs['pers_id'].'"><span class="label label-danger">Sil</span></a>  
        <a href="personel_duzenle.php?id='.$tumunu_ayrs['pers_id'].'"><span class="label label-info">Düzenle</span></a>
    </td>
    <td>'.$tumunu_ayrs['pers_AdiSoyadi'].'</td>
    <td>'.$tumunu_ayrs['pers_Unvani'].'</td>
    <td>'.$tumunu_ayrs['pers_Bransi'].'</td>
    <td>'.$tumunu_ayrs['pers_kadro'].'</td>
    <td>'.$tumunu_ayrs['pers_iletisim'].'</td>
    <td>'.$tumunu_ayrs['pers_eposta'].'</td>
    <td>'.$tumunu_ayrs['pers_DogumTarihi'].'</td>
    <td>'.$tumunu_ayrs['pers_Cinsiyet'].'</td>
    <td>'.$tumunu_ayrs['pers_OgrenimDurumu'].'</td>
    <td>'.$tumunu_ayrs['pers_Askerlik'].'</td>
    <td>'.$tumunu_ayrs['pers_KurumAdi'].'</td>
    <td>'.$tumunu_ayrs['pers_AtamaSekli'].'</td>
    <td>'.$tumunu_ayrs['pers_BaslamaTarihi'].'</td>
    <td>'.$tumunu_ayrs['pers_AyrilisTarihi'].'</td>
    <td>'.$tumunu_ayrs['pers_TerfiTarihi'].'</td>
    <td>'.$tumunu_ayrs['pers_SonDurum'].'</td>   
        </tr>';

}

 ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/essential-plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
    $('#sampleTable').DataTable({
      order: [ [0, 'desc'] ]
    });

    </script>
  <!-- Tablo Bitiş -->
<script>
  $(window).load(function() {
      $( "#cevap" ).hide( 5000 );
  });
</script>

  </body>
</html>