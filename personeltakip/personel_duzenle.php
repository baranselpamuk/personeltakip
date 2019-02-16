<?php 
include 'webkartali.php';

if (empty($_SESSION['user'])) {
  header('Location: index.php');
}

$kayit_sonucu = @$_GET['sonuc'];
$duzenlecenek = @$_GET['id'];

$ne_duzenlenecek = mysqli_query($connn, "SELECT * FROM personeller WHERE pers_id=$duzenlecenek ");
$duzenlenecegi_ayr = mysqli_fetch_array($ne_duzenlenecek, MYSQLI_ASSOC);

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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
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
            <h1><i class="fa fa-home"></i> <?php echo $title; ?></h1>
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
        <div class="row mt-20">
          <div class="col-md-8">
            
  <!--Form Başla -->
<div class="card">
              <h3 class="card-title"> Personel Düzenle&nbsp;&nbsp;&nbsp;&nbsp; [<font color="88BDF2"><?php echo date("Y-m-d"); ?></font>]</h3>
              <br>
              <div class="card-body">
                <form action="personel_edit_db.php" method="post">

<!-- form başlama -->
<div class="form-group">
  <label class="control-label">Adı Soyadı</label>
  <input type="text" id="AdiSoyadi" name="AdiSoyadi" value="<?php echo $duzenlenecegi_ayr['pers_AdiSoyadi'] ?>" class="form-control">
      <br>
  <label class="control-label">Ünvanı</label>
  <input type="text" id="Unvani" name="Unvani" value="<?php echo $duzenlenecegi_ayr['pers_Unvani']; ?>" class="form-control">
     <br>
  <label class="control-label">Branşı</label>
  <input type="text" id="Bransi" name="Bransi" value="<?php echo $duzenlenecegi_ayr['pers_Bransi']; ?>" class="form-control">
      <br>

  <label class="control-label">Kadro Durumu</label>
  <input type="text" id="KadroDurumu" name="KadroDurumu" value="<?php echo $duzenlenecegi_ayr['pers_kadro']; ?>" class="form-control">
      <br>
  <label class="control-label">İletişim No</label>
  <input type="text" id="iletisim" name="iletisim" value="<?php echo $duzenlenecegi_ayr['pers_iletisim']; ?>" class="form-control">
      <br>
  <label class="control-label">E-Posta</label>
  <input type="text" id="Eposta" name="Eposta" value="<?php echo $duzenlenecegi_ayr['pers_eposta']; ?>" class="form-control">
      <br>

  <label class="control-label">Doğum Tarihi</label>
  <input type="date" id="DogumTarihi" name="DogumTarihi" value="<?php echo $duzenlenecegi_ayr['pers_DogumTarihi']; ?>" class="form-control">
     <br>
  <label class="control-label">Cinsiyet</label>
    <select id="Cinsiyet" name="Cinsiyet" class="form-control">
        <option value="<?php echo $duzenlenecegi_ayr['pers_Cinsiyet']; ?>" selected><?php echo $duzenlenecegi_ayr['pers_Cinsiyet']; ?></option>
        <option value="Erkek">Erkek</option>
        <option value="Kadın">Kadın</option>
    </select>
      <br>
  <label class="control-label">Öğrenim Durumu</label>
  <input type="text" id="OgrenimDurumu" name="OgrenimDurumu" value="<?php echo $duzenlenecegi_ayr['pers_OgrenimDurumu']; ?>" class="form-control">
     <br>
  <label class="control-label">Askerlik</label>
      <select id="Askerlik" name="Askerlik" class="form-control">
        <option value="<?php echo $duzenlenecegi_ayr['pers_Askerlik']; ?>" selected><?php echo $duzenlenecegi_ayr['pers_Askerlik']; ?></option>
        <option value="Yaptı">Yaptı</option>
        <option value="Yapmadı">Yapmadı</option>
        <option value="Muaf">Muaf</option>
        <option value="Tecilli">Tecilli</option>
    </select>  
     <br>
  <label class="control-label">Kurum Adı</label>
  <input type="text" id="KurumAdi" name="KurumAdi" value="<?php echo $duzenlenecegi_ayr['pers_KurumAdi']; ?>" class="form-control">
      <br>
  <label class="control-label">Atama Şekli</label>
  <input type="text" id="AtamaSekli" name="AtamaSekli" value="<?php echo $duzenlenecegi_ayr['pers_AtamaSekli']; ?>" class="form-control">
     <br>
  <label class="control-label">Başlayış Tarihi</label>
  <input type="date" id="BaslamaTarihi" name="BaslamaTarihi" value="<?php echo $duzenlenecegi_ayr['pers_BaslamaTarihi']; ?>" class="form-control">
      <br>
  <label class="control-label"><font color="color"><b>Ayrılış Tarihi</b></font></label>
  <input type="date" id="AyrilisTarihi" name="AyrilisTarihi" value="<?php echo $duzenlenecegi_ayr['pers_AyrilisTarihi']; ?>" class="form-control">
     <br>
  <label class="control-label">Terfi Tarihi</label>
  <input type="date" id="TerfiTarihi" name="TerfiTarihi" value="<?php echo $duzenlenecegi_ayr['pers_TerfiTarihi']; ?>" class="form-control"> 
     <br>
  <label class="control-label">Son Durum</label>
  <input type="text" id="SonDurum" name="SonDurum" value="<?php echo $duzenlenecegi_ayr['pers_SonDurum']; ?>" class="form-control">
      <br>
  
