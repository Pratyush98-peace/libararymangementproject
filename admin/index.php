<?php
 include("connection.php");
 ?>
<!DOCTYPE html>
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
      <h1 style="color: red;padding:10px;">Admin login</h1>
     <center>
       <form  action="" method="POST">
       <table>
         <tr>
           <td width="200" height="50">Username</td>
           <td width="200" height="50"><input type="text" name="un" placeholder="Enter UserName"></td>
         </tr>
         <tr>
           <td width="200" height="50">Password</td>
           <td width="200" height="50"><input type="Password" name="ps" placeholder="Enter Password"></td>
         </tr>
         <tr>
           <td><input type="submit" name="sub" value="login"></td>
         </tr>
       </table>
        </form>
        <?php
         if(isset($_POST['sub']))
          {
            $un=$_POST['un'];
            $ps=$_POST['ps'];
            $q= "select * from admin";
            $run=mysqli_query($link,$q);
            $row=mysqli_fetch_assoc($run);
            $u= $row['us'];
            $p= $row['ps'];
            if($un==$u && $ps=$p)
            {
              header("Location:ahome.php");
            }
            else {
              header("Location:index.php?wrong user");
            }
          }

         ?>
     </center>
   </div>
    <div id="footer"><br><br><br><br>

      <h3 style ="color:red;margin-top: 300px" align ="right">My project HD</h3>
    </div>
  </body>
</html>
