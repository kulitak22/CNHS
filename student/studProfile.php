<?php

    include('../includes/database.php');
   
  ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../assets/css/navContainer.css">
    <link rel="stylesheet" href="../assets/css/style3.css">
    <link rel="stylesheet" href="../assets/css/style2.css">
    <link rel="stylesheet" href="../assets/css/style4.css">

    <!----======== Swiper CSS ======== -->
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css" />

    <!----===== Google Icon CSS ===== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    
    <!----======== Title ======== -->
    <title>CNHS</title> 

</head>

<body>
  <!----======== Sidebar ======== -->
  <?php include 'navBar/sideMenu.php';?>

  <!----======== Content ======== -->
  <div class="main">
<div class="scontainer">
  <div class="container" >
    <h2 >Pesonal Information</h2>
    <div class="content">
      <?php
      $sname = "localhost";
      $uname = "root";
      $password = "";
      $db_name = "database";
      
      $conn = mysqli_connect($sname, 
          $uname, $password, $db_name);

        $id =  $_SESSION['teacherid'];
        $sqls = "SELECT * FROM `tblstudent` WHERE `studentid` = '$id' ;";
        $results = mysqli_query($conn, $sqls);

        if ($results) {
          while($row = mysqli_fetch_array($results)){
      ?>

          <!-- ===== Secondary Information===== -->
    
          <div class="user-details2">
                  
            <div class="input-box">
              <span class="details">Name</span>
              <input type="text" name="faname"value="<?php echo $row['lname'],", " ; echo $row['name']," " ;  echo $row['mname']?>"  disabled="disabled">
              <span class="details">Gender</span>
              <input type="text" name="maname" value="<?php echo $row['gender']?>" disabled="disabled">
              <span class="details">Civil Status</span>
              <input type="text" name="ganame" value="<?php echo $row['cstatus']?>" disabled="disabled">
            </div>

            <div class="input-box">
            <span class="details">Address</span>
              <input type="text" name="famname" value="<?php echo $row['address']?>" disabled="disabled">
              <span class="details">Age</span>
              <input type="text" name="mamname" value="<?php echo $row['age']?>" disabled="disabled">
              <span class="details">Birth Date</span>
              <input type="text" name="gamname" value="<?php echo $row['bday']?>" disabled="disabled">
            </div>

            <div class="input-box">
            <span class="details">Religion</span>
              <input type="text" name="falname" value="<?php echo $row['religion']?>" disabled="disabled">
              <span class="details">Nationality</span>
              <input type="text" name="malname" value="<?php echo $row['nationality']?>" disabled="disabled">
              <span class="details">Contact No</span>
              <input type="text" name="galname" value="<?php echo $row['contact']?>" disabled="disabled">
            </div>

            <div class="input-box">
            <span class="details">Email</span>
              <input type="text" name="foccu" value="<?php echo $row['email']?>" disabled="disabled">
       
            </div>
          </div>
          
          <?php 
      
            }
        }
       ?>

<?php
      $sname = "localhost";
      $uname = "root";
      $password = "";
      $db_name = "database";
      
      $conn = mysqli_connect($sname, 
          $uname, $password, $db_name);

        $id =  $_SESSION['teacherid'];
        $sqls = "SELECT * FROM `studentdetails` WHERE `studid` = '$id' ;";
        $results = mysqli_query($conn, $sqls);

        if ($results) {
          while($row = mysqli_fetch_array($results)){
      ?>

          <!-- ===== Secondary Information===== -->
          <span class="title">Email</span>
          <div class="user-details2">
                  
            <div class="input-box">
              <span class="details">Father's Name</span>
              <input type="text" name="faname"value="<?php echo $row['falname'], ", "; echo $row['fname'], " "; echo $row['famname']?>" disabled="disabled">
              <span class="details">Mother's Name</span>
              <input type="text" name="faname"value="<?php echo $row['malname'], ", "; echo $row['mname'], " "; echo $row['mamname']?>" disabled="disabled">
              <span class="details">Guardian's Name</span>
              <input type="text" name="faname"value="<?php echo $row['galname'], ", "; echo $row['gname'], " "; echo $row['gamname']?>" disabled="disabled">
            </div>
            <div class="input-box">
              <span class="details">Contact No.</span>
              <input type="text" name="guardianno" value="<?php echo $row['gcontact']?>">
            </div>
          </div>
          
          <?php 
      
            }
        }
        ?>
        
        <?php
      $sname = "localhost";
      $uname = "root";
      $password = "";
      $db_name = "database";
      
      $conn = mysqli_connect($sname, 
          $uname, $password, $db_name);

        $id = $_SESSION['teacherid'];
        $sqls = "SELECT * FROM `tblstudent` WHERE `studentid` = '$id' ;";
        $results = mysqli_query($conn, $sqls);

        if ($results) {
          while($row = mysqli_fetch_array($results)){
      ?>

          
<div class="title">Academic Information</div>
          <div class="user-details2">
                  
            <div class="input-box">
              <span class="details">Scholastic</span>
              <input type="text" name="faname"value="<?php echo $row['sstatus']?>" >
              <span class="details">Grade and Section</span>
              <input type="text" name="faname"value="<?php echo $row['grade']?>" >
              <span class="details">School Year</span>
              <input type="text" name="faname"value="<?php echo $row['sy']?>" >
            </div>
            <div class="input-box">
              <span class="details">Adviser</span>
              <input type="text" name="guardianno" value="<?php echo $row['adviser']?>">
            </div>
          </div><?php 
                  
                }
            }
            ?>


    </div>      
  </div>
</div>
    
</body>
</html>