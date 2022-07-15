<?php //require  "../config/config.php";
 include "config.php"
 
 ;?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<title></title>
   <link rel="stylesheet" href="style.css">
   <link rel="shortcut icon" type="image/jpg" href="image\b.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 
 	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <style>
      .logo 
{
  height: 45px ;
  width: 45px; 
  margin: 10px 25px; 
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
   <div style="height:97px;"class=" fluid-container bg-dark fixed-top">
    <a style="font-size: 22px;color:white;text-decoration:none;margin-left:5px;" href="adhome.php"><img src="image\b.png" class="logo"style="margin-left:5px;margin-top:10px;">Online Attendence System</a>
    <ul class="float:right;" style="list-style:none;margin-top:-35px;">
    <form action="teach.php" method="post"><button name="logout" id="logout" class="float-right btn btn-danger btn-block"style="width:80px;padding:0px;margin-left:25px;margin-right:20px;">Log Out</button></form>
      <li class="float-right">
        <a style="margin-left:25px;color:gray;text-decoration:none;"class="" href="register.php">Register</a>
      </li>
      <li class="float-right">
        <a style="margin-left:25px;color:gray;text-decoration:none;"class="" href="bunk.php">Absent List</a>
      </li>
      <li class="float-right">
        <a style="margin-left:25px;color:gray;text-decoration:none;"class="" href=" ">Attendance Records</a>
        
        <ul class="record">
        <li><a  class="deco" href="attrecord.php">Students</a></li>
        <li><a class="deco" href="atteacher.php">Teachers</a></li>
        </ul>
        
      </li>
      
       <li class="float-right">
        <a style="margin-left:25px;color:grey;text-decoration:none;"class="" href="department.php" >Department</a>
      </li>
      </ul>
  </div>
    <form style="margin-top:120px; " method="post">
    <button type="submit" name="search" class="float-right "style="margin-left:15px;margin-right:20px;font-size:15px;"> Search</button>
    <input type="text" name="cat" placeholder="Search" id="search" style="width:15%;font-size:15px;" class="float-right">
       <select name="category" class="float-right" id="sel" style="margin-right:15px;margin-top:-1px;height:29px;">
        
       <option  value='Rollno'>Rollno</option>
       <option value="Studentname">Student Name</option>
       <option value="faculty">Course</option>
       <option value='Subjectname'>Subject</option>
       <option value='Semester'>Semester</option>

       </select>
        </form>
     
  <br><br>
  <!-- <div class="container-fluid" style="margin-top:10px;">
 		<div class="row">
 			<div class="col-lg-12 "> -->
 			 
          <h2 style="text-align: center;text-decoration:underline;margin-top:5px; margin-left: 40px;" >Present Student's List</h2>
          
 			 
 				<!-- data here--> 
 			<div class="col-lg-12 ">
 				 <table class="data">
    <thead>
      <tr>
      <th>Id</th>

        <th>Rollno</th>
        <th>  Studentname</th>
        <th>Course</th>
        <th>Semester</th>
        <th>Subject</th>
        <th>Date</th>

      
      </tr>
    </thead>
    <tbody id="tbl">
    	<?php
                  $sno=0;
                  // $date=date('Y-m-d');
                $query = "SELECT * FROM ai where  status='1'";
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
        <td> <?php echo $row['Semester']; ?></td>

        <td> <?php echo $users['Subjectname']; ?></td>
      <?php } ?>
        <td> <?php echo $users['date']; ?></td>

      </tr>


      <?php
                  }	
                 }

 				?>
    
    </tbody>
  </table>

<script type="text/javascript">
  $("#search").keyup(function(){
   var search= $(this).val();
   var sel=$("#sel").val();

   $.ajax({
    method:"POST",
    url:"presentajax.php",
    data:{search:search,sel:sel},
    dataType:"text",
    success:function(data)
    {
      $("#tbl").html(data);
    }
   });
  });
</script>
 				


 			</div>

 			<!-- </div>
 		</div>	
 	</div> -->
 
 </body>
 </html>
	