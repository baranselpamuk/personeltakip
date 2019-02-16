<?php 
include 'webkartali.php';

if (empty($_SESSION['user'])) {
  header('Location: index.php');
}



if (isset($_GET['aid'])) {
	$geleni_sil = mysqli_query($connn, "DELETE FROM personeller WHERE pers_id =$_GET[aid] ");
	header('Location: aktifler.php ');
		
} elseif (isset($_GET['pid'])) {
	$geleni_sil = mysqli_query($connn, "DELETE FROM personeller WHERE pers_id =$_GET[pid] ");
	header('Location: pasifler.php ');
}else{
	header('Location: ansayfa.php ');
}




 ?>