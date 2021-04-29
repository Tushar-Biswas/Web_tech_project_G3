<?php
    include('../control/session.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/demandbooklist.css">
    <title>Demand Booklist</title>
</head>


<body>
    <form action="">
    <table  width="100%" cellpadding="20">
        <tr style="background-color: #153661">
       
            <td>
                <img src="../photos/logo.png" style="float: left; height:auto; width:100px;">
            </td>
            <td  colspan="1" >
                
                <h1 align="center" style="color: white">Demand Booklist</h1>
                
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
           
            <!-- main -->
            <td style="background-color: #ecf0f5;"> 
               <!-- <h3>Welcome to The Library</h3> -->
               <!-- <img src="../photos/photo-1579370318443-8da816457e3d.jpg"> -->


                    <table class="demandlist" >
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Code</th>
                                <th>Book Name</th>
                                <th>Author</th>
                                <th>Quantity</th>
                                <th>Deadline</th>
                                <th>Select</th>
                                
                            </tr>

                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>a</td>
                                <td>gg</td>
                                <td>c</td>
                                <td>gg</td>
                                <td>c</td>
                                <td><input type="checkbox" name="checkRemember"></td>
                            </tr>
    
                            <tr>
                                <td>2</td>
                                <td>b</td>
                                <td>a</td>
                                <td>gg</td>
                                <td>c</td>
                                <td>gg</td>
                                <td><input type="checkbox" name="checkRemember"></td>

                            </tr>
    
                            <!-- click selection -->
                            <tr class="active-row">   
                                <td>3</td>
                                <td>b</td>
                                <td>a</td>
                                <td>gg</td>
                                <td>c</td>
                                <td>c</td>
                                <td><input type="checkbox" name="checkRemember"></td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>b</td>
                                <td>c</td>
                                <td>a</td>
                                <td>gg</td>
                                <td>c</td>
                                <td><input type="checkbox" name="checkRemember"></td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>b</td>
                                <td>c</td>
                                <td>gg</td>
                                <td>b</td>
                                <td>c</td>
                                <td><input type="checkbox" name="checkRemember"></td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>b</td>
                                <td>c</td>
                                <td>b</td>
                                <td>a</td>
                                <td>gg</td>
                                <td><input type="checkbox" name="checkRemember"></td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>b</td>
                                <td>c</td>
                                <td>c</td>
                                <td>a</td>
                                <td>c</td>
                                <td><input type="checkbox" name="checkRemember"></td>
                            </tr>
    
                        </tbody>


                    </table>

            
               
            </td>  <!-- Main -->


            <td width=20% style="background-color: #808080;"> 

                <!-- right sidebar -->
                <button>Confirm</button>
                <input type="submit" name="submit" value="Submit">
            </td>
        </tr>


        <tr >
            <td height="50px" colspan="3" style="background-color: #353535; color:white"><center>Copyright &copy; LMS 2021 </center></td>
        </tr>


    </table>
    </form>
</body>
</html>