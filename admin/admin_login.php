<?php
   include "connection.php";
   include "navbar.php";
  

?>
    <!DOCTYPE html>
<html>
<head>
  <title> Admin login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewpoint" content="width=device-width,initial-scale=1">

  
    <style type="text/css">
      section
      {
        margin-top: -10px;
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
        <li><a href="books.php">BOOKS</a></li>
        
        <li><a href="feedback.php">FEEDBACK</a></li>
        </ul>
           <ul class="nav navbar-nav navbar-right">

        <li><a href="student_login.php"><span class="glyphicon glyphicon-log-in "> LOGIN</span></a></li>
        <li><a href="student_login.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
                <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
       </ul>
  </div>
</nav>
-->
<section>
  <div class="log_img">
    <br><br><br><br>
    <div class="teacher">
      
      <h3 style="color: white; font-size: 30px; text-align: center;"> &nbsp &nbsp LIBRARY MANAGMENT SYSTEM</h3><br>
      <h3 style="color: white; font-size: 20px; text-align: center;">User LoginForm</h3><br>
      <form name="login" action="" method="post">
        <br><br><br>
        <div class="login">
         <input class="form-control" type="text" name="username" placeholder="username" required=""> <br><br>
         <input class="form-control" type="password" name="password" placeholder="password" required=""><br><br>
         <input class="btn btn-default" type="submit" name="submit" value="Login" style="color:black; width:70px;"></div>
      
      <p style="color:white; padding-left: 15px;">
        <br><br>
        <a style="color:white; font-size: 20px;" href="update_password.php"> &nbsp &nbsp &nbsp forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        New to this website?<a style="color:white; font-size:20px;" href="registration.html">Sign Up</a>
      </p>
        </form>
    </div>
    
  </div>
</section>
  <?php
    if(isset($_POST['submit']))
    {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]';");

      $row=mysqli_fetch_assoc($res);


      $count=mysqli_num_rows($res);

       if($count==0)
      {
        ?>
        <!--
        <script type="text/javascript">
          alert("The username and password doesn't match..")
        </script>
        -->
         
         <div class="alert alert-danger" style="width: 700px;margin-left: 360px">
          <strong> 
               The username and password doesn't match..       
          </strong>
               
         </div> 
        <?php
      } 
       else
       {
        /*------------ if username and password matches----------*/
        $_SESSION['login_user'] = $_POST['username'];
        $_SESSION['pic']=$row['pic'];

         ?>
            <script type="text/javascript">  
                window.location="index.php"
            </script>


         <?php
       }
    }





   ?>

</body>
</html>