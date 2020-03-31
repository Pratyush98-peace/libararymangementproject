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
     <center>
       <form action="" method="post" enctype="multipart/form-data">
      <table>
        <tr>
          <td width ="200px" height="50px">Enter Book Name</td>
          <td width ="200px" height="50px"><input type="text" name="bname" placeholder="enter book name"></td>
        </tr>
        <tr>
          <td width ="200px" height="50px">Enter Book Price</td>
          <td width ="200px" height="50px"><input type="text" name="price" placeholder="enter book Price"></td>
        </tr>
        <tr>
          <td width ="200px" height="50px">Enter Book category</td>
          <td width ="200px" height="50px">
            <select  name="cat">
              <option>.....select.....</option>
              <option>Romantic</option>
                <option>Biography</option>
                  <option>Ditective</option>
                    <option>Suspense</option>

            </select>


          </td>
        </tr>
        <tr>
          <td width ="200px" height="50px">Enter Book Image</td>
          <td width ="200px" height="50px"><input type="file" name="img"></td>
        </tr>
        <tr>
          <td ><input type="submit" name="sub" value="Save"></td>
        </tr>
      </table>
    </form>
    <?php
       if(isset($_POST['sub']))
       {
         $name= $_POST['bname'];
         $price= $_POST['price'];
         $cat= $_POST['cat'];
         $image= $_FILES['img']['name'];
         $image_tmp= $_FILES['img']['tmp_name'];
         move_uploaded_file($image_tmp,"../im/$image");
         $query="insert into book(name,cat,price,img) values('$name','$cat','$price','$image')";
         if(mysqli_query($link,$query))
         {
           echo "<script>alert('DATA INSERTED')</script>";
         }
         else {
           echo "<script>alert('DATA NOT INSERTED')</script>";
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
