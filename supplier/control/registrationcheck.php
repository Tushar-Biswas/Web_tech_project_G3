<?php
    
    require_once '../model/model.php';


    if (isset($_POST['submit']))
    {
        //validation
        // $name = $_POST['name'];
        // $email = $_POST['email'];
        // $phone= $_POST['phone'];
        // $address = $_POST['address'];
        // $npassword= $_POST['npassword'];
        // $cpassword= $_POST['cpassword'];
        // $gender = $_POST['gender'];
        // $usertype = $_POST['usertype'];
        // $dob = $_POST['dob'];


        // if (strlen($npassword)<8)
        // {
        //     header('location: ../view/registration.php?error=p1');
        // }
        // else if (!preg_match("#[\W]+#",$npassword)) 
        // {
        //     header('location: ../view/registration.php?error=p2');
        // }
        // else if($cpassword != $npassword)
        // {
        //     header('location: ../view/registration.php?error=mismatchpass');
        // }

        //  if ($name != "" && $email != "" && $phone != "" && $address != "" && $npassword != "" && $cpassword != ""  && $gender != "" && $usertype != "" && $dob!= "" )
        //{

            //data push

            $data['name'] = $_POST['name'];
            $data['email'] = $_POST['email'];
            $data['phone'] = $_POST['phone'];
            $data['address'] = $_POST['address'];
            $data['npassword'] =$_POST['npassword'];
            // pass hash convert!!
            // $data['npassword'] = password_hash($_POST['npassword'], PASSWORD_BCRYPT, ["cost" => 12]);
            $data['gender'] = $_POST['gender'];
            $data['usertype'] = $_POST['usertype'];
            $data['dob'] = $_POST['dob'];
            $data['image']="";
            // $data['image']=$_POST['image'];
        //   $image = basename($_FILES["i"]["tmp_name"]);
        //     $data['image'] = $image;
        //$data['image']= $_FILES["Upload"]["name"];

            // print_r($i);
          print_r($data);

        //   print_r($image);



            // $target_dir = "../uploads/";
            // $target_file = $target_dir . basename($_FILES["image"]["tmp_name"]);
            // // $target_file = $target_dir . $data['image'];

        
            // if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
            // {
            //     echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
            // }
            // else 
            // {
            //     echo "Sorry, there was an error uploading your file.";
            // }


            // print_r($_POST);
            // print_r($_FILES);
            // exit;

            if (addUser($data)) {
                echo 'Successfully added!!';
                //header('location: ../view/login.php');
            }

        
 
            // Json push#################
            // if(file_exists('../json/registration.json'))  
            // {  
            //     $current_data = file_get_contents('../json/registration.json');  
            //     $array_data = json_decode($current_data, true);  
            //     $extra = array(  
            //             'name' => $_POST['name'],  
            //             'email' => $_POST['email'],  
            //             'phone' => $_POST['phone'],
            //             'address' => $_POST['address'],
            //             'password' => $_POST['npassword'],
            //             'gender' => $_POST['gender'],
            //             'usertype' => $_POST['usertype'],
            //             'dob' => $_POST['dob'],
            //             'image' => $_POST['image']
            //     );
                
            //     $array_data[] = $extra;  
            //     $final_data = json_encode($array_data);
            //     if(file_put_contents('../json/registration.json', $final_data))  
            //     {  
            //         header('location: ../view/login.php?message=sucess');  
            //     }
            // }   
            // else  
            // {  
            //     header('location: ../view/registration.php?message=not_exists');
            // }
            // Json push ends#########################



            //   basename($_FILES["image"]["name"]);

            // $target_dir = "../uploads/";
            // $target_file = $target_dir . basename($_FILES["i"]["name"]);
            // $uploadOk = 1;
            // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            
            // // Allow certain file formats
            // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            // && $imageFileType != "gif" ) {
            //   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            //   $uploadOk = 0;
            // }
            // // Check if $uploadOk is set to 0 by an error
            // if ($uploadOk == 0) {
            //   echo "Sorry, your file was not uploaded.";
            // // if everything is ok, try to upload file
            // } 
            // else {
            //   if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            //     echo "The file ". htmlspecialchars( basename( $_FILES["i"]["name"])). " has been uploaded.";
            //   } else {
            //     echo "Sorry, there was an error uploading your file.";
            //   }
            // }

        // } 
        // else 
        // {
        //     echo 'You are not allowed to access this page.';
        //     header('location: ../view/registration.php');
        // }

   }
    else 
    {
        echo 'You are not allowed to access this page.';
        //header('location: ../view/registration.php');
    }
    
?>
