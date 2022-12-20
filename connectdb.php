<?php
$hostname="localhost";
$dbusername="root";
$dbpassword="";
$dbname="coaching_management";

$conn= mysqli_connect($hostname,$dbusername,$dbpassword,$dbname);

if(!$conn)
{
    echo "Database is not connected";
}
?>