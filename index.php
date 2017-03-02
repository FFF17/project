<?php  
    // Lampirk cean db dan User
    require_once "aksi/db.php";
    require_once "user.php";

try {
    $koneksi = new PDO("mysql:host=localhost;port=3306;dbname=project;","root","");
} catch (PDOException $e) {
    echo $e->GetMessage();
}

$hasil = $koneksi->prepare("SELECT * FROM artikel");
$hasil->execute();
$data = $hasil->fetchAll();


    
 ?>

<!DOCTYPE html>  
<html>  
    <head>
      
        <title>Home</title>
      <link rel="stylesheet" href="header.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="artikel.css" media="screen" title="no title" charset="utf-8">
  


    

 
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
 mysql_connect("localhost","root","") or
die("Gagal Konek Ke Server".mysql_error());
 mysql_select_db("project") or
die ("Gagal Konek Ke Database".mysql_error());
?>
<html>
<head>
<title>Artikel</title>
</head>
 
<body>
<div class="container1">
<?php
 $kueri = mysql_query(" SELECT * FROM artikel ");
  while ($baris=mysql_fetch_row($kueri)) {
echo "  
<div class='no-overflow'>

<div class='heading'>
<h3>$baris[1]</h3>
</div>

<div class='content'>
<p>".substr($baris[2],0,100)."........</p>
<hr>
<a href='artikel_detail.php?id=$baris[0]'>Read More . . .</a>

<div class='place-right'>
 <span class='mif-tag'>
<b> Tag :</b> $baris[3]
 </span>

 <span class='mif-calendar'>
  <b>Date & Time </b>: $baris[5]
</span>

</div>

</div>
<hr>
";

}

?>
</div>


</body>

</html>  
    