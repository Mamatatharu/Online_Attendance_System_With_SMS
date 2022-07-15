<?php
include 'config.php';
if(isset($_REQUEST['upd'])){
  $id = $_REQUEST['upd'];
  $query = "SELECT * FROM register Where id='$id'";
  $fire = mysqli_query($con,$query) or die("cant fetch".mysqli_error($con));
  $users = mysqli_fetch_assoc($fire);
 

}?>
<?php

  if(isset($_REQUEST['update'])){
    $Studentname = $_REQUEST['studentname'];
     $Semester = $_REQUEST['Semester'];
      $Section = $_REQUEST['Section'];
       $Rollno = $_REQUEST['Rollno'];
        $Address = $_REQUEST['Address'];
         $Year = $_REQUEST['Year'];
          $Phoneno = $_REQUEST['Phoneno'];
           $Course = $_REQUEST['Course'];
           //$query ="UPDATE register SET `Studentname`='$Studentname',`Semester`='$Semester',`Section`='$Section',`Rollno`='$Rollno',`Address`='$Address,`Year`=$Year,`Phoneno`=$Phoneno,`Course`=$Course Where id =''.$id";
           $query = "UPDATE `register` SET `Studentname`='$Studentname',`Rollno`='$Rollno',`Address`='$Address',`Year`='$Year',`Semester`='$Semester',`Phoneno`='$Phoneno',`Course`='$Course',`Section`='$Section' WHERE `id`='$id'";
           $fire =mysqli_query($con,$query) or die("cannnot update:".mysqli_error($con));
           if($fire)
           {
            //$message = "sorry invalid user";
                           //echo "<script type='text/javascript'>alert('$message');</script>";
                           echo '<script>window.location.href = "electrialrecord.php";</script>';
           }
  }



 ?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <style>
      	.secondnav li
		{
			
			display: none;
		}

		li:hover > .secondnav > li
		{
			margin-left:-15px;
      display: block;
      color:white;
    }
    .deco:hover
    {
text-decoration:none;
color:white;
    }
	

        </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="nav-link nav-item navbar-nav mr-auto text-light" style="font-size: 22px;" href="adhome.php"><img src="image\b.png" class="logo">Online Attendence System</a>
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav ml-auto mt-4 mb-2 pr-4 mt-lg-0  mr-5">
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="department.php" tabindex="-1" aria-disabled="true">Department</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="bunk.php" tabindex="-1" aria-disabled="true">AbsentList</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php" tabindex="-1" aria-disabled="true">Register</a>
      </li>
      <li class="nav-item">
        <form action="teach.php" method="post"><button name="logout" id="logout" class="btn btn-danger btn-block">logout</button></form>
              
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

  <div class="container-fluid "style="margin-top:110px;" >
    <div class="row">
      <div class="col-lg-12 col-md-8col-md-6 col-sm-4">
        <!-- data here--> 
      
       <div class="col-lg-12 col-md-8 col-md-6 col-sm-4 ">
           </div></div></div>
       
      
           </div>
       <br />
       <div class="container" >
    <div class="row">
      <div class="col-lg-12 col-md-8col-md-6 col-sm-4">
        <?php
        if(isset($_REQUEST['upd'])){
  $id = $_REQUEST['upd'];
  $query = "SELECT * FROM register Where id='$id'";
  $fire = mysqli_query($con,$query) or die("cant fetch".mysqli_error($con));
  $users = mysqli_fetch_assoc($fire);
 

}?>
        <!-- data here--> 
      
       <div class="col-lg-12 col-md-8 col-md-6 col-sm-4 ">
        
        <form name="signup" id="signup" action="" method="post" >
          <div class="form-group bg-secondary">
            <h2 style="text-align:center; color:white;">Student Details</h2>
           <hr>

            
          </div>
          <div class="form-group">
            <label for="studentname"> Studentname:</label>

            <input value="<?php echo $users['studentname'];?>" name="studentname"  id="studentname" type="text" class="form-control" placeholder="studentname" />  
          </div>

          <div class="form-group">
            <label for="Rollno"> Rollno</label>

            <input value="<?php echo $users['Rollno']?>" name="Rollno"  id="Rollno" type="text" class="form-control" placeholder="Rollno" /> 
          </div>

          <div class="form-group">
            <label for="Address"> Address</label>

            <input value="<?php echo $users['Address']?>" name="Address"  id="Address" type="text" class="form-control" placeholder="Address" />  
          </div>
           <div class="form-group">
            <label for="Phoneno"> Phoneno</label>

            <input value="<?php echo $users['Phoneno']?>" name="Phoneno"  id="Phoneno" type="text" class="form-control" placeholder="Phoneno" />  
          </div>
          <div class="form-group">
            <label for="Course">Course</label>

            <input value="<?php echo $users['Course']?>" name="Course"  id="Course" type="text"  class="form-control" placeholder="optional" />  
          </div>

        
            <!--<input name="Course"  id="Course" type="text" class="form-control" placeholder="Course" /> --> 
         
            <div class="form-group">
 
            <label for="Year">Year</label>

            <input value="<?php echo $users['year']?>" name="Year"  id="Year" type="text" class="form-control"  placeholder="optional" />  
          </div>
          


            <div class="form-group">
 
            <label for="Semester">Semester</label>

            <input value="<?php echo $users['Semester']?>" name="Semester"  id="Semester" type="text" class="form-control" placeholder="optional" />  
          </div>

            <div class="form-group">
 
            <label for="Section">Section</label>

            <input value="<?php echo $users['Section']?>" name="Section"  id="Section" type="text" class="form-control"  placeholder="optional" />  
          </div>

          <div class="form-group">
            

            <button name="update" id="update" class="btn btn-secondary btn-block">Update</button>
          </div>
          
          
        </form>
         </div> 
      </div>
    </div>  
  </div>

</body>
</html>