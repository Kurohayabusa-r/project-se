<?php

session_start();
session_unset();
session_regenerate_id(true);

setcookie("cookie_email",$_SESSION["email"],time()-3600,"/");
setcookie("cookie_password",$_SESSION["password"],time()-3600,"/");

if(!isset($_SESSION["username"]))
{
    header("Location: ../login.php");
}

?>