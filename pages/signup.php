<?php 
    include_once '..\bases\header.html';
?>
<form action="..\auth\signup.inc.php" method="post">
    <input  type="text" name="username" placeholder="Username..">
     <input  type="text" name="First-name" placeholder="First name...">
      <input  type="text" name="Last-name" placeholder="Last Name...">
    <input  type="text" name="email" placeholder="email..."> 
    <input  type="password" name="password" placeholder="Password...">
    <input  type="password" name="password-repeat" placeholder="Reapet Password...">
    <input  type="submit" value="sign up">
    <a href="#">Forgot your Password ?</a>
</form>