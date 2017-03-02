<?php
//koneksi
try {
	$koneksi = new PDO("mysql:host=localhost;port=3306;dbname=project;","root","");
} catch (PDOException $e) {
	echo $e->GetMessage();
}

$id = $_GET['id'];

$data = $koneksi->prepare("SELECT * FROM  artikel WHERE id='$id'");
$data->execute();
$row = $data->fetch(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="header.css">
	<title></title>
<style>
	input[type=text] {
    width: 625%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;

}



textarea {
    width: 625%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;

    resize: none;
}


.button.info {
    background: #59cde2;
    color: #ffffff;
    border-color: #59cde2;
}
metro-icons.css:2691
.text-shadow {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
}
metro-icons.css:2682
.block-shadow-info {
    box-shadow: 0 0 25px 0 rgba(89, 205, 226, 0.7);
}
metro.css:6567
.button {
    padding: 0 1rem;
    height: 2.125rem;
    text-align: center;
    vertical-align: middle;
    background-color: #ffffff;
    border: 1px #d9d9d9 solid;
    color: #262626;
    cursor: pointer;
    display: inline-block;
    outline: none;
    font-size: .875rem;
    line-height: 1;
    margin: .15625rem 0;
    position: relative;
}
metro.css:2836
.text-shadow {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
}
metro.css:2827
.block-shadow-info {
    box-shadow: 0 0 25px 0 rgba(89, 205, 226, 0.7);
}

input[type=text]:focus {
    border: 3px solid #555;
}
</style>

</head>
<body>

<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Master</a>
            <ul>
                
                <li><a href="blog.php">Semua Artikel</a></li>
                
            </ul>
        </li>
       
        </li>
        <li><a href="logout.php" onlick="return confirm ('Yakin?')">Logout</a></li>
    </ul>
</nav>


<form method="POST" action="update.php">
<input type="hidden" name="id" value="<?=$row->id;?>">
	<table>
		<tr>
		
			<td><input type="text" name="judul" placeholder="Judul" value="<?=$row->judul;?>"></td>
		</tr>
		<tr>
		
			<td><textarea name="isi"  style="height: 100px"; placeholder="Isi"> <?=$row->isi; ?></textarea><br><br></td>
		</tr>
		<tr>
		
		
			<td><input type="text" name="tag" placeholder="Tag" value="<?=$row->tag;?>"></td>
		

		


			<tr>
<td><button class="button 
						info 
						block-shadow-info 
						text-shadow"  name="submit" type="submit">
							Submit
						</button>
						</td>
			</tr>
		</tr>
	</table>
</form>

</body>
</html>