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
   <link rel="stylesheet" Content-Type="text/css" href="assets/css/dashboard.css">
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   </head>
  <body>
  <?php $user=$_SESSION['username'];
if(!$user)
{
  header("Location:admin.php");
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
              <span class="title">Dashboard</span>
            </a>
          </li>
          <li id="donar">
            <a href="#">
            <span class="icon"><i class="fa fa-address-book" aria-hidden="true"></i></i></span>
            <span class="title">Donar</span>
            </a>
          </li>
          <li id="patient">
            <a href="#">
            <span class="icon"><i class="fa fa-address-book-o" aria-hidden="true"></i></i></i></span>
            <span class="title">Patient Request</span>
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
          <div class="footer">
              <p>@ Blood Management System | <strong>2021</strong></p>
               <hr>
              <p ><strong>BIM 4<sup>th </sup>Sem</strong> | Himalaya Darshan College </p>
              <br/>
          </div>
      </div>
   
    <div class="main">
       <div class="topbar">
         <div class="toggle" onclick="toggleMenu();"></div>
        
          
             <div class="user">
               <img src="assets/img/admin.png">
             </div>
       </div>
       <div id="title">
         <!-- DashBoard Donor -->
       <div class="cardtitle">
            <label>
             <Strong> Donor Dashboard</Strong>
             <br/>Stock of Blood Group
            </label>
        </div>
       <div class="cardbox" id="cardbox">
        <div class="card">
          <div>
            <div class="number">
              <?php
              $q=$db->query("SELECT * FROM donor_reg WHERE bloodg='O+'");
              echo $row=$q->rowcount();
              ?>
              </div>
            <div class="cardName"><p><pre>Donor   </pre></p></div>
          </div>
          <div class="iconbox" style="text-align: right">
            <img src="assets/img/0p.png">
          </div>
        </div>
        <div class="card">
          <div>
            <div class="number">
            <?php
              $q=$db->query("SELECT * FROM donor_reg WHERE bloodg='A+'");
              echo $row=$q->rowcount();
              ?>
            </div>
            <div class="cardName"><pre>Donor   </pre></div>
          </div>
          <div class="iconbox" style="text-align: right">
            <img src="assets/img/ap.png">
          </div>
        </div>
        <div class="card">
          <div>
            <div class="number">

            <?php
              $q=$db->query("SELECT * FROM donor_reg WHERE bloodg='B+'");
              echo $row=$q->rowcount();
              ?>  

            </div>
            <div class="cardName"><pre>Donor   </pre></div>
          </div>
          <div class="iconbox" style="text-align: right">
            <img src="assets/img/bp.png">
          </div>
        </div>
        <div class="card">
          <div>
            <div class="number">
            <?php
              $q=$db->query("SELECT * FROM donor_reg WHERE bloodg='AB+'");
              echo $row=$q->rowcount();
              ?>
            </div>
            <div class="cardName"><pre>Donor   </pre></div>
          </div>
          <div class="iconbox" style="text-align: right">
            <img src="assets/img/abp.png">
          </div>
        </div>
        <div class="card">
          <div>
            <div class="number">
            <?php
              $q=$db->query("SELECT * FROM donor_reg WHERE bloodg='O-'");
              echo $row=$q->rowcount();
              ?>
            </div>
            <div class="cardName"><pre>Donor   </pre></div>
          </div>
          <div class="iconbox" style="text-align: right">
            <img src="assets/img/0n.png">
          </div>
        </div>
        <div class="card">
          <div>
            <div class="number">
            <?php
              $q=$db->query("SELECT * FROM donor_reg WHERE bloodg='A-'");
              echo $row=$q->rowcount();
              ?>
            </div>
            <div class="cardName"><pre>Donor   </pre></div>
          </div>
          <div class="iconbox" style="text-align: right">
            <img src="assets/img/an.png">
          </div>
        </div>
        <div class="card">
          <div>
            <div class="number">
            <?php
              $q=$db->query("SELECT * FROM donor_reg WHERE bloodg='B-'");
              echo $row=$q->rowcount();
              ?>
            </div>
            <div class="cardName"><pre>Donor   </pre></div>
          </div>
          <div class="iconbox" style="text-align: right">
            <img src="assets/img/bn.png">
          </div>
        </div>
        <div class="card">
          <div>
            <div class="number">
            <?php
              $q=$db->query("SELECT * FROM donor_reg WHERE bloodg='AB-'");
              echo $row=$q->rowcount();
              ?>
            </div>
            <div class="cardName"><pre>Donor   </pre></div>
          </div>
          <div class="iconbox" style="text-align: right">
            <img src="assets/img/abn.png">
          </div>
        </div>
        </div>

      <!-- DashBoard Patient Request -->
      
        <div id="title2" class="cardtitle">
              <label>
              <Strong> Patient Request Dashboard</Strong>
              <br/>Needs of Blood Group
              </label>
          </div>
        <div class="cardbox" id="cardbox">
          <div class="card">
            <div>
              <div class="number">
                <?php
                $q=$db->query("SELECT * FROM patient_reg WHERE bloodg='O+'");
                echo $row=$q->rowcount();
                ?>
                </div>
              <div class="cardName"><p>Donor</p></div>
            </div>
            <div class="iconbox" style="text-align: right">
              <img src="assets/img/0p.png">
            </div>
          </div>
          <div class="card">
            <div>
              <div class="number">
              <?php
                $q=$db->query("SELECT * FROM patient_reg WHERE bloodg='A+'");
                echo $row=$q->rowcount();
                ?>
              </div>
              <div class="cardName">Donor</div>
            </div>
            <div class="iconbox" style="text-align: right">
              <img src="assets/img/ap.png">
            </div>
          </div>
          <div class="card">
            <div>
              <div class="number">

              <?php
                $q=$db->query("SELECT * FROM patient_reg WHERE bloodg='B+'");
                echo $row=$q->rowcount();
                ?>  

              </div>
              <div class="cardName">Donor</div>
            </div>
            <div class="iconbox" style="text-align: right">
              <img src="assets/img/bp.png">
            </div>
          </div>
          <div class="card">
            <div>
              <div class="number">
              <?php
                $q=$db->query("SELECT * FROM patient_reg WHERE bloodg='AB+'");
                echo $row=$q->rowcount();
                ?>
              </div>
              <div class="cardName">Donor</div>
            </div>
            <div class="iconbox" style="text-align: right">
              <img src="assets/img/abp.png">
            </div>
          </div>
          <div class="card">
            <div>
              <div class="number">
              <?php
                $q=$db->query("SELECT * FROM patient_reg WHERE bloodg='O-'");
                echo $row=$q->rowcount();
                ?>
              </div>
              <div class="cardName">Donor</div>
            </div>
            <div class="iconbox" style="text-align: right">
              <img src="assets/img/0n.png">
            </div>
          </div>
          <div class="card">
            <div>
              <div class="number">
              <?php
                $q=$db->query("SELECT * FROM patient_reg WHERE bloodg='A-'");
                echo $row=$q->rowcount();
                ?>
              </div>
              <div class="cardName">Donor</div>
            </div>
            <div class="iconbox" style="text-align: right">
              <img src="assets/img/an.png">
            </div>
          </div>
          <div class="card">
            <div>
              <div class="number">
              <?php
                $q=$db->query("SELECT * FROM patient_reg WHERE bloodg='B-'");
                echo $row=$q->rowcount();
                ?>
              </div>
              <div class="cardName">Donor</div>
            </div>
            <div class="iconbox" style="text-align: right">
              <img src="assets/img/bn.png">
            </div>
          </div>
          <div class="card">
            <div>
              <div class="number">
              <?php
                $q=$db->query("SELECT * FROM patient_reg WHERE bloodg='AB-'");
                echo $row=$q->rowcount();
                ?>
              </div>
              <div class="cardName">Donor</div>
            </div>
            <div class="iconbox" style="text-align: right">
              <img src="assets/img/abn.png">
            </div>
          </div>
        </div>
    <div>
        <!-- Patientlist-->
          <div class="patientlist" id="patientlist">
            <div id="patientl" class="cardtitle">
                  <label>
                    Patient Request List <br/>
                    Total Number of Request :<b style="color:#2900dd"><?php
              include('countpatient.php');
              ?>
                  </label>
              </div>
              <div class="dlist" id="form">
        <table>
           <tr class="tabletitle">
              <td><b style="color:#ffffff">S.No</b></td>
              <td><b style="color:#ffffff">Branch</b></td>
              <td><b style="color:#ffffff">Name</b></td>
              <td><b style="color:#ffffff">Age</b></td>
              <td><b style="color:#ffffff">Email</b></td>
              <td><b style="color:#ffffff">Phone</b></td>
              <td><b style="color:#ffffff">Blood Group</b></td>
              <td><b style="color:#ffffff">Address</b></td>
              <td><b style="color:#ffffff">Gender</b></td>
              <td><b style="color:#ffffff">Register Date</b></td>
           </tr>
           
           <?php
           $q=$db->query("SELECT * FROM patient_reg");
           while($r1=$q->Fetch(PDO::FETCH_OBJ))
           {
            ?>
           <tr>
              <td><div class="center"><?=$r1->id; ?></b></td>
              <td><div class="center"><?=$r1->branch; ?></div></td>
              <td><div class="center"><?=$r1->fname; ?></div></td>
              <td><div class="center"><?=$r1->age; ?></b></div></td>
              <td><div class="center"><?=$r1->email; ?></div></td>
              <td><div class="center"><?=$r1->phone; ?></div></td>
              <td><div class="center"><strong><?=$r1->bloodg; ?></strong></div></td>
              <td><div class="center"><?=$r1->addres; ?></div></td>
              <td><div class="center"><?=$r1->gender; ?></div></td>
              <td><div class="center"><?=$r1->today; ?></div></td>
           </tr>
           <?php
           }
       ?>
           
        </table>
      </div>
          </div>

          
                <!-- Donor list-->
                <div class="donorlist" id="donorlist">
                <div id="donarl" class="cardtitle">
                      <label>
                        <strong> Donor List </strong><br/>
                        Total Number of Donor :<b style="color:#2900dd"><?php
                        include('countdonor.php');
                        ?>
                          </b>
                      </label>
                  </div>
                <div class="dlist" id="form">
                  <table>
                    <tr class="tabletitle"> 
                        <td><b style="color:#ffffff">S.No</b></td>
                        <td><b style="color:#ffffff">Branch</b></td>
                        <td><b style="color:#ffffff">Name</b></td>
                        <td><b style="color:#ffffff">Age</b></td>
                        <td><b style="color:#ffffff">Email</b></td>
                        <td><b style="color:#ffffff">Phone</b></td>
                        <td><b style="color:#ffffff">Blood Group</b></td>
                        <td><b style="color:#ffffff">Address</b></td>
                        <td><b style="color:#ffffff">Gender</b></td>
                        <td><b style="color:#ffffff">Register Date</b></td>
                    </tr>
                    <?php
                    $q=$db->query("SELECT * FROM donor_reg");
                    while($r1=$q->Fetch(PDO::FETCH_OBJ))
                    {
                      ?>
                    <tr>
                        <td><div class="center"><?=$r1->id; ?></div></td>
                        <td><div class="center"><?=$r1->branch; ?></div></td>
                        <td><div class="center"><?=$r1->fname; ?></div></td>
                        <td><div class="center"><?=$r1->age; ?></b></div></td>
                        <td><div class="center"><?=$r1->email; ?></div></td>
                        <td><div class="center"><?=$r1->phone; ?></div></td>
                        <td><div class="center"><strong><?=$r1->bloodg; ?></strong></div></td>
                        <td><div class="center"><?=$r1->addres; ?></div></td>
                        <td><div class="center"><?=$r1->gender; ?></div></td>
                        <td><div class="center"><?=$r1->today; ?></div></td>
                    </tr>
                    <?php
                    }
                ?>
                  </table>
                </div>
              </div>

                <!-- search list-->
                <div class="searchlist" id="searchlist">
                <div id="search1" class="cardtitle">
                      <label>
                        <b> Search List</b> <br/>
                          </b>
                      </label>
                  </div>
                <div class="dlist" id="form">
                  <table>
                    <tr class="searchtitle"> 
                        <td><b style="color:#ffffff">ID</b></td>
                        <td><b style="color:#ffffff">Branch</b></td>
                        <td><b style="color:#ffffff">Name</b></td>
                        <td><b style="color:#ffffff">Age</b></td>
                        <td><b style="color:#ffffff">Email</b></td>
                        <td><b style="color:#ffffff">Phone</b></td>
                        <td><b style="color:#ffffff">Blood Group</b></td>
                        <td><b style="color:#ffffff">Address</b></td>
                        <td><b style="color:#ffffff">Gender</b></td>
                        <td><b style="color:#ffffff">Register Date</b></td>
                    </tr>
                   
        //   <?php
        //   include('my_search_page.php');
         //  ?>

                     
                      </table>
                    </div>
                   </div>
    
                </div>

      
        </div>


  </div>

      <!-- Menu / Navigation hide ans show toggle  Script -->
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
    
    <!-- DashBoard active Script -->
    <script>
     $(document).ready(function() {
       $('#donorlist').hide(-2000, function() {
        $('#searchlist').hide(-2000);
       });
      });
      $(document).ready(function() {
        $('#patientlist').hide(-2000);
      });

              // when we click donar 
              // show donor and hide dashbord patient and search list and feedback 

              
              $(document).ready(function() {
                  $('#donar').on('click', function () {
                      $('#patientlist').hide(1000, function() {
                        $('#donorlist').show(1000);
                      });
                    });
                  });


              $(document).ready(function() {
                    $('#donar').on('click', function () {
                    $('#title').hide(1000);
                  });
                });

                
                $(document).ready(function() {
                  $('#donar').on('click', function () {
                    $('#searchlist').hide(1000, function () {
                      $('#feedbacklist').hide(1000);
                    });
                    });
                  });

                  
                 

                // when we click donar 
              // show dashbord and hide donor, patient and search list and feedback 
           
            

                 $(document).ready(function() {
                  $('#dashboard').on('click', function () {
                    $('#donorlist').hide(1000, function () {
                      $('#patientlist').hide(1000);
                    });
                    });
                  });

                  $(document).ready(function() {
                  $('#dashboard').on('click', function () {
                    $('#searchlist').hide(1000, function () {
                      $('#feedbacklist').hide(1000);
                    });
                    });
                  });

                  $(document).ready(function() {
                      $('#dashboard').on('click', function () {
                      $('#title').show(1000);
                    });
                  });

                         // when we click Dashboard
                  // show dashbord and hide donor , patient and search list and feedback 
                          
                  $(document).ready(function() {
                        $('#patient').on('click', function () {
                        $('#title').hide(1000);
                    });
                  });


                  $(document).ready(function() {
                  $('#patient').on('click', function () {
                    $('#searchlist').hide(1000, function () {
                      $('#feedbacklist').hide(1000);
                    });
                    });
                  });

                  
                 $(document).ready(function() {
                  $('#patient').on('click', function () {
                    $('#donorlist').hide(1000, function() {
                        $('#patientlist').show(1000);
                    });
                    });
                  });

                  
                         // when we click search list
                  // show search list hide dashbord , donor and patient and feedback 

                  </script>
  </body>
</html>