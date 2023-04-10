<?php 
  // ===== Conneect Database ===== //
  include "../includes/database.php";
 



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
        <div class="content">
          <h2>Student Portal Notice</h2>
          <h3>Dear Students.</h3>
          <p align="justify">
            In this application you can:
            <br>
            1. view your Profile
            <br>
            2. you can also view your Subject and Schedule and your Teacher
            <br>
            3. you can also view your Grades
            <br>
            
            <br>
            <br>
            <!-- Note: If you forgot your password you can request it to your adviser to reset it into default password which is your Last Name -->
          </p>
        </div>
    </div>
  </div>
</div>


   
      
  </body>
</html>
