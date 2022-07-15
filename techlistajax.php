<?php
require_once 'config.php';
$search=$_POST['search'];
$sel=$_POST['sel'];
$sql="select * from teacherlist where ".$sel." like '".$search."%'";
//echo $sql;
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0)
{
	while($row=mysqli_fetch_assoc($res))
	{?>
		<tr>
                      <td><?php echo $row['ID']?></td>
                      <td><?php echo $row['FullName']?></td>
                      <td><?php echo $row['Address']?></td>
                      <td><?php echo $row['Contact']?></td>
                      <td><?php echo $row['Email']?></td>
                      <td><?php echo $row['Faculty']?></td>
                      <td><a  href="<?php $_SERVER['PHP_SELF'] ?>?del=<?php echo $users['ID'] ?>" 
        	            class="btn btn-sm btn-danger">DELETE</a>
                      <a  href="techupdate.php?upd=<?php echo $users['ID'] ?>" 
                      class="btn btn-sm btn-success">UPDATE</a></td>

                      
		</tr>
	<?php }
}