<?php

	$nameError=$passwordError=$error="";
	if(isset($_GET['error']))
    {
		if ($_GET['error'] == 'nullvalue') {
			# code...
			$nameError= "Username Empty!";
			$passwordError= "Password Empty!";
		}
        else if ($_GET['error'] == 'username') {
            $nameError= "Username Empty!";
        }
        else if ($_GET['error'] == 'password') {
            $passwordError= "Password Empty!";
        }
        else if ($_GET['error'] == 'mismatch') {
            $error= "Username and Password don't match!";
        }
		else if ($_GET['error'] == 'p1') {
			# code...
			$passwordError= "Password length is less then 8 charecters";
		}
		else if ($_GET['error'] == 'p2') {
			# code...
			$passwordError= "Password should have atleast 1 special charecter";
		}
    }
    if(isset($_SESSION['Valid']))
    {
        header('location: homepage.php');
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN</title>
</head>
<body>
	<script src= "../js/login.js"></script>
	<form action="../control/logincheck.php" method="POST">
		<fieldset align="center" style="width: 350">
			<legend ><b><i>LOGIN</i></b></legend>
			<table align="center" border="0">

				<tr>
					<td>User Name :</td>
					<td><input type="text" name="name" id="name"  onblur="loginvalidate()" onkeyup="loginvalidate()"> <span id="nameError" style="color:red;"><?=$nameError?></span></td>

				</tr>
				<tr>
					<td>Password :</td>
					<td><input type="password" name="password" id="password"  onblur="loginvalidate()" onkeyup="loginvalidate()"> <span id="passwordError" style="color:red;"><?=$passwordError?></span></td>


				</tr>

			</table>

				<hr>
					
			 <input  type="checkbox" name="checkRemember">Remember Me
                <br><br><a href="changepassword.php">Forgot Password?</a>
				<br> <br>Don't have an account?<a href="registration.php">Register</a> <br> <br>
                <input type="submit" name="submit" value="Submit"><span style="color:red;"><?=$error?></span> 

		</fieldset>

	</form>
</body>
</html>
