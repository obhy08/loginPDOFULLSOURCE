<?php
session_start();

if( !isset($_SESSION['nama_user']) )
{
	header('location:./../'.$_SESSION['akses']);
	exit();
}else{
	$nama = $_SESSION['nama_user'];
}

?>

<h1 align="center">Hallo bro and Sist...this is page of <span style="color:red"><?php echo $nama;?></span></h1>
<center><a href="./../logout.php">Logout</a></center>