<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $note=$_POST['note'];
    $description=$_POST['description'];

    $insert="INSERT INTO note(note,description) VALUES ('$note', '$description')";
    $que=mysqli_query($conn,$insert);
    if($que)
    {
        //echo "Data is Inserted";
        header('location:home.php');
    }
    else
    {
        echo "Data is Not Inserted Please Try Again";
    }
}
?>