</div>

<!-- Form Bitiş -->



                  
              </div>
              <div class="card-footer">
<input type="hidden" name="KayitTarihi" value="<?php echo date('Y-m-d H:i:sa'); ?>">
<input type="hidden" name="duzenlenecekid" value="<?php echo $duzenlecenek; ?>">                 
              <input type="submit" class="btn btn-success icon-btn" value="Düzenle">&nbsp;&nbsp;&nbsp;
           
              <!--<input type="reset" class="btn btn-warning icon-btn">&nbsp;&nbsp;&nbsp; -->
<!--Eski sonuç çıktısı alanı olumlu veya olumsuz. -->             
              </div>
            </div>
           
            </form>
  <!-- Form Bitiş -->
          </div>
          
  <!-- Sol Bileşenler Başlangıç -->
          <div class="col-md-4">
            <div class="widget-small primary"><i class="icon fa fa-users fa-3x"></i>
              <div class="info">
                <h4><b>Toplam Personel</b></h4>
                <p> <b>
<?php 
$toplam_pers = mysqli_query($connn,  "SELECT count(*) as geneltplm FROM personeller");

$data=mysqli_fetch_array($toplam_pers, MYSQLI_ASSOC);
echo $data['geneltplm'];

 ?>                  
                </b></p>
              </div>
            </div>

            <div class="widget-small info"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
              <div class="info">
                <h4>Aktif Personeller</h4>
                <p> <b>
  <?php 
$aktifpersonel = mysqli_query($connn,  "SELECT count(*) as aktifpersoneller FROM personeller WHERE pers_AyrilisTarihi ='0000-00-00' ");

$data=mysqli_fetch_array($aktifpersonel, MYSQLI_ASSOC);
echo $data['aktifpersoneller'];

 ?>                

                </b></p>
              </div>
            </div>

            <div class="widget-small danger"><i class="icon fa fa-thumbs-o-down fa-3x"></i>
              <div class="info">
                <h4>Pasif Personeller</h4>
                <p> <b>
<?php 
  $pasifpersoneller = mysqli_query($connn,  "SELECT count(*) as pasifpersoneller FROM personeller WHERE pers_AyrilisTarihi !='0000-00-00' ");

  $data=mysqli_fetch_array($pasifpersoneller, MYSQLI_ASSOC);
  echo $data['pasifpersoneller'];
?>                    

                </b></p>
              </div>
            </div>

          </div>
          
         
<!--Sol Bileşenler Bitiş -->

      </div>
    </div>
    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/essential-plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.vmap.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.vmap.world.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.vmap.sampledata.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	var data = {
      		labels: ["January", "February", "March", "April", "May"],
      		datasets: [
      			{
      				label: "My First dataset",
      				fillColor: "rgba(220,220,220,0.2)",
      				strokeColor: "rgba(220,220,220,1)",
      				pointColor: "rgba(220,220,220,1)",
      				pointStrokeColor: "#fff",
      				pointHighlightFill: "#fff",
      				pointHighlightStroke: "rgba(220,220,220,1)",
      				data: [65, 59, 80, 81, 56]
      			},
      			{
      				label: "My Second dataset",
      				fillColor: "rgba(151,187,205,0.2)",
      				strokeColor: "rgba(151,187,205,1)",
      				pointColor: "rgba(151,187,205,1)",
      				pointStrokeColor: "#fff",
      				pointHighlightFill: "#fff",
      				pointHighlightStroke: "rgba(151,187,205,1)",
      				data: [28, 48, 40, 19, 86]
      			}
      		]
      	};
      	var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      	var lineChart = new Chart(ctxl).Line(data);
      
      	var map = $('#demo-map');
      	map.vectorMap({
      		map: 'world_en',
      		backgroundColor: '#fff',
      		color: '#333',
      		hoverOpacity: 0.7,
      		selectedColor: '#666666',
      		enableZoom: true,
      		showTooltip: true,
      		scaleColors: ['#C8EEFF', '#006491'],
      		values: sample_data,
      		normalizeFunction: 'polynomial'
      	});
      });
    </script>

<script>
  $(window).load(function() {
      $( "#cevap" ).hide( 5000 );
  });
  </script>

  </body>
</html>