<?php
include 'connection.php';

echo $id=$_GET['id'];

$data="SELECT * FROM note where id='$id'";
$que=mysqli_query($conn, $data);
while($res = mysqli_fetch_array($que))
{
    $note=$res['note'];
    $description=$res['description'];
    
}

if(isset($_POST['update']))
{
    $note=$_POST['note'];
    $description=$_POST['description'];
    

    $update=" UPDATE  note SET  note='$note', description='$description'  where id='$id'";
    $que=mysqli_query($conn, $update);
    if($que)
    {
     //echo "Your Profile is Update Successfully";
      header('location:home.php');
    }
    else
    {
        echo "Your Profile Not Update Please Try Again";
    }
}

?>



<?php
include 'header.php';
?>


<form class="pl-3 pt-3" action="" method="post">
  <div class="form-group col-6">
    <label >Note Title</label>
    <input type="text" class="form-control"  name="note" value="<?php echo $note; ?>" >
   
  </div>
  <div class="form-group col-6">
    <label >Description</label>
    <input type="textarea" class="form-control" name="description" value="<?php echo $description; ?>">
  </div>
  
  <button type="submit" class="btn btn-primary" name="update">Update</button>
</form>