<?php 
include 'webkartali.php';

if (empty($_SESSION['user'])) {
  header('Location: index.php');
}


$AdiSoyadi 			= $_POST['AdiSoyadi'];
$Unvani 			= $_POST['Unvani'];
$Bransi 			= $_POST['Bransi'];
$DogumTarihi 		= $_POST['DogumTarihi'];
$Cinsiyet 			= $_POST['Cinsiyet'];
$OgrenimDurumu 		= $_POST['OgrenimDurumu'];
$Askerlik 			= $_POST['Askerlik'];
$KurumAdi 			= $_POST['KurumAdi'];
$AtamaSekli 		= $_POST['AtamaSekli'];
$BaslamaTarihi 		= $_POST['BaslamaTarihi'];
$AyrilisTarihi  	= $_POST['AyrilisTarihi'];
$TerfiTarihi 		= $_POST['TerfiTarihi'];
$SonDurum 			= $_POST['SonDurum'];
$FormKayitTarihi 	= $_POST['FormKayitTarihi'];

$KadroDurumu      = $_POST['KadroDurumu'];
$iletisim         = $_POST['iletisim'];
$Eposta           = $_POST['Eposta'];


$DuzenlemeTarihi = @$_POST['KayitTarihi'];
$idcik           = @$_POST['duzenlenecekid'];

$duzenle = mysqli_query($connn, "UPDATE personeller SET `pers_AdiSoyadi` = '$AdiSoyadi',
 `pers_Unvani` = '$Unvani', `pers_Bransi` = '$Bransi',
  `pers_kadro` = '$KadroDurumu', `pers_iletisim` = '$iletisim', `pers_eposta` = '$Eposta',
  `pers_DogumTarihi` = '$DogumTarihi', `pers_Cinsiyet` = '$Cinsiyet',
   `pers_OgrenimDurumu` = '$OgrenimDurumu', `pers_Askerlik` = '$Askerlik',
    `pers_KurumAdi` = '$KurumAdi', `pers_AtamaSekli` = '$AtamaSekli',
     `pers_BaslamaTarihi` = '$BaslamaTarihi', `pers_AyrilisTarihi` = '$AyrilisTarihi',
      `pers_TerfiTarihi` = '$TerfiTarihi', `pers_SonDurum` = '$SonDurum',
       `pers_FormKayitTarihi` = '$FormKayitTarihi' WHERE `personeller`.`pers_id` = '$idcik' ;");


if ($duzenle) {
	header('Location: personel_duzenle.php?id='.$idcik.'&sonuc=1 ');
} else {
	header('Location: personel_duzenle.php?id='.$idcik.'&sonuc=2 ');
}

 ?>