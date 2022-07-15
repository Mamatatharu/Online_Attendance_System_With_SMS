<?php //require  "../config/config.php";
 include "config.php"
 


 ;?>





 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<title></title>
   <link rel="shortcut icon" type="image/jpg" href="image\b.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 
 	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
  <input type="text" name="search" placeholder="Search" style="width:20%" class="float-right mt-5">
  <button type="" class="float-right mt-5"style="margin-left:15px;"> click me</button>
</nav>

 	          <div class="container-fluid" Style="margin-top:150px;">
 		<div class="row">
 			<div class="col-lg-12 ">
 			 <div class="col-lg-12 bg-primary">
 			 			<form name="signup" id="signup" action="../advance/third.php" method="post" >
 						<h3 style="text-align: center;" >Absent List</h3><br>
 						

 						<button name="fill" id="fill" class="btn btn-danger btn-block" style="margin-left:1100px;padding: 8px;width: 200px;">fill</button>
 				
 					
 					
 				</form>
 				
 			   </div>		<hr>
 			 
 				<!-- data here--> 
 			<div class="col-lg-12 ">
 				

 	


 			

 				 <table class="table table-striped">
    <thead>
      <tr>
      <th>id</th>

        <th>Rollno</th>
        <th>  Studentname</th>
        <th>Course</th>
        <th>Subject</th>

      
      </tr>
    </thead>
    <tbody>
    	<?php
                $query = "SELECT * FROM absentlist";
                 $fire = mysqli_query($con,$query) or die("cannot fetch data from data base".mysqli_error($con));
                 ///if($fire) echo "got the data from data base"; 
                 if(mysqli_num_rows($fire)>0){
                 	while($users = mysqli_fetch_assoc($fire)){ ?>
      <tr>
      <td><?php echo $users['id']; ?></td>
        <td><?php echo $users['Rollno']; ?></td>
        <td><?php echo $users['studentname']; ?></td>
        <td> <?php echo $users['Course']; ?></td>
        <td> <?php echo $users['Subject']; ?></td>

      </tr>


      <?php
                  }	
                 }

 				?>
    
    </tbody>
  </table>


 				


 			</div>

 			</div>
 		</div>	
 	</div>
 
 </body>
 </html>
	