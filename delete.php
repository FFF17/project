<?php
//koneksi
try {
	$koneksi = new PDO("mysql:host=localhost;port=3306;dbname=project;","root","");
} catch (PDOException $e) {
	echo $e->GetMessage();
}

$id = $_GET['id'];

$data = $koneksi->prepare("DELETE FROM artikel WHERE id='$id'");
$data->execute();
header("location:blog.php");
echo "gagal";

?>