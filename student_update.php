<?php
    require_once('connectdb.php');
    require_once('validuser.php');
    require_once('uploadimage.php');

        $sid=$_REQUEST['sid'];
        $studentname=$_REQUEST['studentname'];
        $stdcontact=$_REQUEST['stdcontact'];
        $stdmail=$_REQUEST['stdmail'];
        $stdaddress=$_REQUEST['stdaddress'];
        
        if($imagename !=""){
        $sql1="UPDATE student set studentname='$studentname',stdcontact='$stdcontact',stdmail='$stdmail',stdimage='$newimagepath',stdaddress='$stdaddress' where sid='$sid'";
        }
        else{
            $sql1="UPDATE student set studentname='$studentname', stdcontact='$stdcontact',stdmail='$stdmail',stdaddress='$stdaddress' where sid='$sid'";
        }
    

 

        $update=mysqli_query($conn,$sql1);
        if($update){
            header("Location: student_table.php");
        }

        ?>