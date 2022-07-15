<?php 
require_once 'config.php';
$search=$_POST['search'];
$sel=$_POST['sel'];
$date=date('Y-m-d ');
$sql="select * from ai where ". $sel." 	like '".$search."%' and status=0 and date='$date'";
$res=mysqli_query($con,$sql);
//echo $sql;
$sno=0;
if(mysqli_num_rows($res)>0)
{
	while($users=mysqli_fetch_assoc($res))
	{
		$sno++;
		?>
		<tr>
		 <td><?php echo $sno; ?></td>
        <td><?php echo $users['Rollno']; ?></td>
        <td><?php echo $users['Studentname']; ?></td>
        
        	 <?php
        $roll=$users['Rollno'];
        $sql="select * from register where Rollno='$roll'";
       // echo $sql;
        $ret=mysqli_query($con,$sql);
       // var_dump($ret);
        if(mysqli_num_rows($ret)>0)
        {
          $row=mysqli_fetch_assoc($ret);
          


        
        ?>
    <?php } ?>
        <td> <?php echo $row['Course']; ?></td>
        </td>
        <td><?php echo $users['Subjectname'] ?></td>
        <td><?php echo $users['contact_no'] ?></td>
    </tr>
<?php	}
}
 ?>
