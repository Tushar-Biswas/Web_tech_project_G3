<?php 

require_once 'db_connect.php';


// function showAllStudents(){
// 	$conn = db_conn();
//     $selectQuery = 'SELECT * FROM `user_info` ';
//     try{
//         $stmt = $conn->query($selectQuery);
//     }catch(PDOException $e){
//         echo $e->getMessage();
//     }
//     $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     return $rows;
// }





// function showStudent($id){
// 	$conn = db_conn();
// 	$selectQuery = "SELECT * FROM `user_info` where ID = ?";

//     try {
//         $stmt = $conn->prepare($selectQuery);
//         $stmt->execute([$id]);
//     } catch (PDOException $e) {
//         echo $e->getMessage();
//     }
//     $row = $stmt->fetch(PDO::FETCH_ASSOC);

//     return $row;
// }

function loginvalidation($data){
    $conn = db_conn();
    $name = $data['name'];
    $password = $data['password'];
    $rows="";

    $selectQuery = "SELECT * FROM user_info WHERE Name= '$name' AND Password= '$password'";
    // $selectQuery = "SELECT * FROM user_info WHERE Name= '{$data['name']}' AND Password= '{$data['password']}'";
    // $result= mysqli_query($conn,$selectQuery);
    // $row=mysqli_fetch_assoc($result);
    // if($row>0)
    // {
    //     return $row;
    // }
    // else return false;

    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addUser($data)
{
	$conn = db_conn();
    $selectQuery = "INSERT into user_info (Name, Email, Phone, Address, Password, Gender, UserType, DOB, Image)
    VALUES (:name, :email, :phone, :address, :npassword, :gender, :usertype, :dob, :image)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':phone' => $data['phone'],
        	':address' => $data['address'],
        	':npassword' => $data['npassword'],
        	':gender' => $data['gender'],
        	':usertype' => $data['usertype'],
        	':dob' => $data['dob'],
        	':image' => $data['image']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


// function updateStudent($id, $data){
//     $conn = db_conn();
//     $selectQuery = "UPDATE user_info set Name = ?, Surname = ?, Username = ? where ID = ?";
//     try{
//         $stmt = $conn->prepare($selectQuery);
//         $stmt->execute([
//         	$data['name'], $data['surname'], $data['username'], $id
//         ]);
//     }catch(PDOException $e){
//         echo $e->getMessage();
//     }
    
//     $conn = null;
//     return true;
// }

// function deleteStudent($id){
// 	$conn = db_conn();
//     $selectQuery = "DELETE FROM `user_info` WHERE `ID` = ?";
//     try{
//         $stmt = $conn->prepare($selectQuery);
//         $stmt->execute([$id]);
//     }catch(PDOException $e){
//         echo $e->getMessage();
//     }
//     $conn = null;

//     return true;
// }