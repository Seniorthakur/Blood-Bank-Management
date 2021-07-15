<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Search Patient</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
<link rel="stylesheet" href="assets/css/dashboard.css" /> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
   <style>
    h2{
        padding:20px;
        color:#dd0000;
    }


</style>
    
    </head>
  <body>
       <div id="title">
         <!-- DashBoard Donor -->
       <div class="cardtitle">
            <label>
             <Strong>Blood Bank Nepal</Strong>
             <br/>Available Blood At Bank
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
              $q=$db->query("SELECT * FROM donor_reg WHERE bloodg='A+'");
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
              $q=$db->query("SELECT * FROM donor_reg WHERE bloodg='B+'");
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
              $q=$db->query("SELECT * FROM donor_reg WHERE bloodg='AB+'");
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
              $q=$db->query("SELECT * FROM donor_reg WHERE bloodg='O-'");
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
              $q=$db->query("SELECT * FROM donor_reg WHERE bloodg='A-'");
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
              $q=$db->query("SELECT * FROM donor_reg WHERE bloodg='B-'");
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
              $q=$db->query("SELECT * FROM donor_reg WHERE bloodg='AB-'");
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


              
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                    

            <script>
          
           </script>

            </body>
            </html>
