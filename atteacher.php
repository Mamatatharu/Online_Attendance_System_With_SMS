
<?php include "config.php"  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
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
    th{
      background-color:
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
        <a class="nav-link" href="bunk.php" tabindex="-1" aria-disabled="true">AbsentList</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="" tabindex="-1" aria-disabled="true">Register</a>
        <ul class="secondnav">
          <li><a class="deco"href="register.php">Student</a></li>
          <li><a class="deco"href="teacherentry.php">Teacher</a></li>
          
        </ul>
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
</nav><br><br>
 <form style="margin-top:90px; ">
  <div class="row">
    <div class="col-md-3">
       <select name="department" id="sel" class="form-control" style="margin-left: 15px; text-align-last:center; margin-top: -1px;">
        
       <option value= 'Course'>Course</option>
       <option value='Period'>Period</option>
       <option value='email'>Email</option>
       <option value='Subjectname'>Subject Name</option>
       <option value='Semester'>Semester</option>
       </select>
     </div>
     <div class="col-md-3">
        <input type="text" name="search" id="search" class="form-control">
  </div>
  <div>


     </div>
       <!-- <input type="text" name="cat" placeholder="Search" style="width:15%;font-size:15px;" class=""> -->
       <button type="submit" name="search" class=" btn-danger"style="margin-left:15px;margin-right:20px;font-size:15px;"> Search</button>
        </form>
     </div>

<div class="col-lg-12 " style="margin-top:50px;">
        <h2 style="text-align:center;margin-top:10px;text-decoration: underline;">Teacher Record List</h2>

  


      

         <table class="data">
    <thead>
      <tr>
     

        <th>ID</th>
        <th>SubjectName</th>
        <th>Course</th>
        <th>Topic</th>
        <th>Semester</th>
        <th>Date</th>
        <th>Reference ID</th>
        <th>Period</th>
        <th>Section</th>
        <th>Email</th>

      
      </tr>
    </thead>
    <tbody id="tbl">
      <?php
                $query = "SELECT * FROM teachers";
                 $fire = mysqli_query($con,$query) or die("cannot fetch data from data base".mysqli_error($con));
                 ///if($fire) echo "got the data from data base"; 
                 if(mysqli_num_rows($fire)>0){
                  while($users = mysqli_fetch_assoc($fire)){ ?>
      <tr>
      
        <td><?php echo $users['Id']; ?></td>
        <td><?php echo $users['Subjectname']; ?></td>
        <td> <?php echo $users['Course']; ?></td>
        <td> <?php echo $users['Topic']; ?></td>
        <td> <?php echo $users['Semester']; ?></td>
        <td> <?php echo $users['Date']; ?></td>
        <td> <?php echo $users['referenceid']; ?></td>
        <td> <?php echo $users['Period']; ?></td>
        <td> <?php echo $users['Section']; ?></td>
        <td> <?php echo $users['email']; ?></td>

      </tr>


      <?php
                  } 
                 }

        ?>
    
    </tbody>
  </table>
<script type="text/javascript">
  $("#search").keyup(function(){
    var sel=$("#sel").val();
    var search=$(this).val();
    $.ajax({
      method:"POST",
      url:"teacherajax.php",
      dataType:"text",
      data:{sel:sel,search:search},
      success:function(data)
      {
        $("#tbl").html(data);
      }
    });
  });
</script>

        


      </div>
</body>
</html>