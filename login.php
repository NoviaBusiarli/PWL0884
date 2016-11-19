<?php
	if (!empty($_POST['submit'])) 
	{
		$input_username = 'ghelov';
		$input_password = 'lenovo';

		if ($_POST['user'] == $input_username && $_POST['pswd'] == $input_password)
		 {
			setcookie('user',$input_username, time()+3600);
			setcookie('pswd',$input_password, time()+3600);

			header('location: admin.php');
		}
		else
		{
			echo "Login Gagal";
		}
	}
?>

<center>
	<form>
		<table>
			<tr>
				<td>User Name</td>
				<td>:</td>
				<td><input type="text" size="40" name="user"></input></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" size="40" name="pswd"></input></td>
			</tr>
			<tr><button type="submit" value="Submit" name="submit">Submit</button></tr>
		</table>
	</form>
</center>