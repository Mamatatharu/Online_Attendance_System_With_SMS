<?php 
 //require  "../config/config.php";
 include "config.php";

 if((isset($_REQUEST['register']))){
 	$studentname = $_REQUEST['studentname'];
 	$Rollno = $_REQUEST['Rollno'];
 	$Address = $_REQUEST['Address'];
 	$Phoneno = $_REQUEST['Phoneno'];
 	$year =$_POST['year'];
 	$Semester =$_POST['Semester'];
 	$Section =$_POST['Section'];

   $Course =$_REQUEST['Course'];

   $query = "SELECT * FROM register WHERE Rollno='$Rollno'";
    $fire = mysqli_query($con,$query) or die("cannot fetch data from data base".mysqli_error($con));
      if(mysqli_num_rows($fire)>0){
                 $users = mysqli_fetch_assoc($fire);
                 		 if($users['Rollno']==$Rollno){
                 		 	//echo "this roll has already been take";
                 		 	$message = "this roll has already been take";
                           echo "<script type='text/javascript'>alert('$message');</script>";
                           echo '<script>window.location.href = "register.php";</script>';
                 		 	
                 		 }
                 		
                 	}else{
                 		if(empty($Section)){

                 			$query = "INSERT INTO register(studentname,Rollno,Address,year,Semester,Phoneno,Course,Section) VALUES('$studentname','$Rollno','$Address','$year','$Semester','$Phoneno','$Course','none')";
                 		 	$fire = mysqli_query($con,$query) or die("cannot insert into database".mysqli_error($con));
                 		 	if($fire) {
                 		 			$message = "Thank you for  registering";
                           echo "<script type='text/javascript'>alert('$message');</script>";
                           echo '<script>window.location.href = "register.php";</script>';
                 		 	}
                 		 }else{
                 		 	$query = "INSERT INTO register(studentname,Rollno,Address,year,Semester,Phoneno,Course,Section) VALUES('$studentname','$Rollno','$Address','$year','$Semester','$Phoneno','$Course','$Section')";
                 		 	$fire = mysqli_query($con,$query) or die("cannot insert into database".mysqli_error($con));
                 		 	if($fire){
                 		 			$message = "Thank you for  registering";
                           echo "<script type='text/javascript'>alert('$message');</script>";
                           echo '<script>window.location.href = "register.php";</script>';

                 		 	}

                 		 }

                 	}
                 }

     
 	

?>