<?php //require  "../config/config.php";
 include "config.php";
 if(isset($_POST['fill']))
 {
  $p=0;
$cnt=$_POST['cnt'];
for($i=1;$i<=$cnt;$i++)
{
  $id=$_POST['id'.$i];
  if(isset($_POST['cb'.$i]))
  {
    $cb=$_POST['cb'.$i];
  }else
  {
    $cb=0;
  }
  $sql="select * from register where Id=".$id;
 
  $res=mysqli_query($con,$sql);
 
  $row=mysqli_fetch_assoc($res);
 
      $studentname=$row['studentname'];
      $Course=$_GET['course'];
      $subjectname=$_GET['subject'];
      $rollno=$row['Rollno'];
      $phone=$row['Phoneno'];
      $date=date('Y-m-d');
      $sql="insert into ai(Rollno,Studentname,date,contact_no,status,Subjectname,faculty) values('$rollno','$studentname','$date','$phone','$cb','$subjectname','$Course')";
      $res=mysqli_query($con,$sql);
      if($res)
      {
       
       
      }else
      {
        $p=1;
      }
    

  
}
if($p==1)
    {
       echo "<script>alert('Failed to insert')</script>";
       // echo "<script> window.location='techerreg.php'</script>";
    }else
    {
       //echo "<script>alert('Successfully inserted')</script>";
        echo "<script> window.location='techerreg.php'</script>";
    }
 }
 ;?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<title></title>
 	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <link rel="shortcut icon" type="image/jpg" href="image\b.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="dropodown.css">
    <link rel="stylesheet" href="style.css">

 </head>
 <style>
 .data{
        border:1px solid #ddd;
        width:100%;
    }
    .data td, .data th{
      border:1px solid #ddd;
      padding:10px;
    }
    tr:nth-child(even){background-color:#f2f2f2;}
    .data tr:hover{background-color:#ddd;}

 </style>
 <body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="nav-link nav-item navbar-nav mr-auto text-light" style="font-size: 22px;" href="techerreg.php"><img src="image\b.png" class="logo">Online Attendence System</a>
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav ml-auto mt-4 mb-2 pr-4 mt-lg-0  mr-5">
        
      <li class="nav-item">
        <form action="teach.php" method="post"><button name="logout" id="logout" class="btn btn-danger btn-block">Log Out</button></form>
              
      </li>
      
      <!-- <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true" data-toggle="modal" data-target="#loginform">Login</a>
      </li> -->
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
 	          <div class="container-fluid" style="margin-top:130px;">
 		<div class="row">
 			<div class="col-lg-12 ">
 			 <div class="col-lg-12 ">
 			 			<form name="signup" id="signup"  method="post" >
             <input type="submit" name="fill" id="fill" class="btn btn-success btn-block" style="margin-left:1100px;padding: 8px;width: 180px;margin-top:-10px;"><br>
 						<h2 style="text-align: center;"> Student Attendace</h2>
 						 				
 			   </div>		<hr> 			 
 				<!-- data here--> 
 			<div class="col-lg-12 ">
 				 <table class="data">
    <thead>
      <tr>
        <th>Rollno</th>
        <th>Student Name</th>
        <th><?php 
        echo date_default_timezone_set('Asia/Kathmandu');
        echo date("Y-m-d H:i:sA");
        ?></th>
      </tr>
    </thead>
    <tbody>
     
    	<?php
            $cnt=0;
            $course=$_GET['course'];
            $semester=$_GET['semester'];
            $subject=$_GET['subject'];
                $query = "SELECT * FROM register where Course='$course' and Semester='$semester'";
                 $fire = mysqli_query($con,$query) or die("cannot fetch data from data base".mysqli_error($con));
                 ///if($fire) echo "got the data from data base"; 
                 if(mysqli_num_rows($fire)>0){
                 	while($users = mysqli_fetch_assoc($fire)){
                      $cnt++;
                   ?>
      <tr>
        <td><?php echo $users['Rollno']; ?></td>
        <td><?php echo $users['studentname']; ?></td>
        <td><input type="checkbox" name="cb<?php echo $cnt ?>" value="1"></td>
        <input type="hidden" name="id<?php echo $cnt ?>" value="<?php echo $users['Id'] ?>">
      </tr>


      <?php
                  }	
                 }

 				?>
    
    </tbody>
    <input type="hidden" name="cnt" value="<?php echo $cnt; ?>">

  </form>
  </table>


 				


 			</div>

 			</div>
 		</div>	
 	</div>
 
 </body>
 </html>
	