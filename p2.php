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
   <div id="left"><br><br><br>
       <center>
         <img src="img/banner.jpg" width="300">
       </center><br>
    
      <?php
         $c=$_GET['id'];
         $q="select * from book where id like '%$c%'";
         $run=mysqli_query($link,$q);
         $row= mysqli_fetch_array($run);
         $id=$row['id'];
         $bname=$row['name'];
         $price=$row['price'];
         $img=$row['img'];
       ?>
           <?php
          echo "<a href='p.php?id=$id'><img src='im/$img'></a>";
         ?><br>
        <h3 ><font color="red">Name: </font><?php echo $bname ?><br><font color="red">price: </font><?php echo $price ?></h3>
        <form action="" method="post">
        <table>
          <tr>
            <td width="200px" height="50">Name</td>
              <td width="200px" height="50"><input type="text" name="name" placeholder="Enter Name" title="Enter Name"></td>

          </tr>
          <tr>
            <td width="200px" height="50">Address</td>
              <td width="200px" height="50"><input type="text" name="add" placeholder="Enter address" title="Enter address"></td>

          </tr>
          <tr>
            <td width="200px" height="50">City</td>
              <td width="200px" height="50"><input type="text" name="city" placeholder="Enter city" title="Enter city"></td>

          </tr>
          <tr>
            <td width="200px" height="50">mobile no.</td>
              <td width="200px" height="50"><input type="text" name="mno" placeholder="Enter mobile no." title="Enter mobile no."></td>

          </tr>
          <tr>
            <td width="200px" height="50">E-mail</td>
              <td width="200px" height="50"><input type="text" name="email" placeholder="Enter E-mail" title="Enter E-mail"></td>

          </tr>
          <tr>
            <td width="200px" height="50">Pincode</td>
              <td width="200px" height="50"><input type="text" name="pcode" placeholder="Enter pcode" title="Enter pcode"></td>

          </tr>
          <tr>

                <td width="200px" height="50"><input type="submit" name="sub" value="Buy Now" style="width: 100px;height:50px;padding:5px;background-color:red;border-radius:10px;"></td>
          </tr>
        </table>
            </form>
            <?php
            if(isset($_POST['sub']))
            {
              $name1=$_POST['name'];
              $add1=$_POST['add'];
              $city=$_POST['city'];
              $mno=$_POST['mno'];
              $email=$_POST['email'];
              $pcode=$_POST['pcode'];
              if(mysqli_query($link,"insert into sell (bname,bid,name1,add1,city,mno,email,pin) value ('$bname','$id','$name1','$add1','$city','$mno','$email','$pcode')"))
              {
                mysqli_query($link,"delete from book where id=$id");
                echo "<script>alert('DATE INSERT')</script>";
              }
              else {
                echo "<script>alert('DATE NOT INSERT')</script>";
              }
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
    <div id="footer"><br><br><br><br><br><br><br><br>

      <h3 style ="color:red;margin-top: 300px" align ="right">My project HD</h3>
    </div>
  </body>
</html>
