<?php
    require_once('connectdb.php');
    require_once('validuser.php');

        $sid=$_REQUEST['sid'];
        $colldate=$_REQUEST['colldate'];
        $collamount=$_REQUEST['collamount'];
        $collnote=$_REQUEST['collnote'];

     $sql1="UPDATE collectionfee set colldate='$colldate',collamount='$collamount',collnote='$collnote' where collid='$sid'";

    $update=mysqli_query($conn,$sql1);
    if($update){
    header("Location:collection_table.php");
    }

    ?>