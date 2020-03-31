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
       <li><a href="ahome.php">Home</a></li>
       <li><a href="ib.php">Insert Books</a></li>
       <li><a href="bl.php">Book List</a></li>
       <li><a href="sb.php">Sell Books</a></li>
       <li><a href="b.php">Block</a></li>
       <li><a href="help.php">Help</a></li>

     </ul>
    </div>
    <div id="container"><br><br>
      <h1>Book List</h1>
     <center>
        <table border="1" align="center">
          <tr>
            <td width="200" height="50">Name</td>
              <td width="200" height="50">Price</td>
                <td width="200" height="50">Cat</td>
          </tr>
          <?php
           $q= "select * from book";
           $run=mysqli_query($link,$q);
           while($row=mysqli_fetch_array($run))
           {
             $name=$row['name'];
             $price=$row['price'];
             $cat=$row['cat'];
           ?>
           <tr>
             <td width="200" height="50"><center><?php echo $name?> </center></td>
                <td width="200" height="50"><center><?php echo $price ?></center></td>
                    <td width="200" height="50"><center><?php echo $cat?> </center></td>
           </tr>
          <?php
         }
            ?>
        </table>
     </center>
   </div>
    <div id="footer"><br><br><br><br>

      <h3 style ="color:red;margin-top: 300px" align ="right">My project HD</h3>
    </div>
  </body>
</html>
