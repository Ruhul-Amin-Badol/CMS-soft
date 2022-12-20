<?php
session_start();
require_once('connectdb.php');
$adminuser=$_REQUEST['user'];
$password=md5($_REQUEST['pswd']);
$sql="SELECT adminpassword from userpanel where adminname ='$adminuser'";
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result))
{
    $row=mysqli_fetch_assoc($result);
    $adminpassword=$row['adminpassword'];
    if($password==$adminpassword)
    {
        
        //$_SESSION['login'] ="login";
        $_SESSION['cr']="deer";
        header("Location:deshboard.php");
    }else{
        header("Location:index.php");
  }
    }
    else{
        header("Location: index.php");
    }
    
    

?>