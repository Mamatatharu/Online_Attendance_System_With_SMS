<?php
include "config.php";
if((isset($_REQUEST['upd']))){
    $id=$_REQUEST['upd'];
    $query="SELECT * FROM teacherlist WHERE ID='$id'";
    $fire=mysqli_query($con,$query) or die("can't fetch".mysqli_error($con));
    $users=mysqli_fetch_assoc($fire);
}
?>

<?php
if((isset($_REQUEST['update']))){
    $fullname=$_REQUEST['fullname'];
    $email=$_REQUEST['email'];
    $address=$_REQUEST['address'];
    $faculty=$_REQUEST['faculty'];
    $contact=$_POST['contact'];
    $query="UPDATE `teacherlist` SET `FullName`='$fullname',`Email`='$email',`Address`='$address',`Faculty`='$faculty',`Contact`='$contact' WHERE ID='$id'";
    $fire=mysqli_query($con,$query) or die("cannot update".mysqli_error($con));
    if($fire){
        echo '<script>window.location.href="teacherlist.php";</script>';
        }
    else{
        echo mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
</ul>
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
  $query = "SELECT * FROM teacherlist Where Id='$id'";
  $fire = mysqli_query($con,$query) or die("cant fetch".mysqli_error($con));
  $users = mysqli_fetch_assoc($fire);
 

}?>
        <!-- data here--> 
      <div class="col-lg-12 col-md-8 col-md-6 col-sm-4 ">
         <form name="signup" id="signup" action=" " method="post" >
          <div class="form-group bg-secondary">
            <h2 style="text-align:center; color:white;">Teacher Register</h2>
           <hr>
         </div>
         <div class="form-group">
            <label for="fullname"> Fullname</label>

            <input value="<?php echo $users['FullName'];?>" name="fullname" required="required" id="fullname" type="text" class="form-control" placeholder="fullname" />  
          </div>
         

          <div class="form-group">
            <label for="address"> Address</label>

            <input value="<?php echo $users['Address'];?>" name="address" required="required" id="address" type="address" class="form-control" placeholder="address" /> 
          </div>

          
          <div class="form-group">
            <label for="contact"> Contact</label>

            <input value="<?php echo $users['Contact'];?>"name="contact" required="required" id="contact" type="text" class="form-control" placeholder="contact" /> 
          </div>
          <div class="form-group">
            <label for="email"> Email</label>

            <input value="<?php echo $users['Email'];?>"name="email" required="required" id="email" type="text" class="form-control" placeholder="email" />  
          </div>
          <div class="form-group">
            <label for="faculty">Faculty</label>
           <input value="<?php echo $users['Faculty'];?>" name="faculty" id="faculty" type="text" class="form-control" placeholder="faculty" required >
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