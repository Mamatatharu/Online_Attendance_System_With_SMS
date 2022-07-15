<?php

if(isset($_POST['fill']))
{
	//echo "Yes"; 
$con=mysqli_connect('localhost','root','','online');
$date=date('Y-m-d');
$sql="select contact_no,Studentname from ai where status=0 and date='$date'";
//echo $sql;
$res=mysqli_query($con,$sql);
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');
$output= fopen("php://output", "w");
fputcsv($output, array('name','phone'));
while($row=mysqli_fetch_assoc($res))
{
	fputcsv($output, $row);
}
fclose($output);
}
 ?>
 