<?php
require_once 'config.php';
$search=$_POST['search'];
$sel=$_POST['sel'];
$sql="select * from register where Course='Computer' && ".$sel." like '".$search."%'";
//echo $sql;
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0)
{
	while($row=mysqli_fetch_assoc($res))
	{?>
		<tr>
        <td><?php echo $row['Rollno'];?></td>
        <td><?php echo $row['studentname'];?></td>
        <td> <?php echo $row['Course'];?></td>
        <td> <?php echo $row['Phoneno'];?></td>
        <td> <?php echo $row['Address'];?></td>
        <td> <?php echo $row['Semester'];?></td>
        <td> <?php echo $row['Section'];?></td>
        <td><a  href="<?php $_SERVER['PHP_SELF'] ?>?del=<?php echo $row['Id'];?>" class="btn btn-sm btn-danger">DELETE</a>&nbsp;&nbsp;
        <a  href="compreg.php?upd=<?php echo $row['Id'];?>" class="btn btn-sm btn-success">UPDATE</a></td>
      </tr>
     <?php
    }
                  }	