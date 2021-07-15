<!-- 
    -- Project Blood Management System
    -- Team Members
        - Nikita Khanal
        - Leshant Sapkota
        - Nabin Mahato
        - Sabina Magar
        - Alok Raj Thakur ( Project Leader )
-->
<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Super Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

  </head>
  <body>

      <div class="center">
        <label for="title" class="title">Super Login</label>
       <br/>
       </div> 
       <div class="space"></div>
    <form action="" method="post">
    <label for="username">username</label>
    <input type="text" id="fname" name="username" placeholder="username" required>
    <label for="password">password</label>
    <input type="password" id="password" name="password" placeholder="Enter your password"required>
    <input type="submit" value="Login" name="login">
  </form>
  <?php
  if(isset($_POST['login']))
  {
     $user=$_POST['username'];
     $password=$_POST['password'];
     $q=$db->prepare( "SELECT * FROM admin where user='$user' && pass='$password'");
     $q->execute();
     $res=$q->fetchAll(PDO::FETCH_OBJ);
     if($res)
     {
       $_SESSION['username']=$user; 
       header("Location:admin-dashboard.php");
     }
     else
     {
       echo "<script>alert('Username/Password incorrect')</script>";
     }
  }

?>
  <div class="center">
    <br/>
    <p>@ Blood Management System | <strong>2021</strong></p>
    <hr>
    <p style="color:rgb(124, 124, 124);" ><strong>BIM 4<sup>th </sup>Sem</strong> | Himalaya Darshan College </p>
    </div>

  
  </body>
</html>