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
    <link rel="stylesheet" href="../assets/css/style2.css">
    <link rel="stylesheet" href="../assets/css/style3.css">

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
        <div class="modal-content">
            <div class="container">
              <h1>Import CSV File</h1>
              
              <div class="clearfix">
             
              <form method="POST" action="../superAdmin/import/importT.php" name="uploadcsv" enctype="multipart/form-data"> 
              <p>Please select valid CSV file to Import</p>
              <p>The CSV file must contain the following format</p>
              <img src="../assets/img/fcher.png" style="width: 100%; ">
              <br>
              <p><input type="file" name="file" accept=".csv" ></p>
              <button type="button" onclick="location.href='viewFaculty.php';" class="cancelbtn">Cancel</button>
                <button type="submit" name="submit"  class="deletebtn">Import</button>
              </form>
              
              </div>
            </div>
          </div>
      
      
   
  </section> 
    
</body>
</html>