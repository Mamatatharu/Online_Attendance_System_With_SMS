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
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="dropodown.css">
    <link rel="stylesheet" href="style.css">
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
  <section id="banner"> <h2 class="text-light text-center">Department </h2></section>
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
          <li><a class="deco"href="register.php">For Student</a></li>
          <li><a class="deco"href="teacherentry.php">For Teacher</a></li>
          
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

<!-- .................................department................................. -->
<section>
<div class="inh" id="again">
  <a href="detail.php"><div class="cad">
    <p class="crd-txt"><img src="image\computer.jpg" style="length:160px;width:160px;margin-top:-40px;">Computer</p>
  </div></a>
  <a href="BCArecord.php"><div class="cad">
    <p class="crd-txt"><img src="image\BCA.png" style="length:200px;width:200px;margin-top:-40px;">B.C.A</p>
  </div></a>
  <a href="civilrecord.php"><div class="cad">
    <p class="crd-txt"><img src="image\civils.jpg" style="length:250px;width:200px;margin-top:-40px;">Civil</p>
  </div></a>
  <a href="electrialrecord.php"><div class="cad">
    <p class="crd-txt"><img src="image\electrical.jpg" style="length:110px;width:150px;margin-top:-60px;">Electrical</p>
  </div></a>
  <a href="teacherlist.php"><div class="cad">
    <p class="crd-txt">.......</p>
  </div> </a>
  </div> 
  </section> 
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
        9868880933<br>
      </p>
       
    <div id="media">
        <i class="fa fa-google" style="font-size:48px;color:white; padding-right:5px;" ></i>
<i class="fa fa-twitter-square" style="font-size:50px; padding-right:5px;color: white;"></a></i>
<a href="https://www.facebook.com/tharu.mamata"><i class="fa fa-facebook-square" style="font-size:50px;color:white; padding-right:5px;"></i></a>
</div>

<div class="copyright" align="left" style="margin-left: 8%; padding-bottom: 10px;">
              &copy; B technology </div>
            </div>


   
    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
     $(window).scroll(function(){
      $('nav').toggleClass('scrolled',$(this).scrollTop() > 50 );
     });
</script>
  </body>
</html>