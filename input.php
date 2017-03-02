


<!DOCTYPE html>
<head>
	

	


	<link rel="stylesheet" type="text/css" href="header.css">

<style>
	
textarea {
    width: 625%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;

    resize: none;
}
input[type=text] {
    width: 625%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;

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
        <li><a href="logout.php" onClick="return confirm ('Yakin?')">Logout</a></li>
    </ul>
</nav>

<form method="POST"  action="save.php">
	
	<table>
		<tr>
			<td><input type="text" name="judul" placeholder="Judul"></td>
		</tr>
		<tr>
			<td><textarea name="isi" placeholder="Isi"></textarea></td>
		</tr>
		<tr>
			
			<td><input type="text" name="tag" placeholder="Tag"></td>
		</tr>
			<tr>	
		
				<td><button name="submit" type="submit">Submit</button></td>
			

			
			</tr>
			
			
		
	</table>
</form>
		
</body>
</html>