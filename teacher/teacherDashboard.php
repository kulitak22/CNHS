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
    <?php include 'navBar/sideMenu.php';?>

    <!----======== Content ======== -->
    <section class="home-section">
      <div class="header">Dashboard</div>

      <!----======== Dashboard ======== -->
      
<div class="container">
        <div>
          <div class="grid-container">

          <!-- ===== View Department ===== -->
          <div onclick="location.href='viewAdvisory.php';" style="cursor: pointer;">
              
              <div class="faculty">
                <div>
                  <!-- ===== Count Admin ===== -->
                  <?php
                    $advisory = $_SESSION['advisory'];
                    $sql= "SELECT count(id) As total from tblstudent where grade = '$advisory'";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                </div>
              <div>
                  <span class="numCount">Advisory</span>
              </div>
              </div>
              <div class="facultyright">
              <i class="material-symbols-outlined" id="dashLogo">
manage_accounts
</i>
              </div>
            </div>

         
           
            <!-- ===== View Students ===== -->
            <div onclick="location.href='ViewPassword.php';" style="cursor: pointer;">
              <!-- div left -->
              <div class="faculty">
                
                <div>
                    <span class="numCount">Password</span>
                  </div>
              </div>
              <!-- div right -->
              <div class="facultyright">
              <i class="material-symbols-outlined" id="dashLogo">
            person
            </i>
              </div>
            </div>
            <!-- ===== View Sections ===== -->
            <div onclick="location.href='ViewProfile.php';" style="cursor: pointer;">
              <div class="faculty">
            
                <div>
                    <span class="numCount">Profile</span>
                  </div>
              </div>
                <div class="facultyright" >
                <i class="material-symbols-outlined" id="dashLogo">
          list
          </i>
              </div>
            </div>

            

          </div>
        </div>
      </div>
      <!----======== History Logs======== -->
      <div class="main-top"><h1>History Log</h1></div>
      <div class="historyLog">
    <div class="history-list">
        <table class="table">
            <thead>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>User</th>
                        <th>Activity</th>


                    </tr>
                </thead>
                
                <tbody>
                

                    <!-- ===== Fetching Student =====    -->
                    <?php
                        $ret=mysqli_query($conn,"SELECT * from activitylog");
                        $cnt=1;
                        while ($row=mysqli_fetch_array($ret)) {
                    ?>
                    <tr>
                        <td data-label="Date"><?php  echo $row['date'];?></td>
                        <td data-label="User"><?php  echo $row['user'];?></td>
                        <td data-label="Activity"><?php  echo $row['activity'];?></td>
                  
                    </tr>
                    <?php 
                    $cnt=$cnt+1;
                    }?>
                    
            </tbody>
        </table>
    </div>
                  </div>
 
    </section> 
   
      
  </body>
</html>
