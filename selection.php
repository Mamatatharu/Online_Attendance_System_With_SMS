<!DOCTYPE html>
<html>
<head>
	<title>selector</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
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
    .error{
        color:red;
    }
    </style>
<body>
<h1 style="text-align:center;border:1px solid black;background-color:teal;color:white;padding:5px;">Attendance Form</h1>
	<form id="registerform" action="" style="margin-top:-5px;font-size:18px;border:2px solid black;height:260px;width:100%;background-color:cadetblue;color:black;">
	   
	<div style="float:right; margin-top:5px; margin-right:15px;">    
               <b> Date:</b>
                <input  id="date" class="float-" type="date">
            </div>
            <div class="text-center" style=" padding-top:60px; ">
				<b>Lecturer:</b>
                <input id="lecturer" style="margin-bottom:15px;"  type="name" name=" lecturer" placeholder="enter your name">
				<b>Subject:</b>
				<input  id="subject" style="margin-bottom:15px;" type="text" name="title" placeholder="subject name">
                <!-- <pre>     </pre> -->
				<b>Topic:</b>
				<input  id="topic" style="margin-bottom:15px;" type="text" name="subject" placeholder="topic discuss">
			</div>
				<div class="text-center" style="margin-top:10px;">
				<b>Semester:</b>
				<select  >
					<option>Select Semester</option>
					<option>1 sem</option>
					<option>2 sem</option>
					<option>3 sem</option>
					<option>4 sem</option>
					<option>5 sem</option>
					<option>6 sem</option>
					<option>7 sem</option>
					<option>8 sem</option>

				</select>

				<b>Period:</b>
				<select >
					<option>select peroid</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
				</select>
				</div>
				<div class="mt-2 float-right" style="margin-right:15px;"><button type ="submit">Take Attendence</button></div>
	</form>
	  <script>
   $("#registerform").on('submit',function(e)
   {
       e.preventDefault();
       $('span.error').remove();
    var date,lecturer,subject,topic;
        date=$("#date").val();
        lecturer=$("#lecturer").val();
        subject=$("#subject").val();
        topic=$("#topic").val();
       
if(date==="" )
{
    $("#date").after(`<span class="error ">date is required </span>`);
}
if(lecturer==="" )
{
    $("#lecturer").after(`<span class="error ">name is required </span>`);
}
if(subject==="" )
{
    $("#subject").after(`<span class="error">subject is required </span>`);
}
if(topic==="" )
{
    $("#topic").after(`<span class="error">topic is required </span>`);
}

})
  

    
    </script> 
    <div class="col-md-6">
            <div class="row m-0 p-0">
                <table id="data" class="table col-md-12 p-0 ml-n2 table-bordered">
                        <tr class="row p-0 m-0">
                             <th class="col-md-3">StudentName</th>
                             <th class="col-md-3">RollNo</th>
                             <th class="col-md-3"></th>
                         </tr>    
                </table>
            </div>
        </div>
</body>
</html>