<?php
// validation
	$npasswordError="";
	$cpasswordError="";
	if(isset($_GET['error']))
    {
        if ($_GET['error'] == 'p1') 
		{
			$npasswordError= "Password length is less then 8 charecters";
		}
		else if ($_GET['error'] == 'p2') 
		{
			$npasswordError= "Password should have atleast 1 special charecter";
		}
		else if ($_GET['error'] == 'mismatchpass') 
		{
            $cpasswordError= "Password don't match!";
        }
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
	<!-- <script src= "../js/registration.js"></script> -->
</head>
<body>
<!-- php validation -->
<!-- <form action="../control/registrationcheck.php" method="POST"> -->  
	
	<script src= "../js/registration.js"></script>
	<form onsubmit="registrationsubmit()" action="../control/registrationcheck.php" method="POST"  enctype="multipart/form-data>
		<fieldset align="center"  style= "width: 350">
			<legend><b><i>REGISTRATION</i></b></legend>

			<table align="center" border="0">
				<tr>
					<td>Name :</td>
					<td colspan="3"><input type="text" name="name" id="name"  onblur="registrationvalidate()" onkeyup="registrationvalidate()"> <span id="nameError" style="color:red;"></span></td>
				</tr>

				<tr>
					<td colspan="2"><hr></td>
				</tr>

				<tr>
					<td>Email :</td>
					<td colspan="3"><input type="text" name="email" id="email" onblur="registrationvalidate()" onkeyup="registrationvalidate()"> <span id="emailError" style="color:red;"></span>
						<abbr title="sampl@ample.com"><B>i</B> </abbr>
					</td>
				</tr>

				<tr>
					<td colspan="2"><hr></td>
				</tr>

				<tr>
					<td>Phone :</td>
					<td colspan="3"><input type="number" name="phone" id="phone" onblur="registrationvalidate()" onkeyup="registrationvalidate()"> <span id="phoneError" style="color:red;"></span></td>
				</tr>

				<tr>
					<td colspan="2"><hr></td>
				</tr>

				<tr>
					<td>Address :</td>
					<td colspan="3"><input type="text" name="address" id="address" onblur="registrationvalidate()" onkeyup="registrationvalidate()"> <span id="addressError" style="color:red;"></span></td>
				</tr>

				<tr>
					<td colspan="2"><hr></td>
				</tr>

				<tr>
					<td>New Password :</td>
					<td colspan="3"><input type="Password" name="npassword" id="npassword" onblur="registrationvalidate()" onkeyup="registrationvalidate()"> <span id="npasswordError" style="color:red;"><?=$npasswordError?></span></td>
				</tr>

				<tr>
					<td colspan="2"><hr></td>
				</tr>

				<tr>
					<td>Confirm Password :</td>
					<td colspan="3"><input type="Password" name="cpassword" id="cpassword" onblur="registrationvalidate()" onkeyup="registrationvalidate()"> <span id="cpasswordError" style="color:red;"><?=$cpasswordError?></span></td>
				</tr>

				<tr>
					<td colspan="2"><hr></td>
				</tr>

			</table>

				<fieldset style="width: 300">
					<legend><b> Gender</b></legend>
					<input type="radio" name="gender" value="male">Male
					<input type="radio" name="gender" value="female">Female
					<input type="radio" name="gender" value="others">Others
				</fieldset>
				<hr>

				<fieldset style="width: 300">
					<legend><b> Register as </b></legend>
					<input type="radio" name="usertype" value="member">Member
					<input type="radio" name="usertype" value="supplier">Supplier
					<input type="radio" name="usertype" value="librarian">Librarian
					<input type="radio" name="usertype" value="admin">Admin
				</fieldset>
				<hr>

				<fieldset style="width: 300">
					<legend><b> Date of Birth</b></legend>
					<!-- <input type="text" size="1" name="Date"> /
					<input type="text" size="1" name="Month"> / -->
					<input type="date"  name="dob"> 
				</fieldset>
				<hr>

				<!-- <fieldset style="width: 300">
					<legend><b>Profile Picture</b></legend>
					<input type="file" name="image" id="image" value="Upload">
				</fieldset>
				<hr> -->
					
			 
                <input type="submit" name="submit" value="Upload image"> 

                <input type="Reset" name="Reset"> 

		</fieldset>

	</form>
	

</body>
</html>
	
	

