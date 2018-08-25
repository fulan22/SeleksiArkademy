<html>
<head>
	<title>Bagian 2</title>
</head>

<body>
		<form id="form" method="POST">
			<table>
			
				<tr>
					<td>
						<label>Username		:</label>
					</td>
					<td>
						<input id="username" type="text" name="username" required>
					</td>
				</tr>


				<tr>
					<td><label>Email		:</label></td>
					<td><input id="email" type="email" name="email" required></td>
				</tr>


				<tr>
					<td><label>Phone Number	:</label></td>
					<td><input id="nohp" type="tel" name="nohp" required></td>
				</tr>

			</table>
			<input type="submit" name="submit" value="SUBMIT">
		</form>
<?php


if(isset($_POST['submit'])){
	if(ctype_lower($_POST['username'])){
		echo "Valid Username<br>";
    }
    else{
		echo "<script>alert('Username Must Be Lower');</script>";
    }
    
	if(preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST['email'])) {
	  echo 'Valid Email<br>';
    }
    else {
	  echo "<script>alert('Invalid Email');</script>";
    }
    
	if (preg_match("/^[\+0-9\-\(\)\s]*$/", $_POST['nohp'])) {
		echo "Valid Phone Number<br>";
    }
    else{
		echo "<script>alert('Invalid Phone Number');</script>";
	}
}
?>

</body>
</html>