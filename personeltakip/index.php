<!--

 * Bu Uygulama ücretsiz olarak www.webkartali.com tarafından geliştirilmiştir.
 * İş takip uygulaması ile ilgli yeni özellikler eklemeye devam edecez.
 * Yeni güncellemeleri web sitemizden temin edebilirsiniz.

 * Web Sitemizdeki diğer sicriptlere göz atmayı unutmayınız :)

 www.webkartali.com


-->
<?php 
include 'webkartali.php';
session_destroy();
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title><?php echo $title; ?></title>
      <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="login">
  <div class="heading">
    <h2>Hoşgeldin Patron :)</h2>
    <br><br><br>
    <?php 
$gelen_sonuc = @$_GET['sonuc'];

if (empty($gelen_sonuc)) {
  echo '<font color="#ff3030"></font>';
} else {
  echo '<font color="#ff3030">'.$gelen_sonuc.'</font>';
}

     ?>
    <br><br>
    <form action="kontrol.php" method="post">

      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" class="form-control" placeholder="Kullanıcı Adı.." name="KullaniciAdi">
          </div>

        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" class="form-control" placeholder="Şifre.." name="Sifre">
        </div>

        <button type="submit" class="float">[ Giriş ]</button>
       </form>
       <br><br>
       <center> Coder By 
         <?php 
echo $title;
         ?>
       </center>
 		</div>
 </div>
  
  
</body>
</html>
