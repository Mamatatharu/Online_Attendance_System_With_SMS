<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <li class="nav-item float-right">
        <a class="nav-link" href="department.php" tabindex="-1" aria-disabled="true">Department</a>
      </li>
      <li class="nav-item float-right">
        <a class="nav-link" href="bunk.php" tabindex="-1" aria-disabled="true">AbsentList</a>
      </li>
</ul>
  </div>
</nav>
    <div>
    <form style=" background-color:grey;height:320px;width:400px;border:1px solid black;margin-left:35%;margin-top:140px;"><br><br><br>
<label style="margin-left:35px">CourseName:</label>
<select name="Course"style="margin-left:3%;">
              <option value="BCA">BCA</option>
              <option value="Civil">Civil</option>
              <option value="Computer">Computer</option>
              <option value="Electrial">Electrial</option>

            </select><br><br>
<label style="margin-left:35px">SubjectName:</label>
<input type="text" name="course" class="formcontrol"required style="margin-left:1%;"><br><br>
<label style="margin-left:35px">Semester:</label>
<select name="Semester"style="margin-left:9%;" >
  
  <?php 
 for($i=1;$i<9;$i++){
 ?>
 <option  value="<?php echo $i ?>"><?php echo $i ?></option>
 <!--<option value="2017">2017</option>-->

   <?php }?>
</select>

<br><br>
<button style="float:right;margin-top:30px;margin-right:2%;width:40px;">Go</button>
    </form>
    <div>
</body>
</html>