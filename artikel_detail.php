<?php

mysql_connect("localhost","root","") or die("Gagal Konek Ke Server".mysql_error());
mysql_select_db("project") or die ("Gagal Konek Ke Database".mysql_error());
?>
<html>
<head>


<title>Artikel</title>

 <link rel="stylesheet" href="header.css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="artikel.css" media="screen" title="no title" charset="utf-8">


<link rel="stylesheet" href="artikelreadmore.css" media="screen" title="no title" charset="utf-8">



</head>
<body>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Master</a>
            <ul>
                
                <li><a href="blog.php">Semua Artikel</a></li>
                <li><a href="input.php">Tambah Baru</a></li>
            </ul>
        </li>
       
        </li>
        <li><a href="logout.php" onClick="return confirm ('Yakin?')">Logout</a></li>
    </ul>
</nav>






<?php
$id = $_GET['id'];
$kueri = mysql_query(" SELECT id AS id, judul, isi, tag, tanggal".
" FROM artikel WHERE id='$id' ");
while ($baris=mysql_fetch_row($kueri)) {

echo "  
<div class='no-overflow'>

<div class='heading'>
<h3>$baris[1]</h3>
</div>

<div class='content'>
<p>".substr($baris[2],0,1000)."</p>
<hr>

<div class='place-right'>
 <span class='mif-tag'>
 Tag : $baris[3]
 </span>

 <span class='mif-calendar'>
  Date & Time : $baris[4]
</span>

</div>

<br>
</div>
";

}

?>
</div>
<br>
<br>
<form method="POST" action="savekomentar.php">
<input type="hidden" name="id_artikel" value="<?=$_GET['id'];?>">
<div class="panel">
<div class="heading">
<div class="title">Comments</div>
</div>
<div class="content">
<div id="form"> 
<table style="width: 100%">
<tbody>
<tr>
<td>
<div class="input-control textarea full-size">
<textarea name="isi"></textarea>
</div>
</td>
</tr>
<tr>
<td>
<button class="button primary" name="submit" type="submit">Submit</button>        
</td>
</tr>
</tbody>
</table>
</div>
</form>

<?php

    try {
    $koneksi = new PDO("mysql:host=localhost;port=3306;dbname=project;","root","");
} catch (PDOException $e) {
    echo $e->GetMessage();
}

$hasil = $koneksi->prepare("SELECT * FROM komentar where id_artikel=".$_GET['id']);
$hasil->execute();

$data = $hasil->fetchAll();

?>


</body>

</html>