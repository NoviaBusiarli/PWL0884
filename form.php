<html>

	<head>
		<title> Form PHP
		</title>
	</head>
	<body>
		
		<em><?php
		echo date('d M y');
		?></em>
		<form action="form.php" method="post"> 		
			<label> Nama: <input type="text" name="nama"></input><br>
			<label> Alamat : <input type="text" name="add"></input><br>
			<label> No Telp: <input type="text" name="nope"></input><br>
			<label> Email : <input type="text" name="email"> </input><br>
			<button type="submit" value="Kirim">Kirim</button>
		</form>
		
	</body>
	
	<?php

		print_r($_POST);

	?>
	
</html>

