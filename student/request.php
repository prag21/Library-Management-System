<?php
   include "connection.php";
   include "navbar.php";
 ?>
  <!DOCTYPE html>
  <html>
  <head>
  	 <title>Book Request</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
   <style type="text/css">
    .srch
    {
      padding-left: 1000px;
    }
    body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
   background-image: url("images/5.jpg");
  background-size: cover;
}

.sidenav {
  height: 100%;
  margin-top:  50px;
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
   </style>
  	</head>
  	<body>
       <!--_____________________________________ sidenav_________________________________________--->
    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
  <a href="profile.php">Profile</a>
  <a href="books.php">Books</a>
  <a href="request.php">Book Request</a>

  
</div>

<div id="main">
 
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
<?php
   if(isset($_SESSION['login_user']))
           {
               $q=mysqli_query($db,"SELECT * from issue_book where username='$_SESSION[login_user]' ;"); 
               if(mysqli_num_rows($q)==0)
               {
                     echo "There's no pending request.";
               }
               else
               {
                      echo "<table class='table table-bordered table-hover' >";
      echo "<tr style='background-color: #43dac5;'>";
      //Table header
       
        echo "<th>"; echo "Book-ID"; echo "</th>";
        echo "<th>"; echo "Approve status"; echo "</th>";
        echo "<th>"; echo "Issue date"; echo "</th>";
        echo "<th>"; echo "Return date"; echo "</th>";
       
      echo "</tr>";
        
        while($row=mysqli_fetch_assoc($q))
        {
          echo "<tr>";
          echo "<td>"; echo $row['bid']; echo "</td>";
          echo "<td>"; echo $row['approve']; echo "</td>";
          echo "<td>"; echo $row['issue'] ; echo "</td>";
          echo "<td>"; echo $row['return']; echo "</td>";
       
          echo "</tr>";
        }
          echo "</table>";
               } 
           }

else
{
echo "</br></br></br>";
echo "<h2><b>";
echo "Please login first to see the request information.";
echo "</b></h2>";
}
?>

  	</body>
  	</html>