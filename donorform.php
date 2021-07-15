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
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Donar - Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css">

  </head>
  <body>
    <div class="center">
    <!-- <label for="title" class="title">Donar Form</label> -->
    <img src="assets/img/b1.png" >
    <br/>
    </div> 
    <div class="space"></div>
    
    <p><div class="error"><span>* required field</span></p></div>
    <form action="" method="post"> 
    <label for="branch">Branch</label> <span class="error">* </span>       
    <select id="branch" name="branch">
      <option value="Biratnagar">Biratnagar</option>
      <option value="Duhabi">Duhabi</option>
      <option value="Itahari">Itahari</option>
      <option value="Kathmandu">Kathmandu</option>
    </select>
    <label for="fname">Full Name</label> <span class="error">* </span>
    <input type="text" id="fname" name="fname" placeholder="Your name.." required>
    <label for="fname">Age</label> <span class="error">* </span>
    <input type="number" id="age" name="age" placeholder="you current age"required><br/>
    <label for="email">Email:</label> <span class="error">* </span>
    <input type="email" id="email" name="email" placeholder="Enter your email"required> <br/>
    <label for="phone-778f">Phone</label> <span class="error">* </span>
    <input type="text" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter your phone (e.g. +977 9800 00  00)" id="phone-778f" name="phone" required>
    <label for="country">Blood Group</label> <span class="error">* </span>       
    <select id="bloodgroup" name="bloodg">
      <option value="O+">O+ Ve </option>
      <option value="O-">O- Ve </option>
      <option value="A+">A+ Ve </option>
      <option value="A-">A- Ve </option>
      <option value="B+">B+ Ve </option>
      <option value="B-">B- Ve </option>
      <option value="AB+">AB+ Ve </option>
      <option value="AB-">AB- Ve </option>
    </select>
   
    <label for="address">Address</label> <span class="error">* </span>
    <input type="text" placeholder="Enter your address" name="addres" required>
    <label for="country">Gender</label> <span class="error">* </span>       
    <select id="gender" name="gender">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Other">Other</option>
    </select><br/>
   <input type="checkbox" class="checkbox">
   <label for="disease" class="disease">If don't have any Sexually  transmitted  disease , long term diseases , pernament medicine taker</label> <span class="error">* </span>
   <br/><input type="checkbox" class="checkbox"><label for="Other disease">If other disease</label>
     <input type="text" placeholder="if you have other disease please write"  class="disease" name="disease">
     <input type="checkbox" class="checkbox">
   <label for="disease" class="disease">Yes, i agree all <a href="assets/files/TermandConditions.pdf"  style="text-decoration:none">Terms & Condition.</a></label> <span class="error">* </span>
    <input type="submit" value="Submit" name="submit">
  </form>
  <?php

  if(isset($_POST['submit']))
  {
    $today=date("Y-m-d");
    $branch=$_POST['branch'];
    $fname=$_POST['fname'];
    $age=$_POST["age"];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $bloodg=$_POST['bloodg'];
    $addres=$_POST['addres'];
    $gender=$_POST['gender'];
    $q=$db->prepare("INSERT INTO donor_reg (today,branch,fname,age,email,phone,bloodg,addres,gender) VALUES 
           (:today,:branch,:fname,:age,:email,:phone,:bloodg,:addres,:gender)");
           $q->bindValue('today',$today);
           $q->bindValue('branch',$branch);
           $q->bindValue('fname',$fname);
           $q->bindValue('age',$age);
           $q->bindValue('email',$email);
           $q->bindValue('phone',$phone);
           $q->bindValue('bloodg',$bloodg);
           $q->bindValue('addres',$addres);
           $q->bindValue('gender',$gender);
           if(
             $q->execute())
             {
               echo "<script>alert('Donar Registration Successfull')</script>";
            
              }
              else
              {
              echo "<script>alert('Donar Registration Failed')</script>";
              }

  }
       
       
  ?>



  <br/>
  <a href="./donorlogin.php" style="text-decoration:none"><p><div class="error"><span>Do Have Account ?</span></p></div></a><br/>
  <button type="button" class="button" onclick="window.location.href='./patientForm.php'"><span>Receiver Form</span></button>

  <div class="footer">
  <div class="center">
<p>@ Blood Management System | <strong>2021</strong></p>
<hr>
<p style="color:rgb(124, 124, 124);" ><strong>BIM 4<sup>th </sup>Sem</strong> | Himalaya Darshan College </p>
</div>
</div>
  </body>
</html>