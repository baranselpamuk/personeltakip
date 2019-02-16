<?php 
include 'webkartali.php';

if (empty($_SESSION['user'])) {
  header('Location: index.php');
}

$AdiSoyadi 			  = $_POST['AdiSoyadi'];
$Unvani 			    = $_POST['Unvani'];
$Bransi 			    = $_POST['Bransi'];
$DogumTarihi 		  = $_POST['DogumTarihi'];
$Cinsiyet 			  = $_POST['Cinsiyet'];
$OgrenimDurumu 		= $_POST['OgrenimDurumu'];
$Askerlik 			  = $_POST['Askerlik'];
$KurumAdi 			  = $_POST['KurumAdi'];
$AtamaSekli 		  = $_POST['AtamaSekli'];
$BaslamaTarihi 		= $_POST['BaslamaTarihi'];
$AyrilisTarihi  	= $_POST['AyrilisTarihi'];
$TerfiTarihi 		  = $_POST['TerfiTarihi'];
$SonDurum 			  = $_POST['SonDurum'];
$FormKayitTarihi 	= $_POST['FormKayitTarihi'];

$KadroDurumu      = $_POST['KadroDurumu'];
$iletisim         = $_POST['iletisim'];
$Eposta           = $_POST['Eposta'];



$kaydet = mysqli_query($connn, "INSERT INTO personeller (`pers_id`, `pers_AdiSoyadi`,
 `pers_Unvani`, `pers_Bransi` , `pers_kadro` , `pers_iletisim` , `pers_eposta`,
  `pers_DogumTarihi`, `pers_Cinsiyet`,
   `pers_OgrenimDurumu`, `pers_Askerlik`,
    `pers_KurumAdi`, `pers_AtamaSekli`,
     `pers_BaslamaTarihi`, `pers_AyrilisTarihi`,
      `pers_TerfiTarihi`, `pers_SonDurum`,
       `pers_FormKayitTarihi`) VALUES (NULL, '$AdiSoyadi', '$Unvani',
        '$Bransi', '$KadroDurumu','$iletisim','$Eposta', '$DogumTarihi', '$Cinsiyet',
         '$OgrenimDurumu', '$Askerlik', '$KurumAdi',
          '$AtamaSekli', '$BaslamaTarihi',
           '$AyrilisTarihi', '$TerfiTarihi',
            '$SonDurum', '$FormKayitTarihi');");


if ($kaydet) {
	header('Location: anasayfa.php?sonuc=1 ');
} else {
	header('Location: anasayfa.php?sonuc=2 ');
}

 ?>