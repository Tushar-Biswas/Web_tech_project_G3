<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_REQUEST['q'];



// if ($q !== "") 
// {
//   //$q = strtolower($q);
//   $len=strlen($q);
//   foreach($a as $name) 
//   {
//     if (stristr($q, substr($name, 0, $len))) 
//     {
//       if ($hint === "") 
//       {
//         $hint = $name;
//       } 
//       else 
//       {
//         $hint .= ", $name";
//       }
//     }
//   }
// }



// require_once '../model/db_connect.php';
// $con=db_conn();

$con = mysqli_connect('localhost','root','','lms');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}


if ($q !== "")
{
    //$len=strlen($q);

    mysqli_select_db($con,"lms");
    $sql="SELECT * FROM book_inventory WHERE Code = '".$q."' or ID ='".$q."' or Bookname ='".$q."' or Author ='".$q."' ";
    $result = mysqli_query($con,$sql);

        echo "<table>
        <tr>
        <th>ID</th>
        <th>Code</th>
        <th>Bookname</th>
        <th>Author</th>
        <th>Unit_price</th>
        <th>Stock</th>
        </tr>";
        while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['Code'] . "</td>";
        echo "<td>" . $row['Bookname'] . "</td>";
        echo "<td>" . $row['Author'] . "</td>";
        echo "<td>" . $row['Unit_price'] . "</td>";
        echo "<td>" . $row['Stock'] . "</td>";
        echo "</tr>";
        }
        echo "</table>";

}
    


mysqli_close($con);
?>
</body>
</html>