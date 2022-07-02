
<table border="1px solid" style="width:80%; padding-right:40px;">
    <tr>
        <th>Id</th>
        <th>Note</th>
        <th>Description</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php
    include 'connection.php';
    $sql="SELECT * FROM note";
    $que=mysqli_query($conn,$sql);
    while($res=mysqli_fetch_array($que))
    {
        ?>
        <tr>
            <td><?php echo $res['id'];?></td>
            <td><?php echo $res['note'];?></td>
            <td><?php echo $res['description'];?></td>
            <td><a href="update.php?id=<?php echo $res['id'];?>">Update</td>
            <td><a href="delete.php?id=<?php echo $res['id'];?>">Delete</td>
        </tr>
 <?php
    }
    ?>
</table>
