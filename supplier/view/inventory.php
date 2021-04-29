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
    <title>Inventory Booklist</title>
</head>


<body>
    <script>
        function showHint(str) 
        {
            var xhttp;  
            if (str.length == 0) 
            {
                document.getElementById("txtHint").innerHTML = "";
                return;
            }
            else
            {
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() 
                {
                    if (this.readyState == 4 && this.status == 200) 
                    {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "gethint.php?q="+str, true);
                xhttp.send();
            }
        }
          
    </script>

    <form action="">



    <table  width="100%" cellpadding="20">
        <tr style="background-color: #153661">
       
            <td>
                <img src="../photos/logo.png" style="float: left; height:auto; width:100px;">
            </td>
            <td  colspan="1" >
                
                <h1 align="center" style="color: white">Inventory Booklist</h1>
                
            </td>
            <td align="center" style="color: white">
                Welcome,<i><b> <a href="profile.php" style="color: lightgreen"><?php echo $_SESSION['name']; ?></a></b></i>  
                <br>   
                <br> 
                <a href="logout.php" style="color: red">Logout</a>
            </td>
        </tr>

    

        <tr height=730px> <!-- Sidebar -->
            <td width=20% style="background-color: #808080;"></td>       
           
            <!-- main -->
            <td style="background-color: #ecf0f5;"> 
               <!-- <h3>Welcome to The Library</h3> -->
               <!-- <img src="../photos/photo-1579370318443-8da816457e3d.jpg"> -->

##############
                    
<label for="fname">First name:</label>
<input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
<br>
<p>Suggestions: <span id="txtHint"></span></p>

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