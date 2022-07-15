<?php 
//require  "../config/config.php";
 include "config.php";
 session_start();

 if((isset($_REQUEST['submit']))){
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
							 
								 
							//header('Location:index1.html');
							 header('Location:department.php');
						 }elseif(!$user['stats']){
							$_SESSION['id']=$users['id'];
							
							header('Location:selection.php');
						 }else  echo "try again";
						
					}else 
					{
						$message = "sorry invalid user";
                           echo "<script type='text/javascript'>alert('$message');</script>";
                           echo '<script>window.location.href = "loginin.php";</script>';
					}
				}

						 
						 ?>


    

 