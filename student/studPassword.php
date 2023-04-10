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
   
   
<div class="scontainer">
  <div class="container" >
    <h2 >Change Password</h2>
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
        
        
          <div class="user-details">
          <form action="changeP.php" method="POST">

            <div class="input-box">
            <input type="hidden" name="id" value="<?php echo $row['studentid']?>">
              <span class="details">Password</span>
              <input type="password" name="password"  required>
              <span class="details">Confirm Password</span>
              <input type="password" name="password1"  required>
              <div class="button">
                <input type="submit" name="submit" value="Change Password">
              </div>
            </div>

            </form>
          </div>

          <?php 
      
            }
        }
       ?>
        
    
        
</div>


    
</body>
</html>