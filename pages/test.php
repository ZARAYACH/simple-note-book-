<?php

$files = scandir('../note_user/');
foreach ($files as $file) {
    $pattern = "/^(ZARAYACH)/";
   if(preg_match($pattern,$file)==1){
       echo(file_get_contents("../note_user/".$file)."<br>");

   }
}