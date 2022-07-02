<?php
include 'header.php';
?>


<form class="pl-3 pt-3" action="insert.php" method="post">
  <div class="form-group col-6">
    <label >Note Title</label>
    <input type="text" class="form-control"  name="note">
   
  </div>
  <div class="form-group col-6">
    <label >Description</label>
    <input type="textarea" class="form-control" name="description">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
include 'display.php';
?>