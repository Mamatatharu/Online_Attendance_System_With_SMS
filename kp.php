<?php


$category =$_REQUEST['category'];
$cat = $_REQUEST['cat'];
$query = "SELECT * FROM absentlist WHERE";
$query = "SELECT * FROM ai where date='$date' and status=' $category='$cat''";
$fire = mysqli_query($con,$query);



?>