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
  <section class="historyLog">
    <div class="history-list">
    <span class="allTeacher">Grade 11 Subjects</span>
        <table class="table">
            <thead>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Description</th>
                        <th>Subject Code</th>
                        <th>Grade</th>
                        <th>Schedule</th>
                        <th>Semester</th>
                        <th>Teacher</th>
                        <th>View</th>
                    </tr>
                </thead>
                
                <tbody>
                

                    <!-- ===== Fetching Student =====    -->
                    <?php
                        $ret=mysqli_query($conn,"SELECT * from tblsubjlist where sstaus = 'Grade 11'");
                        $cnt=1;
                        while ($row=mysqli_fetch_array($ret)) {
                    ?>
                    <tr>
                    <td data-label="#"><?php echo $cnt;?></td>
                        <td data-label="Description"><?php  echo $row['subj'];?></td>
                        <td data-label="Subject Code"><?php  echo $row['subjcode'];?></td>
                        <td data-label="Grade"><?php  echo $row['sstaus'];?></td>
                        <td data-label="Schedule" class=""><?php  echo $row['sched'];?></td>
                        <td data-label="Teacher"><?php  echo $row['teacher'];?></td>
                        <form action="../superAdmin/updasubj.php" method="POST"> 
                            <input type="hidden" name="subjcode" value="<?php echo $row['subjcode']?>">
                            <td data-label="Update"><button type="submit" name="view" >Update</button></td>
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