<?php
 include("connection.php");
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
  </head>
  <body style="background-color:#7FFF00">
    <div id="header">
    <h2 style="padding: 10px"><font face="Cooper">The Readers plan</font></h2>
    </div>
    <div  id="nav">
     <ul>
       <li><a href="index.php">Home</a></li>
       <li><a href="trb.php">Top rated Books</a></li>
       <li><a href="block.php">Block</a></li>
       <li><a href="contact.php">Contact us</a></li>
       <li><a href="about.php">About us</a></li>
       <li><a href="help.php">Help</a></li>
     </ul>
    </div>
    <div id="container">

    <div id="left"><br><br><br>
      <center>
        <img src="img/banner.jpg" width="300">
      </center><br>
      <h1 style="color: red;margin-left: 50px" >Biography Books</h1>
      <?php
        $c="Biography";
        $q= "select * from book where cat like '%$c%'";
        $run=mysqli_query($link,$q);
        while($row=mysqli_fetch_array($run))
        {
          $id=$row['id'];
          $name=$row['name'];
          $price=$row['price'];
          $img=$row['img'];

        ?>


          <?php
         echo "<a href='p.php?id=$id'><img src='im/$img'></a>"
        ?>
       </center>

       <?php
       }
        ?>
    </div>
    <div id="right">
    <h1 style ="color: red">Category</h1><br><br>
  <a href="rom.php" > <B>Romantic </B></a><br><br><br><br>
  <a href="bio.php" >  <B>Biography</B> </a> <br><br><br><br>
    <a href="dit.php" ><B>Ditective</B></a>  <br><br><br><br>
    <a href="sus.php" ><b>suspense</b> </a>
    </div>
  </div>
    <div id="footer"><br><br><br><br>

      <h3 style ="color:red;margin-top: 300px" align ="right">My project HD</h3>
    </div>
  </body>
</html>
