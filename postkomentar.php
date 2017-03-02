<?php
session_start();
try {
	$koneksi = new PDO("mysql:host=localhost;port=3306;dbname=project;","root","");
} catch (PDOException $e) {
	echo $e->GetMessage();
}

	$id_artikel= $_POST['id_artikel'];
	$komentar = $_POST['komentar'];
	

if(isset($komentar)){

$komentator =  $_SESSION['user_session']
komentar('id_artikel','komentar','komentator') VALUES ('$id_artikel','$komentar','$komentator');
}



$komentar = $koneksi -> prepare($sql);
$r = $komentar->execute();
	if($r){
		header("location:artikel_detail.php");
	}else{
		echo "gagal";
	}
}
?>