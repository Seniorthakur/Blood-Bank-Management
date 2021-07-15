<?php

$link = mysqli_connect("localhost","root", "", "bimblooddb" ) or die(mysqli_error($link));
            //confirm that the connectivity is done
            /*if($link){
                echo "connected to the database";
            }else{
                echo "there is some error in connecting the database";
            }
            */
            //mysqli_close($link);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Search Patient</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    h2{
        padding:20px;
        color:#dd0000;
    }


</style>
    
    </head>
  <body>
                <div class="container">
                <h2><strong>Search Patient</strong></h2>
                    <div class="mx-auto" style="width: 400px;">
                    
                        <form method="post" action="" id="searchform" class="form-inline mx-auto">
                            <div class="form-group mb-2">
                                <label for="staticEmail2" class="sr-only">Search Donor </label>
                            </div>
                            </div>
                            <div class="form-group mx-sm-2 mb-2 ">
                                <label for="inputPassword2" class="sr-only" name = "search_item" id="search_item" >Search</label>
                                <input type="text" class="form-control" name = "search_item" id="search_item"  value="<?php echo (isset($submitit))?$search_item:'';?>" placeholder="Search">
                            <button type="submit" name="submit" id="searching" class="fa fa-search" style="outerline:none"></button>
                            </div>
                        </form>
                    </div>
            <br/>
                
               <div>
               <div class="mx-auto" style="width: 1080px;">
                <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead style="background-color: #dd0000; color:#fff ">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Branch</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Blood Group</th>
                        <th scoppe="col">Gender </th>
                        <th scope="col">Address</th>
                        <th scope="col">Register Date</th>
                        </tr>
                    </thead>

  
                    <?php 
            if(isset($_POST['submit'])){
            //prepare the data
            $hay = trim($_POST['search_item']);
            if(!empty($hay)){

        
            $sql = "SELECT * FROM patient_reg WHERE fname LIKE '%$hay%' OR age LIKE '%$hay%' OR  branch LIKE '%$hay%' OR  phone LIKE '%$hay%' OR  bloodg LIKE '%$hay%' OR  today LIKE '%$hay%' ";
            // echo $sql;
            $res = mysqli_query($link, $sql) or die(mysqli_error($link));
            $data = array();
            $numRows = mysqli_num_rows($res);
            if($numRows > 0){
                //there are records
                while($row = mysqli_fetch_assoc($res))
            
 
                {
                    // array_push($data, $row);
                        echo '<pre>';

                        // print_r($data);
                        echo '</pre>';
                        ?>


                <tbody>
                        <tr> 
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['branch']; ?></td>
                        <td><?php echo $row['fname'];?></td>
                        <td><?php echo $row['age']; ?></b></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><strong><?php echo $row['bloodg']; ?></td>
                        <td><?php echo $row['addres']; ?></td>
                        <td><?php echo $row['gender'];?></td>
                        <td><?php echo $row['today'];?></td>
                    </tr>
                    </tbody>
                   
                <?php
                            }
                        } //while ends

                        else {
                ?>
                        <tr>
                            <td colspan="10">no record found</td>
                            </tr>

                <?php
                        } 
                            }
                            else {
                                ?>
                                       <script>alert('Search box is Empty')</script>
                
                                <?php
                            }
                            
                            // else if ends
                            }//outer if ends

                            // echo '<pre>';

                            // print_r($data);
                            // echo '</pre>';

                        mysqli_close($link);
                            ?> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                    
                </table>
                    </div>
                    </div>
            <script>
                $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
        });
           </script>

            </body>
            </html>
