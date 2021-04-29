"use strict"

function registrationvalidate() {
    var count=0;
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var address = document.getElementById("address").value;
    var npassword = document.getElementById("npassword").value;
    var cpassword = document.getElementById("cpassword").value;
    
    // if(name.length <= 0 && email.length <= 0 && npassword.length <= 0){
    //     document.getElementById("nameError").innerHTML = "Name can't be empty.";
    //     document.getElementById("name").style.borderColor = "red";

    //     document.getElementById("emailError").innerHTML = "Email can't be empty.";
    //     document.getElementById("email").style.borderColor = "red";

    //     document.getElementById("npasswordError").innerHTML = "Password can't be empty.";
    //     document.getElementById("npassword").style.borderColor = "red";
        
    // }


    if(name.length <= 0)
    {
        document.getElementById("nameError").innerHTML = " Required!";
        document.getElementById("name").style.borderColor = "red";
        count++;
    }
    else
    {
        document.getElementById("nameError").innerHTML = "";
        document.getElementById("name").style.borderColor = "lightgreen";
        count--;
    }


    if(email.length <= 0)
    {
        document.getElementById("emailError").innerHTML = "Required!";
        document.getElementById("email").style.borderColor = "red";
        count++;
    }
    else{   
        document.getElementById("emailError").innerHTML = "";
        document.getElementById("email").style.borderColor = "lightgreen";
        count--;
    }


    if(phone.length <= 0)
    {
        document.getElementById("phoneError").innerHTML = " Required!";
        document.getElementById("phone").style.borderColor = "red";
    }
    else{   
        document.getElementById("phoneError").innerHTML = "";
        document.getElementById("phone").style.borderColor = "lightgreen";
    }


    if(address.length <= 0)
    {
        document.getElementById("addressError").innerHTML = " Required!";
        document.getElementById("address").style.borderColor = "red";
    }
    else{   
        document.getElementById("addressError").innerHTML = "";
        document.getElementById("address").style.borderColor = "lightgreen";
    }




    // if(!npassword.length <= 0)
    // {
    //     if (strlen($npassword)<8)
    //     {
    //         document.getElementById("npasswordError").innerHTML = "Password length is less then 8 charecters";
    //         document.getElementById("npassword").style.borderColor = "red";
    //     }
    //     else if (!preg_match("#[\W]+#",$npassword)) 
    //     {
    //         document.getElementById("npasswordError").innerHTML = "Password should have atleast 1 special charecter";
    //         document.getElementById("npassword").style.borderColor = "red";
    //     }
    //     else
    //     {
    //         document.getElementById("npasswordError").innerHTML = "";
    //         document.getElementById("npassword").style.borderColor = "lightgreen";
    //     }
    // }
    // else
    // {
    //     document.getElementById("npasswordError").innerHTML = " Required!";
    //     document.getElementById("npassword").style.borderColor = "red";
    // }


    if(npassword.length <= 0)
    {
        document.getElementById("npasswordError").innerHTML = " Required!";
        document.getElementById("npassword").style.borderColor = "red";
    }
    else
    {
        document.getElementById("npasswordError").innerHTML = "";
        document.getElementById("npassword").style.borderColor = "lightgreen";
    }


    // if(npassword.length <= 0)
    // {
    //     document.getElementById("npasswordError").innerHTML = " Required!";
    //     document.getElementById("npassword").style.borderColor = "red";
    // }
    // else
    // {
    //     if (strlen($npassword)<8)
    //     {
    //         document.getElementById("npasswordError").innerHTML = "Password length is less then 8 charecters";
    //         document.getElementById("npassword").style.borderColor = "red";
    //     }
    //     else
    //     {
    //         document.getElementById("npasswordError").innerHTML = "";
    //         document.getElementById("npassword").style.borderColor = "lightgreen";
    //     }

    //     if (!preg_match("#[\W]+#",$npassword)) 
    //     {
    //         document.getElementById("npasswordError").innerHTML = "Password should have atleast 1 special charecter";
    //         document.getElementById("npassword").style.borderColor = "red";
    //     }
    //     else
    //     {
    //         document.getElementById("npasswordError").innerHTML = "";
    //         document.getElementById("npassword").style.borderColor = "lightgreen";
    //     }
    // }


    if (strlen($npassword)<8)
    {
        document.getElementById("npasswordError").innerHTML = "Password length is less then 8 charecters";
        document.getElementById("npassword").style.borderColor = "red";
    }
    else
    {
        document.getElementById("npasswordError").innerHTML = "";
        document.getElementById("npassword").style.borderColor = "lightgreen";
    }


    // if (!preg_match("#[\W]+#",$npassword)) 
    // {
    //     document.getElementById("npasswordError").innerHTML = "Password should have atleast 1 special charecter";
    //     document.getElementById("npassword").style.borderColor = "red";
    // }
    // else
    // {
    //     document.getElementById("npasswordError").innerHTML = "";
    //     document.getElementById("npassword").style.borderColor = "lightgreen";
    // }



    if(cpassword.length <= 0)
    {
        document.getElementById("cpasswordError").innerHTML = " Required!";
        document.getElementById("cpassword").style.borderColor = "red";
    }
    else
    {
        document.getElementById("cpasswordError").innerHTML = "";
        document.getElementById("cpassword").style.borderColor = "lightgreen";
    }

    // if(count<=0)
    // {
    //     alert("error!");
    // }

    
}


function registrationsubmit()
{
     registrationvalidate();
    // alert("Continue?");
    
}