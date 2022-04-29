<?php
  include "connection.php";
  include "navbar.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>student registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">


<style type="text/css">
    section
    	{
    		margin-top: -15px;
    	}
    </style>
</head>
<body>
<!--
<nav class="navbar navbar-inverse">	
	<div class="container-fluid">
    <div class="navbar-header">
	     <img src="C:\Users\Tapasvy srivatsa\Desktop">
	     <a class="navbar-brand active">ONLINE LIBRARY MANAGMENT SYSTEM</a>
    </div>
	    <ul class="nav navbar-nav">
				<li><a href="index.php">HOME</a></li>
				<li><a href="">books.php</a></li>
				
				<li><a href="">feedback.php</a></li>
        </ul>
           <ul class="nav navbar-nav navbar-right">

				<li><a href="student_login.html"><span class="glyphicon glyphicon-log-in "> LOGIN</span></a></li>
				<li><a href="student_login.html"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
                <li><a href="registration.html"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
		   </ul>
	</div>
</nav>
-->
</head>
<body>

<section>
	<div class="reg_img">
		<br><br><br><br><br>
		<div class="box2">
			<h3 style="color: white; font-size: 30px; text-align: center;"> &nbsp &nbsp &nbsp &nbsp &nbsp   LIBRARY MANAGMENT SYSTEM</h3><br>
			<h3 style="color: white; font-size: 20px; text-align: center;">User LoginForm</h3><br>
			<form name="Registration" action="" method="post">
				<br>
				<div class="login">
					<input class="form-control" type="text" name="first" placeholder="First Name" required=""> <br>
					<input class="form-control" type="text" name="last" placeholder="Last Name" required=""> <br>
					<input class="form-control" type="text" name="username" placeholder="Username" required=""><br>
			        <input class="form-control" type="password" name="password" placeholder="password" required=""><br>
			        <input class="form-control" type="text" name="roll" placeholder="Roll No" required=""><br>
			        <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
			        <input class="form-control" type="text" name="contact" placeholder="Contact No" required=""><br>
			   <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color:black; width:80px;"></div>
			</form>
			
		</div>
		
	</div>
</section>

<?php
  
   if(isset($_POST['submit']))
   {
   	$count=0;
   	$sql="SELECT username from `student`";
    $res=mysqli_query($db,$sql);

    while($row=mysqli_fetch_assoc($res))
    {
    	if($row['username']==$_POST['username'])
    	{
    		$count=$count+1;
    	}
    }
    if($count==0)

     {mysqli_query($db,"INSERT INTO `STUDENT` VALUES('$_POST[first]','$_POST[last]','$_POST[username]','$_POST[password]','$_POST[roll]','$_POST[email]','$_POST[contact]','4.jpg');");

   
?>

 <script type="text/javascript">
 	alert("Registration successful");
 </script>
<?php

}
   else
   {
   	?>
   	   <script type="text/javascript">
 	alert("The username already exist");
 </script>
 <?php
   }
   }

?>
</body>
</html>