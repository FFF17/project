<?php

try {
	$koneksi = new PDO("mysql:host=localhost;port=3306;dbname=project;","root","");
} catch (PDOException $e) {
	echo $e->GetMessage();
}
if (isset($_POST['submit'])) {
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$tag = $_POST['tag'];
	$banner = $_POST['banner'];
$sql = "INSERT INTO artikel (`judul`,`isi`,`tag`) VALUES ('$judul','$isi','$tag')";
$judul = $koneksi -> prepare($sql);
$r = $judul ->execute();
	if($r){
		header("location:blog.php");
	}else{
		echo "gagal";
	}
}
?>