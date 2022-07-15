<?php //require  "../config/config.php";
 include "config.php";?>

<?php
if(isset($_GET['del'])){
	$id = $_REQUEST['del']; 
  echo "string".$id;
	$query = "DELETE FROM register WHERE id='$id'";
	$fire = mysqli_query($con,$query) or die("cannot delete from database".mysqli_error($con));
 	if($fire) echo "data base deleted" ;

    

 	//this code will be executed
 
}
?>

<?php


 ?>




 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<title></title>
   <link rel="stylesheet" href="style.css">

 	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



     <style>
        /* .secondnav li
    {
      
      display: none;
    }

    li:hover > .secondnav > li
    {
      margin-left:-15px;
      display: block;
      color:white;
    }*/
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
        <a class="nav-link" href="bunk.php" tabindex="-1" aria-disabled="true">Absent List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php" tabindex="-1" aria-disabled="true">Register</a>
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
</nav><br>
<form style="margin-top:90px; ">
  <div class="row">
  <div class="col-md-3" style="margin-left:20px;">
    <select id="fetchval" name="fetchval" class="form-control">
<option value="0">Choose Semester</option>
<option value="1">First semester</option>
<option value="2">Second semester</option>
<option value="3">Third semester</option>
<option value="4">Fourth semester</option>
<option value="5">Fifth semester</option>
<option value="6">Sixth semester</option>
<option value="7">Seventh semester</option>
<option value="8">Eighth semester</option>

    </select>
  </div>

    <div class="col-md-3">
       <select name="comp" id="sel" class="form-control" style="margin-left: 15px; text-align-last:center; margin-top: -1px;">
        
       <option value= 'Rollno'>Rollno</option>
       <option value='studentname'>Studentname</option>
       <option value='Semester'>Semester</option>
       
       </select>
     </div>
     <div class="col-md-3">
        <input type="text" name="search" id="search" class="form-control" placeholder="Search....">
  </div>
 
     </div>
       <!-- <input type="text" name="cat" placeholder="Search" style="width:15%;font-size:15px;" class=""> -->
       
        </form>
 
     </div>
  
<div style="margin-top:10px;">

<a style="color:white;" href="register.php"><button class="btn btn-success "style="margin-top:25px;margin-left:38%;width:25%;">Add</button></a>
</div> 
 
 			<div class="col-lg-12 ">
 				<h3 style="text-align:center;margin-top:10px;">Computer Record List</h3>
 				<hr>

 				<table class="data">
    <thead>
      <tr>
     

        <th>Rollno</th>
        <th>Studentname</th>
        <th>Course</th>
        <th>phoneno</th>
        <th>Address</th>
        <th>semester</th>
        <th>Section</th>
        <th>Action</th>
      
      </tr>
    </thead>
    <tbody id="tbl">
    	<?php
                 $query = "SELECT * FROM register WHERE Course='Computer'";
                 $fire = mysqli_query($con,$query) or die("cannot fetch data from data base".mysqli_error($con));
                 ///if($fire) echo "got the data from data base"; 
                 if(mysqli_num_rows($fire)>0){
                 	while($users = mysqli_fetch_assoc($fire)){ ?>
      <tr>
         <td><?php echo $users['Rollno']; ?></td>
        <td><?php echo $users['studentname']; ?></td>
        <td> <?php echo $users['Course']; ?></td>
        <td> <?php echo $users['Phoneno']; ?></td>
        <td> <?php echo $users['Address']; ?></td>
        <td> <?php echo $users['Semester']; ?></td>
        <td> <?php echo $users['Section']; ?></td>
        <td><a  href="<?php $_SERVER['PHP_SELF'] ?>?del=<?php echo $users['Id']?>" 
        	class="btn btn-sm btn-danger">DELETE</a>
           <a  href="compreg.php?upd=<?php echo $users['Id'] ?>" 
          class="btn btn-sm btn-success">UPDATE</a></td>
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
                   url:"compajax.php",
                   dataType:"text",
                   data:{sel:sel,search:search},
                   success:function(data){
                     $("#tbl").html(data);
                   }
                 });
               });
               $(document).ready(function(){
                 $("#fetchval").on('change',function(){
                   var value=$(this).val();
                   $.ajax({
                     url:"fetch.php",
                     type:"POST",
                     data:'request='+value,
                     beforesend:function()
                     {
                     $("#tbl").html("Working On...");
                     },
                    success:function(data)
                    {
                      $("#tbl").html(data);
                    }
                   });
                 });
               });
</script>

 				


 </div>
 		
 
 </body>
 </html>
	