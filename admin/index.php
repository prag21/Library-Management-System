<?php
       session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Online Library Managment System
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width,initial-scale=1">

     
<style type="text/css">
  nav 
  {
    float: right;
    word-spacing: 20px;
    padding: 30px;
  }
 nav li
  {
    display: inline-block;
    line-height: 70px;
  }
</style>

</head>


<body>
  <div class="wrapper">
	<header>
    
	
	<div class="logo">
    	
	     
	     <h1 style="color: white; font-size: 30px;padding: 50px;">ONLINE LIBRARY MANAGMENT SYSTEM</h1>
    </div>

    <?php
    if(isset($_SESSION['login_user']))
    {
    	?>
    	<nav>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="books.php">BOOKS</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
				<li><a href="feedback.php">FEEDBACK</a></li>
			</ul>
		</nav>
		<?php

    }
    else
    {
    	?>
    	<nav>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="books.php">BOOKS</a></li>
				<li><a href="admin_login.php">LOGIN</a></li>
				<li><a href="feedback.php">FEEDBACK</a></li>
			</ul>
		</nav>
    	






    	<?php
    }
        




    ?>






		
	
    <header> 
    <section>
    <div class="sec_img">
    	<br><br><br><br><br><br><br><br>
	  <div class="box">
	  	<br><br><br><br>
	  	<h1 style="text-align: center; font-size: 40px;"> WELCOME TO LIBRARY</h1><br><br><br>
	  	<h1 style="text-align: center; font-size: 30px;">opening time 9:30AM</h1><br>
	  	<h1 style="text-align: center; font-size: 30px;">closing time 5:00PM</h1><br>
	  </div>
	  </div>
    </section>
    <div>
    <footer>
	   <p style="color:white;text-align: center; font-size: 25px;"><br><br>
	   	 Email: libraryise@gmail.com <br><br>
	   	 mobile: 991144**
	   </p>
    </footer>
  </div>	
</body>
</html>