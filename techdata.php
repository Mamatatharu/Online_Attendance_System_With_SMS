<?php
include "config.php";


$fullname=$_POST['fullname'];
$email=$_POST['email'];
$address=$_POST['address'];
$faculty=$_POST['Faculty'];
$contact=$_POST['contact'];
$query = "INSERT INTO teacherlist(FullName,Email,Address,Faculty,Contact)VALUES('$fullname','$email','$address','$faculty','$contact')";
$fire = mysqli_query($con,$query) or die("cannot fetch data from data base".mysqli_error($con));
if($fire){
    $message = "Thank you for  registering";
                           echo "<script type='text/javascript'>alert('$message');</script>";
                           echo '<script>window.location.href = "teacherentry.php";</script>';
}

?>