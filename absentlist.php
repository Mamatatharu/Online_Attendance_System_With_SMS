<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="shortcut icon" type="image/jpg" href="image\b.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
    <a class="nav-link nav-item navbar-nav mr-auto text-light" style="font-size: 22px;" href="index1.php"><img src="image\b.png" class="logo">Online Attendence System</a>
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav ml-auto mt-4 mb-2 pr-4 mt-lg-0  mr-5">
      <li class="nav-item">
        <a class="nav-link float-right"tabindex="-1" aria-disabled="true">Attendence</a>
        <ul class="secondnav">
          <li><a class="deco"href="selection.php">Computer</a></li>
          <li><a class="deco"href="selection.php">BCA</a></li>
          <li><a class="deco"href="selection.php">Electrial</a></li>
          <li><a class="deco"href="selection.php">Civil</a></li>

        </ul>
     
      </li>
      <li class="nav-item float-right">
        <a class="nav-link" href="department.php" tabindex="-1" aria-disabled="true">Department</a>
      </li>
      <li class="nav-item float-right">
        <a class="nav-link" href="absent.php" tabindex="-1" aria-disabled="true">AbsentList</a>
      </li>
</ul>
  </div>
  <input type="text" name="search" placeholder="@Search" style="width:20%" class="float-right mt-5">
  <button type="" class="float-right mt-5"style="margin-left:15px;"> click me</button>
</nav>
<div class="container"style="margin-top:150px;height:600px;background-color:grey;">
<button style="float:right;margin-top:15px;">Send Message</button>
</div>
 
</body>
</html>