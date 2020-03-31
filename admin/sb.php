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
      <h1>Sell Book List</h1>
     <center>
        <table border="1" align="center">
          <tr>
            <td width="200" height="50">Book Name</td>
              <td width="200" height="50">Book id</td>
                <td width="200" height="50">Name</td>
                  <td width="200" height="50">Address</td>
                    <td width="200" height="50">city</td>
                      <td width="200" height="50">email</td>
                        <td width="200" height="50">mobile no.</td>
                          <td width="200" height="50">Pin code</td>
          </tr>
          <?php
           $q= "select * from sell";
           $run=mysqli_query($link,$q);
           while($row=mysqli_fetch_array($run))
           {
             $bname=$row['bname'];
             $bid=$row['bid'];
             $name1=$row['name1'];
             $add1=$row['add1'];
             $city=$row['city'];
             $mno=$row['mno'];
             $email=$row['email'];
             $pin=$row['pin'];

           ?>
           <tr>
             <td width="200" height="50"><center><?php echo $bname?> </center></td>
                <td width="200" height="50"><center><?php echo $bid ?></center></td>
                    <td width="200" height="50"><center><?php echo $name1?> </center></td>
                     <td width="200" height="50"><center><?php echo $add1?> </center></td>
                      <td width="200" height="50"><center><?php echo $city ?> </center></td>
                       <td width="200" height="50"><center><?php echo $mno ?> </center></td>
                        <td width="200" height="50"><center><?php echo $email ?> </center></td>
                         <td width="200" height="50"><center><?php echo $pin ?> </center></td>
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
