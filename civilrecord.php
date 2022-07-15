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
 	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> <link rel="shortcut icon" type="image/jpg" href="image\b.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="dropodown.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>

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
        <ul class="secondnav">
          <li><a class="deco"href="register.php">Student</a></li>
          <li><a class="deco"href="teacherentry.php">Teacher</a></li>
          
        </ul>
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
</nav><br>
<form style="margin-top:100px; ">
  <div class="row">
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
  <div>


     </div>
       <!-- <input type="text" name="cat" placeholder="Search" style="width:15%;font-size:15px;" class=""> -->
       
        </form>
 
     </div>

<div style="margin-top:10px;">
<a style="color:white;" href="register.php"><button class="btn btn-success "style="margin-top:25px;margin-left:38%;width:25%;">Add</button></a>
</div> 
 
 			<div class="col-lg-12 ">
 				<h3 style="text-align:center;margin-top:10px;">Civil Record List</h3>
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
                 $query = "SELECT * FROM register WHERE Course='Civil'";
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
        <td><a  href="<?php $_SERVER['PHP_SELF'] ?>?del=<?php echo $users['Id'] ?>" 
        	class="btn btn-sm btn-danger">DELETE</a>
           <a  href="Civilreg.php?upd=<?php echo $users['Id'] ?>" 
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
                   url:"civilajax.php",
                   dataType:"text",
                   data:{sel:sel,search:search},
                   success:function(data){
                     $("#tbl").html(data);
                   }
                 });
               });
</script>


 				


 </div>
 		
 
 </body>
 </html>
	