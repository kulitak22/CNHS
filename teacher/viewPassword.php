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
 <?php include 'navBar/sideMenu.php';?>

  <!----======== Content ======== -->
  <section class="home-section">
  <section class="historyLog">
    <div class="history-list">
    <span class="allTeacher">Advisory</span>
        <table class="table">
            <thead>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>

                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Grade & Section</th>
                        <th>Adviser</th>
                        <th>SY</th>
                        <th>Set Password</th>

                    </tr>
                </thead>
                
                <tbody>
                

                    <!-- ===== Fetching Student =====    -->
                    <?php
                    $advisory = $_SESSION['advisory'];
                        $ret=mysqli_query($conn,"SELECT * from tblstudent where grade = '$advisory'");
                        $cnt=1;
                        while ($row=mysqli_fetch_array($ret)) {
                    ?>
                    <tr>
                        <td data-label="#"><?php echo $cnt;?></td>
                        <td data-label="Username"><?php  echo $row['user_name'];?></td>
                        <td data-label="Student ID"><?php  echo $row['studentid'];?></td>
                        <td data-label="Name" class=""><?php  echo $row['lname'],', '; echo $row['name'],' ';echo $row['mname']?></td>
                        <td data-label="Title"><?php  echo $row['grade'];?></td>
                        <td data-label="#Admin Type"><?php  echo $row['adviser'];?></td>
                        <td data-label="SY"><?php  echo $row['sy'];?></td>
                                           
                        <form action="set.php" method="POST"> 
                            <input type="hidden" name="studentid" value="<?php echo $row['studentid']?>">
                            <input type="hidden" name="lname" value="<?php echo $row['lname']?>">
                            <td data-label="Details"><button type="submit" name="view" >Set</button></td>
                        </form>
                        
                    </tr>
                    <?php 
                    $cnt=$cnt+1;
                    }?>
                    
            </tbody>
        </table>
    </div>
</section>
  </section>
</body>
</html>