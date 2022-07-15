 <?php 
  define("HOSTNAME","localhost");
      define("USERNAME","root");
   define("PASSWORD","");
     define("DBNAME","online");
   $con=mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME) or die('cannot connect:'.mysqli_connect_error());



 ?>
	