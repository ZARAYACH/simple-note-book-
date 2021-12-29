<?php

if($_POST){
    $username = filter_var($_POST['user-name'], FILTER_SANITIZE_STRING);
    $pwd = filter_var( $_POST['password'], FILTER_SANITIZE_STRING);

}else{
    header ("location:..\pages\login.php?error=wrongway");
    exit();
}

require_once '..\auth\functions.inc.php';

if(empty($username) || empty($pwd)){
    header ("location:..\pages\signup.php?error=emptyinput");
    exit();
}
$user_file = "../users/".$username.".txt";
if(file_exists($user_file)==false){
    header ("location:..\pages\login.php?error=useranexist");
    exit();
}

$fp = fopen($user_file,'r');
$contents = file_get_contents($user_file);
$pattern = preg_quote($pwd, '/');
$pattern = "/.$pwd./";

if(preg_match($pattern,$contents,$matches) ==false){
    header ("location:..\pages\login.php?error=uncorrectpwd");
    exit();
}else if(sizeof($matches)==1){
    session_start();

    $elements=explode("§",$contents);

    for($i=0;$i<=sizeof($elements);$i++){
        if($i==0){
            $_SESSION['username']=$elements[$i];
        }else if($i==1){
            $_SESSION['pwd']=$elements[$i];
        }else if($i==2){
            $_SESSION['email']=$elements[$i];
        }else if($i==3){
            $_SESSION['lastname']=$elements[$i];
        }else if($i==4){
            $_SESSION['firstname']=$elements[$i];

        }
    }
    

    header ("location:..\pages\user-home.php");
    exit();
}