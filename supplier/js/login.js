
function loginvalidate() {
    var count=0;
    var name = document.getElementById("name").value;
    var password = document.getElementById("password").value;

    // var email = document.getElementById("email").value;

    

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


    if(password.length <= 0)
    {
        document.getElementById("passwordError").innerHTML = " Required!";
        document.getElementById("password").style.borderColor = "red";
    }
    else
    {
        document.getElementById("passwordError").innerHTML = "";
        document.getElementById("password").style.borderColor = "lightgreen";
    }


    // if(email.length <= 0)
    // {
    //     document.getElementById("emailError").innerHTML = "Required!";
    //     document.getElementById("email").style.borderColor = "red";
    //     count++;
    // }
    // else{   
    //     document.getElementById("emailError").innerHTML = "";
    //     document.getElementById("email").style.borderColor = "lightgreen";
    //     count--;
    // }
    
}

