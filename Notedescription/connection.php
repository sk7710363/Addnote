<?php
$servername="localhost";
$username="root";
$password="";
$dbname="notedescription";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
   // echo "connection is Successfully";
}
else
{
    echo "Connection Failed";
}
?>