<?php
if ($_POST)
{
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $firstname = filter_var( $_POST['First-name'], FILTER_SANITIZE_STRING);
    $lastname =filter_var($_POST['Last-name'], FILTER_SANITIZE_STRING); 
    $email =filter_var( $_POST['email'], FILTER_SANITIZE_STRING);
    $pwd =filter_var( $_POST['password'], FILTER_SANITIZE_STRING);
    $pwd_repeat =filter_var( $_POST['password-repeat'], FILTER_SANITIZE_STRING); 
}
else
{
    header ("location:..\pages\signup.php?error=wrongway");
    exit();
}
require_once '..\auth\functions.inc.php';

if(EmptyInput($username,$firstname,$lastname,$email,$pwd,$pwd_repeat)===true)
{
    header ("location:..\pages\signup.php?error=imptyinput");
    exit();
}