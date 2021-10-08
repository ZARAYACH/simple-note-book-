<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  header ("location:..\pages\signup.php?error=connetionFailed");
    exit();
}
function EmptyInput($username,$firstname,$lastname,$email,$pwd,$pwd_repeat){
    $result = false;
    if(empty($username) || empty($firstname)|| empty($lastname) || empty($email)|| empty($pwd) || empty($pwd_repeat)){
        $result = true;
    }
    return $result; 
}
function ValidateEmail($email){
    $result = true;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = false ;
    }  
    return $result;
}

function ValidatePwd($pwd,$pwd_repeat){
    $result = true;
    if($pwd !== $pwd_repeat ){
        $result = false ;
    }  
    return $result;
}
function ValidateUserName($username){
    $result = true;
    if (!preg_match('/[^A-Za-z0-9]/', $username)){
        $result = false ;
    }  
    return $result;
}
function ValidateFirstName($firstname){
    $result = true;
    if (!preg_match('/[^A-Za-z0-9]/', $firstname)){
        $result = false ;
    }  
    return $result;
}function ValidateLastName($lastname){
    $result = true;
    if (!preg_match('/[^A-Za-z0-9]/', $lastname)){
        $result = false ;
    }  
    return $result;
}
function ExistUsername($username){
    $result = false;
    $query = mysqli_query("SELECT * FROM users WHERE username='$username'");
    if(mysql_num_rows($query) == 0){

    }

}