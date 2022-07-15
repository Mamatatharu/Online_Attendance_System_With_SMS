<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing</title>
    <link rel="shortcut icon" type="image/jpg" href="image\b.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="dropodown.css"> -->
    <link rel="stylesheet" href="style.css">
    <style>
       .logo 
{
  height: 45px ;
  width: 45px; 
  margin: 10px 25px; 
}
      	.secondnav li
		{
			
			display: none;
		}

		li:hover > .secondnav > li
		{
      
      display: block;
      color:white;
      margin-left:-22px;
    }
    .record li{
      display:none;
    }
    li:hover > .record > li
    {
      display:block;
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
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Attendance Records</a>
        
        <ul class="record">
        <li><a  class="deco" href="attrecord.php">Students</a></li>
        <li><a class="deco" href="atteacher.php">Teachers</a></li>
        </ul>
        
      </li>

      <li class="nav-item">
        <a class="nav-link" href="bunk.php" tabindex="-1" aria-disabled="true">Absent List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Register</a>
        <ul class="secondnav">
          <li><a class="deco"href="register.php">Student</a></li>
          <li><a class="deco"href="teacherentry.php">Teacher</a></li>
          
        </ul>
      </li>
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
 <div class="modal fade" id="loginform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
     <div class="modal-dialog modal-md" role="document">
       <div class="modal-content">
       
         <!-- Modal Header -->
         <div class="modal-header">
           <h4 class="modal-title" id="exampleModalLabel1">LOGIN</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         
         <!-- Modal body -->
         <div class="modal-body">
         <form action="login.php" method="post"> 
               <div class="form-group">
                   <lebel>
                         <i class="fas fa-mail-bulk"></i> EMAIL:
                   </lebel>
                   <br>
                   <input type="text" name="email" class="form-control" required>
               </div>
               <lebel>
                     <i class="fas fa-key"></i> PASSWORD:
               </lebel>
               <br>
               <input type="password" name="pass" class="form-control" required >
           </div>
            <div class="modal-footer">
             <input type="submit" name="submit" value="LOGIN" class="btn btn-danger">
             </div>
         </form>
       </div>
     </div>
   </div>
 </div>
  <!-- ........................slider..................................... -->
 <div data-interval="false">
        <div class="carousel slide"  id="carouselid" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselid" data-slide-to="0" class="active"></li>
                <li data-target="#carouselid" data-slide-to="1" ></li>
                <li data-target="#carouselid" data-slide-to="2" ></li>
                <li data-target="#carouselid" data-slide-to="3" ></li>
                <li data-target="#carouselid" data-slide-to="4" ></li>
            </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img style="width: 1000px; height:720px;" src="atte.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img style="width: 300px; height: 720px;" src="image/att1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img style="width: 300px; height: 720px;" src="image/att3.jpg" class="d-block w-100">
            </div>
           <div class="carousel-item">
                <img style="width: 300px; height: 720px;" src="image/att4.jpg" class="d-block w-100">
            </div>
                <a class="carousel-control-prev" role="button" data-slide="prev" href="#carouselid">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" role="button" data-slide="next" href="#carouselid">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
  </div> 

<!-- .............................footer.......................... -->

<div class="footer">
<div class="container">

  <button class="btn">Feedback</button>
                </div>
     <div align="left" style="margin-left: 8%; margin-top: 15px; padding-top: 20px;">
      <p>It is an online attendence system build by: </p>
     <p><a href="#" style="text-decoration: none; color: white; padding-right: 40px;">Mamata Tharu</a>
     <a href="#" style="text-decoration: none; color: white;">Mamata Gyawali</a>
     <a href="#" style="text-decoration: none; color: white; padding-right: 40px;margin-left:5%;">Ayushma Khanal</a>
     <a href="#" style="text-decoration: none; color: white;padding-right: 40px;margin-left:1%;">Reema Jaiswal</a></p>
     <p><a href="#" style="text-decoration: none; color: white;padding-right: 40px;">Bijay Parajuli</a>
     <a href="#" style="text-decoration: none; color: white;padding-right: 40px;margin-left:1%;">Jay Prakash Shrestha</a>
     <a href="#" style="text-decoration: none; color: white;padding-right: 40px;">Jiten Shrestha</a>
     <a href="#" style="text-decoration: none; color: white;padding-right: 40px;margin-left:2%;">Samundra Poudel</a></p>
     

   </div>
     <p align="center" style="margin-left: 8%;">
        Contact Us<br>
        +977-9868880933<br>
        
      </p>
       
    <div id="media">
      <a href="https://mail.google.com/mail/u/0/#inbox">  <i class="fa fa-google" style="font-size:48px;color:white; padding-right:5px;" ></i></a>
<a href="www.tharumamata0123@gmail.com"> <i class="fa fa-twitter-square" style="font-size:50px; padding-right:5px;color: white;"></i></a>
<a href="https://www.facebook.com/tharu.mamata"> <i class="fa fa-facebook-square" style="font-size:50px;color:white; padding-right:5px;"></i></a>
</div>

<div class="copyright" align="left" style="margin-left: 8%; padding-bottom: 10px;">
              &copy; B technology </div>
            </div>
<!-- ..................js................. -->
<script src="https://kit.fontawesome.com/0b5ac7632d.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  </body>
</html>