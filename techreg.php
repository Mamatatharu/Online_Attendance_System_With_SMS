<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
     
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <style>
      	
	 </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="nav-link nav-item navbar-nav mr-auto text-light" style="font-size: 22px;" href="adhome.php"><img src="image\b.png" height="40" width="40" class="logo mr-4">Online Attendence System</a>
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav ml-auto mt-4 mb-2 pr-4 mt-lg-0  mr-5">
        
      
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
       <div class="container" style="margin-left: 25%; margin-top: 7%;">
    <div class="row">
      <div class="col-lg-6 col-md-5 col-sm-10 ml-4 mr-4 ">
         <form name="" id="" action="" method="post" style="border: 2px solid lightblue; background-color: lightblue;"  >
            <h2 align="center">Teacher Register</h2>
           <hr>
           <div class="mx-4">
            <hr>
            <label>Email ID:</label>

            <input name="TeacherMail" required="required" id="TeacherMail" type="text" class="form-control" placeholder="TeacherMail" />  
       
            <label> Password </label>

            <input name="password" required="required" id="password" type="text" class="form-control" placeholder="Password" /> 
            <hr>
            </div> 
            <hr>
            <button name="register" id="register" class="btn btn-secondary btn-block mt-4 mb-4" style="width: 30%; margin-left: 35%;">Register</button>
          
          
        </form>
         </div> 
      </div>
    </div>  
  </div>

</body>
</html>