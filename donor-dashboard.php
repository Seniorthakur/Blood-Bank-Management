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
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
   <link rel="stylesheet" href="assets/css/dashboard.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
   
   </head>
  <body>
  <?php 
 $user=$_SESSION['username'];

if(!$user)
{
  header("Location:donorlogin.php");
}
?>
    <div class="container">
      <div class="navigation">
        <ul>
          <li>
            <a href="#">
              <span class="icon"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
              <span class="title"><h3>Blood Management System</h3></span>
            </a>
          </li>
          <li id="dashboard">
             <a href="#">
              <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
              <span class="title">Donor Dashboard</span>
            </a>
          </li>
          <li id="donar">
            <a href="#">
            <span class="icon"><i class="fa fa-address-book" aria-hidden="true"></i></i></span>
            <span class="title">Donar</span>
            </a>
          </li>
          <li>
            <a href="#">
            <span class="icon"><i class="fa fa-address-book-o" aria-hidden="true"></i></i></i></span>
            <span class="title">Receiver</span>
            </a>
          </li>
          <li>
            <a href="#">
            <span class="icon"><i class="fa fa-rss" aria-hidden="true"></i></i></span>
            <span class="title">Feed Back</span>
            </a>
          </li>
          <li>
            <a href="./logout.php">
            <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
            <span class="title">logout</span>
            </a>
          </li>
        </ul>
      </div>
   
    <div class="main">
       <div class="topbar">
         <div class="toggle" onclick="toggleMenu();"></div>
           <div class="search">
             <label>
               <input type="text" placeholder="search here">
               <i class="fa fa-search" aria-hidden="true"></i>
             </label>
          </div>
             <div class="user">
               <img src="assets/img/admin.png">
             </div>
       </div>
       <div id="title" class="cardtitle">
            <label>
              Blood Dashboard
            </label>
        </div>
       <div class="cardbox" id="cardbox">
        <div class="card">
          <div>
            <div class="number">1,045</div>
            <div class="cardName">O+</div>
          </div>
          <div class="iconbox">
            <img src="assets/img/0p.png">
          </div>
        </div>
        <div class="card">
          <div>
            <div class="number">1,045</div>
            <div class="cardName">A+</div>
          </div>
          <div class="iconbox">
            <img src="assets/img/ap.png">
          </div>
        </div>
        <div class="card">
          <div>
            <div class="number">1,045</div>
            <div class="cardName">B+</div>
          </div>
          <div class="iconbox">
            <img src="assets/img/bp.png">
          </div>
        </div>
        <div class="card">
          <div>
            <div class="number">1,045</div>
            <div class="cardName">AB+</div>
          </div>
          <div class="iconbox">
            <img src="assets/img/abp.png">
          </div>
        </div>
        <div class="card">
          <div>
            <div class="number">1,045</div>
            <div class="cardName">O-</div>
          </div>
          <div class="iconbox">
            <img src="assets/img/0n.png">
          </div>
        </div>
        <div class="card">
          <div>
            <div class="number">1,045</div>
            <div class="cardName">A-</div>
          </div>
          <div class="iconbox">
            <img src="assets/img/an.png">
          </div>
        </div>
        <div class="card">
          <div>
            <div class="number">1,045</div>
            <div class="cardName">B-</div>
          </div>
          <div class="iconbox">
            <img src="assets/img/bn.png">
          </div>
        </div>
        <div class="card">
          <div>
            <div class="number">1,045</div>
            <div class="cardName">AB-</div>
          </div>
          <div class="iconbox">
            <img src="assets/img/abn.png">
          </div>
        </div>
      </div>
      <div class="donorlist" id="donorlist"></div>
    </div>
  </div>
    <script>
      function toggleMenu(){
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');
        toggle.classList.toggle('active');
        navigation.classList.toggle('active');
        main.classList.toggle('active');

      }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function() {
        $('#donar').on('click', function () {
          $('#cardbox').hide(function () {
            $('#donorlist').show(1000);
          });
        });
        $('#donar').on('click', function () {
          $('#title').hide(1000);
        });
        $('#dashboard').on('click', function () {
          $('#donorlist').hide( 1000, function () {
            $('#cardbox').show(1000);
          });
        });
        $('#dashboard').on('click', function () {
          $('#title').show(1000);
        });
      });
    </script>
  </body>
</html>