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
      .logo 
{
  height: 45px ;
  width: 45px; 
  margin: 10px 25px; 
}
    
      </style>

 </head>
 <body>
   <div style="height:110px;"class=" fluid-container bg-dark">
    <a style="font-size: 22px;color:white;text-decoration:none;margin-left:5px;" href="adhome.php"><img src="image\b.png" class="logo"style="margin-left:5px;margin-top:10px;">Online Attendence System</a>
    <ul class="float:right;" style="list-style:none;margin-top:-35px;">
    <form action="teach.php" method="post"><button name="logout" id="logout" class="float-right btn btn-danger btn-block"style="width:80px;padding:0px;margin-left:25px;margin-right:20px;">logout</button></form>
      <li class="float-right">
        <a style="margin-left:25px;color:gray;text-decoration:none;"class="" href="register.php">Register</a>
      </li>
      <li class="float-right">
        <a style="margin-left:25px;color:gray;text-decoration:none;"class="" href="bunk.php">AbsentList</a>
      </li>
       <li class="float-right">
        <a style="margin-left:25px;color:grey;text-decoration:none;"class="" href="department.php" >Department</a>
      </li><br><br>
    <form>
    <button type="submit" name="search" class="float-right "style="margin-left:15px;margin-right:20px;font-size:15px;"> click me</button>
    <input type="text" name="cat" placeholder="Search" style="width:15%;font-size:15px;" class="float-right">
       <select name="category" class="float-right"style="margin-right:15px;margin-top:-1px;height:29px;">
        <option>---select-----</option>
       <option  valve=''>Rollno</option>
       <option value= 'Electrical'>Electical</option>
       <option value='Computer'>Computer</option>
       <option value='BCA'>BCA</option>
       <option value='Civil'>Civil</option>
       <option value='Subject'>Subject</option>
       </select>
        </form>
</ul>
     </div>
  <div class="container-fluid" style="margin-top:10px;">
 		<div class="row">
 			<div class="col-lg-12 ">
 			 <div class="col-lg-12 ">
 			 			<form name="signup" id="signup" action="../advance/third.php" method="post" >
 						<h2 style="text-align: center;text-decoration:underline;margin-top:5px;" >Absent List</h2>
 												<button name="fill" id="fill" class="btn btn-success btn-block" style="margin-left:1100px;padding: 8px;width: 180px;">Send Message</button>
 				</form>
 				
 			   </div>		<hr>
 			 
 				<!-- data here--> 
 			<div class="col-lg-12 ">
 				 <table class="table table-striped">
    <thead>
      <tr>
      <th>Id</th>

        <th>Rollno</th>
        <th>  Studentname</th>
        <th>Course</th>
        <th>Subject</th>
        <th>Contact</th>

      
      </tr>
    </thead>
    <tbody>
    	<?php
                  $sno=0;
                  $date=date('Y-m-d');
                $query = "SELECT * FROM ai where date='$date' and status='0'";
                 $fire = mysqli_query($con,$query) or die("cannot fetch data from data base".mysqli_error($con));
                 ///if($fire) echo "got the data from data base"; 
                 if(mysqli_num_rows($fire)>0){
                 	while($users = mysqli_fetch_assoc($fire)){
                  $sno++; ?>
      <tr>
      <td><?php echo $sno; ?></td>
        <td><?php echo $users['Rollno']; ?></td>
        <td><?php echo $users['Studentname']; ?></td>
        <?php
        $roll=$users['Rollno'];
        $sql="select * from register where Rollno='$roll'";
       // echo $sql;
        $ret=mysqli_query($con,$sql);
       // var_dump($ret);
        if(mysqli_num_rows($ret)>0)
        {
          $row=mysqli_fetch_assoc($ret);
          


        
        ?>
        <td> <?php echo $row['Course']; ?></td>
        <td> <?php echo $users['Subjectname']; ?></td>
      <?php } ?>
        <td> <?php echo $users['contact_no']; ?></td>

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
	