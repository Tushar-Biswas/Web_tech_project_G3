<?php
    include('../control/session.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <table  width="100%" cellpadding="20" >
        <tr style="background-color: #153661">
       
            <td>
                <img src="../photos/logo.png" style="float: left; height:auto; width:100px;">
            </td>
            <td  colspan="1" >
                
                <h1 align="center" style="color: white">HOME</h1>
                
            </td>
            <td align="center" style="color: white">
                Welcome,<i><b> <a href="profile.php" style="color: lightgreen"><?php echo $_SESSION['name']; ?></a></b></i>  
                <br>   
                <br> 
                <a href="logout.php" style="color: red">Logout</a>
            </td>
        </tr>

        <!-- <tr >
            <td align="center" colspan="4">
                Welcome,<i><b> <a href="profile.php"><?php echo $_SESSION['name']; ?></a></b></i>  <br>    <a href="logout.php">Logout</a>
            </td>
		</tr> -->

        <tr height=730px> <!-- Sidebar -->
            <td width=20% style="background-color: #808080;"></td>       
            <td align="center" style="background-color: #ecf0f5;"> 
               <!-- <h3>Welcome to The Library</h3> -->
               <img src="../photos/photo-1579370318443-8da816457e3d.jpg">
            </td>  <!-- Main -->
            <td width=20% style="background-color: #808080;"> 
            </td>   
        </tr>
        
        
        
        <tr >
            <td height="50px" colspan="3" style="background-color: #353535; color:white"><center>Copyright &copy; LMS 2021 </center></td>
        </tr>


    </table>
</body>
</html>