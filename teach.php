<?php
//include"config.php";
//include "fifth.php";


 include "config.php";
 session_start();

 if((isset($_REQUEST['login']))){
 	//$Fullname = $_REQUEST['Fullname'];
 	$email = $_REQUEST['email'];
 	//$username = $_REQUEST['username'];
 	$password =$_REQUEST['password'];
                 $query = "SELECT * FROM login WHERE email='$email' AND password='$password'";
                 $fire = mysqli_query($con,$query) or die("cannot fetch data from data base".mysqli_error($con));
                 ///if($fire) echo "got the data from data base"; 
                 if(mysqli_num_rows($fire)>0){
                 	$users = mysqli_fetch_assoc($fire);
						 if($users['stats']){
							
							 $_SESSION['id']=$users['id'];
               $_SESSION['email']=$users['email'];
							 
								 
							//header('Location:index1.html');
							 header('Location:adhome.php');
						 }elseif(!$user['stats']){
							$_SESSION['id']=$users['id'];
              $_SESSION['email']=$users['email'];
							
							header('Location:techerreg.php');
						 }else  echo "try again";
						
					}else 
					{
						$message = "sorry invalid user";
                           echo "<script type='text/javascript'>alert('$message');</script>";
                           echo '<script>window.location.href = "loginin.php";</script>';
					}
				}








if((isset($_REQUEST['submit']))){
 	$Subjectname = $_REQUEST['subjectname'];
 	$Topic = $_REQUEST['topic'];
 $sess=$_SESSION['id'];
 $email = $_SESSION['email'];
 	$period = $_REQUEST['period'];
 	//$year =$_POST['year'];
 	$Semester =$_POST['Semester'];
 	$Section =$_POST['Section'];

   $Course =$_REQUEST['Course'];
   if(!empty($sess)){



$query = "INSERT INTO teachers(Subjectname,topic,Semester,period,Course,Section,referenceid,email) VALUES('$Subjectname','$Topic','$Semester','$period','$Course','$Section','$sess','$email')";
//$query = "INSERT INTO teachers(Subjectname,topic,Semester,period,Course,Section,referenceid) VALUES('AI','INTRODUCTION','L','1','BCA','A','$sess')";
                 		 	$fire = mysqli_query($con,$query) or die("cannot insert into database".mysqli_error($con));
                 		 	if($fire){
                 		 			//$message = "Thank you ";
                           //echo "<script type='text/javascript'>alert('$message');</script>";
                           echo '<script>window.location.href = "data.php?course='.$Course.'&&semester='.$Semester.'&&subject='.$Subjectname.'";</script>';

                           //session_unset();



                           
                  
                

 		



                 		 	}
                 		 }else{
                 		 	echo "unset";
                 		 }
                 		 }


if(isset($_REQUEST['logout'])){
	 session_unset();
	session_destroy();
	echo '<script>window.location.href = "loginin.php";</script>';


}



?>