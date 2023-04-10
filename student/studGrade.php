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
    <?php include 'navBar/sideMenu.php';?>

    <!----======== Content ======== -->

    <div class="history-list">
    <div class="title">Grades</div>
          <div class="user-details2">
                  
          <table class="table">
            <thead>
                
                
                <tbody>
                

                    <!-- ===== Fetching Student =====    -->
                    <?php
                    $id = $_SESSION['teacherid'];
                        $ret=mysqli_query($conn,"SELECT * from tblgrading where studentid = '$id'");
                        $cnt=1;
                        while ($row=mysqli_fetch_array($ret)) {
                    ?>
                    <tr>
                        <td data-label="Subject"><?php  echo $row['subj'];?></td>
                        <td data-label="Teacher"><?php  echo $row['teacher'];?></td>
                        <td data-label="First Grading"><?php  echo $row['fgrading'];?></td>
                        <td data-label="Second Grading" class=""><?php  echo $row['sgrading'];?></td>
                        <td data-label="Third Grading"><?php  echo $row['tgrading'];?></td>
                        <td data-label="Fourth Grading"><?php  echo $row['rgrading'];?></td>
                        <td data-label="Final Grade"><?php  echo $row['finalgrade'];?></td>
                        <td data-label="Remarks"><?php  echo $row['remarks'];?></td>
  
                    </tr>
                    <?php 
                    $cnt=$cnt+1;
                    }?>
                    
            </tbody>
        </table>
          </div>
                </div>

   
      
  </body>
</html>
