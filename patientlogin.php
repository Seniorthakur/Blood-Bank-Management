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
    <title>Patient Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
   <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
      <div class="center">
        <label for="title" class="title">Patient Login</label>
       <br/>
       </div> 
    <div class="space"></div>
    <form action="" method="post">
    <label for="username">username</label>
    <input type="text" id="fname" name="username" placeholder="username" required>
    <label for="password">password</label>
    <input type="password" id="password" name="password" placeholder="Enter your password"required><br/>
    <input type="submit" value="Login" name="login">
  </form>
  <br/>
  <a href="./patientform.php" style="text-decoration:none"><p><div class="error"><span>Don't Have Account ?</span></p></div></a>
  <div class="center">
  
  <?php
  if(isset($_POST['login']))
  {
     $user=$_POST['username'];
     $password=$_POST['password'];
     $q=$db->prepare( "SELECT * FROM receiver where user='$user' && pass='$password'");
     $q->execute();
     $res=$q->fetchAll(PDO::FETCH_OBJ);
     if($res)
     {
      $_SESSION['username']=$user; 
       header("Location:patient-dashboard.php");
     }
     else
     {
       echo "<script>alert('Username/Password incorrect')</script>";
     }
  }

?>
<br/>
    <p>@ Blood Management System | <strong>2021</strong></p>
    <hr>
    <p style="color:rgb(124, 124, 124);" ><strong>BIM 4<sup>th </sup>Sem</strong> | Himalaya Darshan College </p>
    </div>
  </body>
</html>