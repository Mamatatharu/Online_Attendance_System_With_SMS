<?php 
 //require  "../config/config.php";
 include "config.php";

 if((isset($_REQUEST['register']))){
 	$email = $_REQUEST['email'];
 	$password = $_REQUEST['password'];
 
   $query = "SELECT * FROM login WHERE email='$email'";
    $fire = mysqli_query($con,$query) or die("cannot fetch data from data base".mysqli_error($con));
      if(mysqli_num_rows($fire)>0){
                 $users = mysqli_fetch_assoc($fire);
                 		 if($users['password']==$password){
                 		 	//echo "thi has already been take";
                 		 	$message = "This email has already been register";
                           echo "<script type='text/javascript'>alert('$message');</script>";
                           echo '<script>window.location.href = "teacherentry.php";</script>';
                 		 	
                 		 }
                 		
                 	}else{
                 	

                 			$query = "INSERT INTO login(email,password,stats) VALUES('$email','$password','0')";
                 		 	$fire = mysqli_query($con,$query) or die("cannot insert into database".mysqli_error($con));
                 		 	if($fire) {
                 		 			$message = "Thank you for  registering";
                           echo "<script type='text/javascript'>alert('$message');</script>";
                           echo '<script>window.location.href = "teacherentry.php";</script>';
                 		 	}
                 		

                 	}
                 }

     
 	

?>