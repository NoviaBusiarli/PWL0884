<?php
	$cookie = $_COOKIE;
	print_r($cookie);

	if (!empty($cookie['user']) &&  !empty($cookie['pswd'])) 
	{
		echo "<h1>Administrator Page</h1>";
		echo "Selamat Datang User".$cookie['user'];

		echo "<br />";
		echo '<a href="logout.php">klik buat logout</a>';

	}
	else
	{
		echo "Access forbidden";
		echo "<br />";
		echo "Anda Tidak Dapat membuka Halaman ini";
	}

?>