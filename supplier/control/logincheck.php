<?php

require_once '../model/model.php';

if (isset($_POST['submit'])) 
{
	
	session_start();
	# code...
	$name= $_POST['name'];
	$password= $_POST['password'];

	if($name == '' && $password == '')
	{
		header('location: ../view/login.php?error=nullvalue');
	}
	else if ($name == '') {
		# code...
		header('location: ../view/login.php?error=username');
	}
	// else if (condition) {
	// 	# code...
	// 	header('location: ../view/login.php?error=u1');
	// }
	// else if (condition) {
	// 	# code...
	// 	header('location: ../view/login.php?error=u2');
	// }
	
	else if($password == ''){
		header('location: ../view/login.php?error=password');
	}

	////////////////////////
	// else if (strlen($password)<8){
	// 	# code...
	// 	header('location: ../view/login.php?error=p1');
	// }
	// else if (!preg_match("#[\W]+#",$password)) {
	// 	# code...
	// 	header('location: ../view/login.php?error=p2');
	// }

	else 
	{
		$data=['name' => $name, 'password' => $password];
		$status=loginvalidation($data);
		// if(count($status))
		// {
		// 	print_r($status);
		// 	exit;
		// }

		//echo $status;

		if(!$status == "")
		{
			$_SESSION['isValid'] = 'true';
			$_SESSION['name']= $name;
			if(isset($_POST['rememberMe']))
			{
				
				
				// echo "<h1>Welcome".$_SESSION['name'];."</h1>";       
				//header('Location: ../view/admin.php');
				//echo "success";
				//setcookie('Valid', 'true', time()+100000000000000000000000000, '/');
				//header('location: homepage.php');
			}
			else
			{
				header('location: ../view/homepage.php');
			}

		}
		else
		{
			header('location: ../view/login.php?error=mismatch');
		}

		
	}
	// else{
	// 	header('location: ../view/login.php?error=mismatch');
	// }

}

?>