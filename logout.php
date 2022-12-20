<?php
/*session_start();
require_once('validuser.php');
$_SESSION['login'] = "";
session_destroy();
header("Location:index.php");*/
session_start();
$_SESSION['cr']="";
session_destroy();
header("Location:index.php");
?>