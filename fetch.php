<?php
require_once 'config.php';
if ($_POST['request']){
    $request=$_POST['request'];
    $query="select * from register where Course='Computer' && Semester='$request'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0);
    {
        while($row=mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
            <td><?php echo $row['Rollno']; ?></td>
        <td><?php echo $row['studentname']; ?></td>
        <td> <?php echo $row['Course']; ?></td>
        <td> <?php echo $row['Phoneno']; ?></td>
        <td> <?php echo $row['Address']; ?></td>
        <td> <?php echo $row['Semester']; ?></td>
        <td> <?php echo $row['Section']; ?></td>
        <td><a  href="<?php $_SERVER['PHP_SELF'] ?>?del=<?php echo $row['Id'] ?>" 
        	class="btn btn-sm btn-danger">DELETE</a>
           <a  href="compreg.php?upd=<?php echo $row['Id'] ?>" 
          class="btn btn-sm btn-success">UPDATE</a></td>
            </tr>
            <?php
        }
    }
}