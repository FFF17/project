<?php

$id = $_GET['id'];
$sql = "SELECT FROM komentar where id_artikel=$id";
$komentar = $koneksi -> prepare($sql);
$r = $komentar->execute();
$komen->FetchAll();

			foreach ($komen as $key) {
				?>

				<?= $komen['komentator']?>	
				<?= $komen['komentar']?>
<?php
}
?>
