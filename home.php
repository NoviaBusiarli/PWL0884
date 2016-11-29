<?php
	//file utama
	require 'rumus.php'
?>

<?php
	error_reporting(E_ERROR)
?>

<?php
	$input= $_POST;
	$luas = luas_persegi($input['panjang'],$input['lebar']);
	$keliling = keliling_persegi($input['panjang'],$input['lebar']);
?>

<html>
	<head>
		<title>
		</title>
	<head>
	
	<body>
		<form method="post" action="home.php">
			<table>
				<tr>
					<td>Panjang</td>
					<td><input type="text" size=20 name="panjang"></td>
				</tr>
				<tr>
					<td>Lebar</td>
					<td><input type="text" size=20 name="lebar"></td>
				</tr>
				<tr>
					<td>Luas</td>
					<td><input type="text" size=20 name="luas"></td>
				</tr>
				<!--<tr>
					<td>Keliling</td>
					<td><input type="text" size=20 name="keliling"></td>
				</tr>-->
				<tr>
					<input type="submit" value="Proses"></input>
				</tr> 
			</table>
		</form>
		
		<div>
			<p>
				Luas Persegi :<?php echo $luas ?>
				<br />
				dan keliling Persegi : <?php echo $keliling ?>
			</p>
		</div>
	</body>

</html>



