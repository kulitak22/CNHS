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
      <link rel="stylesheet" href="../assets/css/style.css">
      <!----======== Swiper CSS ======== -->
      <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css" />
      <!----===== Google Icon CSS ===== -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
      <!----======== Title ======== -->
      <title>CNHS</title> 
  </head>
  <body>
    <!----======== Sidebar ======== -->
    <?php include 'includes/sideMenu.php';?>

    <!----======== Content ======== -->
    <section class="home-section">
      <div class="header">Dashboard</div>

      <!----======== Dashboard ======== -->
      <?php include 'includes/dashBoard.php';?>

      <!----======== History Logs======== -->
      <div class="main-top"><h1>History Log</h1></div>
      <?php include 'includes/historyLog.php';?>
    </section> 
   
      
  </body>
</html>
