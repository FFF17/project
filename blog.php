<?php


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

	<title>Latihan CRUD</title>
	<link rel="stylesheet" type="text/css" href="header.css">

	<style>
		







body{
  text-decoration: none;
}






table {
  font-family: Arial, Helvetica, sans-serif;
  color: #666;
  text-shadow: 1px 1px 0px #fff;
  background: #eaebec;
  border: #ccc 1px solid;

}
 
table th {
  padding: 15px 35px;
  border-left:1px solid #e0e0e0;
  border-bottom: 1px solid #e0e0e0;
  background: #ededed;
}
 
table th: first-child{  
  border-left:none;  
}
 
table tr {
  text-align: center;
  padding-left: 20px;
}
 
table td:first-child {
  text-align: left;
  padding-left: 20px;
  border-left: 0;
}
 
table td {
  padding: 15px 35px;
  border-top: 1px solid #ffffff;
  border-bottom: 1px solid #e0e0e0;
  border-left: 1px solid #e0e0e0;
  background: #fafafa;
  background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
  background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}

 
table tr: last-child td {
  border-bottom: 0;
}
 
table tr: last-child td: first-child {
  -moz-border-radius-bottomleft: 3px;
  -webkit-border-bottom-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
 
table tr: last-child td: last-child {
  -moz-border-radius-bottom right: 3px;
  -webkit-border-bottom-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
 
table tr:hover td {
  background: #f2f2f2;
  background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
  background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
}




html, body, * {
    box-sizing: border-box;
}
user agent stylesheet
div {


	</style>
</head>
<body>
<center>
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




<table border="1">
<thead>
	<tr>
		<th>Judul</th>
		
		<th>Tag</th>

		<th colspan="2">Action</th>
	</tr>
</thead>
	<tbody>
		<?php
			// for($i = 0; $i<sizeof($data);$i++){
			// 	echo $data[$i]['nama'];
			// }
			// foreach ($data as $key ) {
			// 	echo $key['nama'];
			// }
			foreach ($data as $key) {
				?>
				<tr>
					<td><?= $key['judul']?></td>
			
					<td><?= $key['tag']?></td>
					<td><a href="edit.php?id=<?=$key['id'];?>">Edit</a></td>
					<td><a onclick="return confirm('Yakin Ingin Menghapus  Data Dengan Nama <?=$key['judul'];?> ?')"
					href="delete.php?id=<?=$key['id'];?>">Delete</a></td>
				</tr>
			<?php
			}
			
			?>
	</tbody>
	</div>
	</table>
</table>
</body>
</html>