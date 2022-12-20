    <?php 
    require_once("validuser.php");
    require_once("connectdb.php");
    require_once('header.php');
   //require_once("uploadimage.php");

    $coursename=$_REQUEST['coursename'];
    $startingdate=$_REQUEST['startingdate'];
    $coursefee=$_REQUEST['coursefee'];
    $timeduration=$_REQUEST['timeduration'];

    $sql1="INSERT INTO batchmanage (coursename,startingdate,coursefee,timeduration) 
        VALUES ('$coursename', '$startingdate','$coursefee','$timeduration')";

    $batch=mysqli_query($conn,$sql1);   

    if($batch){
    ?>
        <script>
        alert("Successfuly Add Your Batch Information ");
        location.replace('batch_table.php');
        </script>
    <?php
    }else{
    ?>
    <script>
        alert("No Try Again");
        location.replace('batch_manage.php');
        </script>
    <?php
}

?>