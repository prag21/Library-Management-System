<?php
 include "connection.php";
 include "navbar.php";

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	 <title>Books</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
 	 <style type="text/css">
 	 	.srch
 	 	{
 	 		padding-left: 1000px;
 	 	}
    body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
  background-color: #024629;
}

.sidenav {
  height: 100%;
  margin-top: 50px;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #222;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.h:hover
 {
  color: white;
  width: 300px;
  height: 50px;
  background-color: #00544c;
 }
 .book
 {
 width: 400px;
 margin: 0px auto;
 height: 30px;


 }
 .form-control
 {
   background-color: #080707;
   color: white;


 }

 	 </style>
 
 
 	</head>
 	<body>

     <!--                               side nav________________________________________-->
     <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
  
 <div> <a href="profile.php"> Profile</a></div>
 <div> <a href="add.php">Add Books</a></div>
 <div> <a href="request.php">Book Request</a></div>
  <div> <a href="issue_info.php">Issue Information</a></div>
  <div> <a href="expired.php">Expired List</a></div>
  


</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer; color: black;" onclick="openNav()">&#9776; open</span>
<div class="container" style="text-align: center;">
  
 <h2 style="color:black; font-family: Lucida Console; text-align:  center;" ><b> Add New Books</b></h2>
 <form class="book" action="" method="post"  0>
   <input type="text" name="bid" class="form-control" placeholder="Book Id" required=""><br>
     <input type="text" name="name" class="form-control" placeholder="Book Name" required=""><br>
       <input type="text" name="authors" class="form-control" placeholder="Authors Name" required=""><br>
         <input type="text" name="edition" class="form-control" placeholder="Edition" required=""><br>
           <input type="text" name="status" class="form-control" placeholder="Status" required=""><br>
             <input type="text" name="quantity" class="form-control" placeholder="Quantity" required=""><br>
               <input type="text" name="department" class="form-control" placeholder="Department" required=""><br>
   

<button class="btn btn-default" type="submit" name="submit">ADD</button>





 </form>




</div>
 <?php
          if(isset($_POST['submit']))
          {
            if(isset($_SESSION['login_user']))
            {
              mysqli_query($db,"INSERT INTO books VALUES ('$_POST[bid]','$_POST[name]','$_POST[authors]','$_POST[edition]','$_POST[status]','$_POST[quantity]','$_POST[department]') ;");
              ?>
                 <script type="text/javascript">
                   alert("Books Added Successfully.");
                 </script>


              <?php
            }
            else
            {
              ?>
              <script type="text/javascript">
                alert("You need to login first.");
              </script>
              <?php
            }
          }
    




 ?>



</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = " #024629";
}
</script>

</body>
</html>