<!DOCTYPE html>
<html>
<head>
	<title></title>

	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing</title>
    <link rel="shortcut icon" type="image/jpg" href="..\project\photo\B.png">
    <script src="https://kit.fontawesome.com/0b5ac7632d.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body style="background-image: url('bgimages.jpg');">

<div id="loginform " style="opacity: 0.75;">
     <div class="modal-dialog modal-md " style="margin-top:9%;">
       <div class="modal-content">
       
         <!-- Modal Header -->
         <div class="modal-header">
           <h4 class="modal-title" id="exampleModalLabel1">LOGIN</h4>
         </div>
         
         <!-- Modal body -->
         <div class="modal-body" >
         <form action="teach.php" method="post"> 
               <div class="form-group">
                   <lebel>
                         <i class="fas fa-mail-bulk"></i> EMAIL:
                   </lebel>
                   <br>
                   <input type="text" name="email" class="form-control" required>
               </div>
               <lebel>
                     <i class="fas fa-key"></i> PASSWORD:
               </lebel>
               <br>
               <input type="password" name="password" class="form-control" required >
           </div>
            <div class="modal-footer">
             <input type="submit" name="login" value="LOGIN" class="btn btn-danger">
             </div>
         </form>
       </div>
     </div>
   </div>
 </div>
<!-- ...............................body.................. -->
</body>
</html>