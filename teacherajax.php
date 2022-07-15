<?php
require_once 'config.php';
$search=$_POST['search'];
$sel=$_POST['sel'];
$sql="select * from teachers where ".$sel." like '".$search."%'";
//echo $sql;
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)>0)
{
	while($row=mysqli_fetch_assoc($res))
	{?>
		<tr>
			<td><?php echo $row['Id'] ?></td>
			<td><?php echo $row['Subjectname'] ?></td>
			<td><?php echo $row['Course'] ?></td>
			<td><?php echo $row['Topic'] ?></td>
			<td><?php echo $row['Semester'] ?></td>
			<td><?php echo $row['Date'] ?></td>
			<td><?php echo $row['referenceid'] ?></td>
			<td><?php echo $row['Period'] ?></td>
			<td><?php echo $row['Section'] ?></td>
			<td><?php echo $row['email'] ?></td>
		</tr>
	<?php }
}