<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <style>
       .logo 
{
  height: 45px ;
  width: 45px; 
  margin: 10px 25px; 
}
        a:hover
        {
        color:red;
        text-decoration: overline;

        }
        .secondary
        {
            display:none;
        }
        li:hover>.secondary>li
        {
            margin-left:-10px;
            dispaly:block;
        }
        </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="nav-link nav-item navbar-nav mr-auto text-light" style="font-size: 22px;" href="techerreg.php"><img src="image\b.png" class="logo">Online Attendence System</a>
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav ml-auto mt-4 mb-2 pr-4 mt-lg-0  mr-5">
        
      <li class="nav-item">
        <form action="teach.php" method="post"><button name="logout" id="logout" class="btn btn-danger btn-block">Log Out</button></form>
              
      </li>
      </ul>
      </div>
      </nav>
       <div class="container " >
    <div class="row">
      <div class="col-lg-12 col-md-8 col-sm-4">
        <!-- data here--> 
      
       <div class="col-lg-12 col-md-8  col-sm-4 ">
        
        <form name="signup" id="signup" action="teach.php" method="post" >
          <div class="form-group dark">
            <h2 style="text-align:center;color:white;background-color:grey;margin-top:140px;padding:5px;">Teacher Attendance</h2>
           <hr>

            
          </div>
          <div class="form-group">
             <label for="subjectname"> Subjectname:</label>

            <input name="subjectname" required="required" id="subjectname" type="text" class="form-control" placeholder="subjectname" />  
          </div>

          <div class="form-group">
            <label for="topic"> Topic</label>

            <input name="topic" required="required" id="topic" type="text" class="form-control" placeholder="topic" /> 
          </div>

          
           
          <div class="form-group">
            <label for="Course">Course</label>
            <select name="Course">
              <option value="BCA">BCA</option>
              <option value="Civil">Civil</option>
              <option value="Computer">Computer</option>
              <option value="Computer">Electrical</option>

            </select>

            <!--<input name="Course" required="required" id="Course" type="text" class="form-control" placeholder="Course" /> --> 
         
            <label for="period"> Period</label>

            <select name="period"  >
  
       <?php 
      for($i=1;$i<9;$i++){
      ?>
      <option  value="<?php echo $i ?>"><?php echo $i ?></option>
      <!--<option value="2017">2017</option>-->

        <?php }?>
    </select>
          


            <label for="Semester">Semester</label>

            <select name="Semester" >
  
       <?php 
      for($i=1;$i<9;$i++){
      ?>
      <option  value="<?php echo $i ?>"><?php echo $i ?></option>
      <!--<option value="2017">2017</option>-->

        <?php }?>
    </select>


 
            <label for="Section">Section</label>

            <input name="Section"  id="Section" type="text"  placeholder="optional" />  
          </div>

          <div class="form-group">
            

            <button name="submit" id="submit" class="btn btn-dark btn-block">Submit</button>
          </div>
          
          
        </form>
         </div> 
      </div>
    </div>  
  </div>

</body>
</html>