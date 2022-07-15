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
  
      </style>
</head>
<body>
  <div style="height:97px;"class=" fluid-container bg-dark">
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
</nav>
 <div class="container-fluid "style="margin-top:5px;" >
    <div class="row">
      <div class="col-lg-12 col-md-8col-md-6 col-sm-4">
        <!-- data here--> 
      
       <div class="col-lg-12 col-md-8 col-md-6 col-sm-4 ">
           </div></div></div>
       </div>
       <br />
       <div class="container" >
    <div class="row">
      <div class="col-lg-12 col-md-8col-md-6 col-sm-4">
        <!-- data here--> 
      <div class="col-lg-12 col-md-8 col-md-6 col-sm-4 ">
         <form name="signup" id="signup" action="techdata.php" method="post" >
          <div class="form-group bg-secondary">
            <h2 style="text-align:center; color:white;">Teacher Register</h2>
           <hr>
         </div>
         <div class="form-group">
            <label for="fullname"> Fullname</label>

            <input name="fullname" required="required" id="fullname" type="text" class="form-control" placeholder="fullname" />  
          </div>
          

          <div class="form-group">
            <label for="address"> Address</label>

            <input name="address" required="required" id="address" type="text" class="form-control" placeholder="address" /> 
          </div>
          <div class="form-group">
            <label for="contact"> Contact</label>

            <input name="contact" required="required" id="contact" type="text" class="form-control" placeholder="contact" /> 
          </div>
          <div class="form-group">
            <label for="email"> Email</label>

            <input name="email" required="required" id="email" type="text" class="form-control" placeholder="email" />  
          </div>
          <div class="form-group">
            <label for="faculty">Faculty</label>
            <select name="Faculty" style="width:100%;padding:5px;">
              <option value="BCA">BCA</option>
              <option value="Civil">Civil</option>
              <option value="Computer">Computer</option>
              <option value="Electrical">Electrical</option>

            </select>
          </div>
         
          <div class="form-group">
            

            <button name="register" id="register" class="btn btn-secondary btn-block">Register</button>
          </div>
          
          
        </form>
         </div> 
      </div>
    </div>  
  </div>

</body>
</html>