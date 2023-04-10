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
    <link rel="stylesheet" href="../assets/css/style2.css">
    <link rel="stylesheet" href="../assets/css/style3.css">
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
  <section class="home-section">


  <div class="scontainer">
  <div class="container" >
    <div class="title">Pesonal Information</div>
      <div class="content">

      <?php
      $sname = "localhost";
      $uname = "root";
      $password = "";
      $db_name = "database";
      
      $conn = mysqli_connect($sname, 
          $uname, $password, $db_name);

        $id = $_POST['studentid'];
        $sqls = "SELECT * FROM `tblstudent` WHERE `studentid` = '$id' ;";
        $results = mysqli_query($conn, $sqls);

        if ($results) {
          while($row = mysqli_fetch_array($results)){
      ?>
        <form action="ustudent.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['studentid']?>">
          <div class="user-details">
            <div class="input-box">
              <!-- ===== Name ===== -->
              <span class="details">Name</span>
              <input type="text" name="fname" value="<?php echo $row['name']?>">
              <!-- ===== Suffix ===== -->
              <span class="details">Suffix</span>
              <select name="extname" class="select-box" aria-placeholder="sa"> 
              <option ><?php echo $row['extname'];?></option>
              <?php
                $sql = "SELECT * FROM tblextname ";
                $all_extname = mysqli_query($conn,$sql);
                while ($suffix = mysqli_fetch_array(
                    $all_extname, MYSQLI_ASSOC)):;?>
                <option value="<?php echo $suffix["extname"];?>">
                <?php echo $suffix["extname"];?>
                <?php  endwhile;?>
              </select>
              <!-- ===== Address ===== -->
              <span class="details">Address</span>
              <input type="text" name="address" value="<?php echo $row['address']?>" required>
              <!-- ===== Religion ===== -->
            <span class="details">Religion</span>
            <input type="text" name="religion" value="<?php echo $row['religion']?>" required>

              
            </div>
            
            <div class="input-box">
              <!-- ===== Middle Name ===== -->
            <span class="details">Middle Name</span>
              <input type="text" name="mname" value="<?php echo $row['mname']?>" required>
              <!-- ===== Gender ===== -->
              <span class="details">Gender</span>
              <select name="gender" class="select-box">
                <option><?php echo $row['gender']?></option>
              <?php
                $sql = "SELECT * FROM gender ";
                $all_gender = mysqli_query($conn,$sql);
                while ($gender = mysqli_fetch_array(
                    $all_gender, MYSQLI_ASSOC)):;?>
                <option value="<?php echo $gender["gender"];?>">
                <?php echo $gender["gender"];?>
                <?php endwhile;?>
              </select>
              <!-- ===== Age ===== -->
            <span class="details">Age</span>
            <input type="number" name="age" value="<?php echo $row['age']?>" required>
            <!-- ===== Contact No ===== -->
            <span class="details">Contact No.</span>
            <input type="number" name="contact" value="<?php echo $row['contact']?>" required>
            <!-- ===== Nationality ===== -->
            <span class="details">Nationality</span>
            <input type="text" name="nationality" value="<?php echo $row['nationality']?>" required>

              

             
            </div>
            
            <div class="input-box">
               <!-- ===== Last Name ===== -->
            <span class="details">Last Name</span>
              <input type="text" name="lname" value="<?php echo $row['lname']?>" required>
              <!-- ===== Civil Status ===== -->
              <span class="details">Civil Status</span>
              <select name="cstatus" class="select-box" >
                <option><?php echo $row['cstatus']?></option>
              <?php
                $sql = "SELECT * FROM cstatus ";
                $all_cstatus = mysqli_query($conn,$sql);
                while ($status = mysqli_fetch_array(
                    $all_cstatus, MYSQLI_ASSOC)):;?>
                <option value="<?php echo $status["civil"];?>">
                <?php echo $status["civil"];?>
                <?php endwhile;?>
              </select>
            <span class="details">Birth Date</span>
            <input type="text" name="bdate" value="<?php echo $row['bday']?>"required>
            
            <span class="details">Email</span>
            <input type="email" name="email" value="<?php echo $row['email']?>" required>
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

        $id = $_POST['studentid'];
        $sqls = "SELECT * FROM `studentdetails` WHERE `studid` = '$id' ;";
        $results = mysqli_query($conn, $sqls);

        if ($results) {
          while($row = mysqli_fetch_array($results)){
      ?>

          <!-- ===== Secondary Information===== -->
          <div class="title">Secondary Information</div>
          <div class="user-details2">
                  
            <div class="input-box">
              <span class="details">Father's Name</span>
              <input type="text" name="faname"value="<?php echo $row['fname']?>" >
              <span class="details">Mother's Name</span>
              <input type="text" name="maname" value="<?php echo $row['mname']?>">
              <span class="details">Guardian's Name</span>
              <input type="text" name="ganame" value="<?php echo $row['gname']?>" >
            </div>

            <div class="input-box">
            <span class="details">Middle Name</span>
              <input type="text" name="famname" value="<?php echo $row['famname']?>" >
              <span class="details">Middle Name</span>
              <input type="text" name="mamname" value="<?php echo $row['mamname']?>" >
              <span class="details">Middle Name</span>
              <input type="text" name="gamname" value="<?php echo $row['gamname']?>" >
            </div>

            <div class="input-box">
            <span class="details">Last Name</span>
              <input type="text" name="falname" value="<?php echo $row['falname']?>" >
              <span class="details">Last Name</span>
              <input type="text" name="malname" value="<?php echo $row['malname']?>" >
              <span class="details">Last Name</span>
              <input type="text" name="galname" value="<?php echo $row['galname']?>" >
            </div>

            <div class="input-box">
            <span class="details">Occupation</span>
              <input type="text" name="foccu" value="<?php echo $row['foccu']?>" >
              <span class="details">Occupation</span>
              <input type="text" name="moccu" value="<?php echo $row['moccu']?>" >
              <span class="details">Contact No.</span>
              <input type="text" name="guardianno" value="<?php echo $row['gcontact']?>">
            </div>
          </div>
          
          <?php 
      
            }
        }
        else {echo '<script> alert "No Record Found");</script>';}?>



          <?php
      $sname = "localhost";
      $uname = "root";
      $password = "";
      $db_name = "database";
      
      $conn = mysqli_connect($sname, 
          $uname, $password, $db_name);

        $id = $_POST['studentid'];
        $sqls = "SELECT * FROM `tblstudent` WHERE `studentid` = '$id' ;";
        $results = mysqli_query($conn, $sqls);

        if ($results) {
          while($row = mysqli_fetch_array($results)){
      ?>

          
          <div class="title">Academic Information</div>
          <div class="user-details">
          
            <div class="input-box">
            <span class="details">Scholastic Status</span>
            
              <select name="sstatus" class="select-box">
              <option><?php echo $row['sstatus']?></option>
              <?php
                $sql = "SELECT * FROM tblscholastic ";
                $all_scholastic = mysqli_query($conn,$sql);
                while ($scholastic = mysqli_fetch_array(
                    $all_scholastic, MYSQLI_ASSOC)):;?>
                <option value="<?php echo $scholastic["Status"];?>">
                <?php echo $scholastic["Status"];?>
                <?php endwhile;?>
              </select>
              
              
            </div>
            
            <div class="input-box">
            <span class="details">Grade & Section</span>
            
              <select name="grade" class="select-box">
              <option><?php echo $row['grade']?></option>
              <?php
                $sql = "SELECT * FROM tblgsection ";
                $all_section = mysqli_query($conn,$sql);
                while ($section = mysqli_fetch_array(
                    $all_section, MYSQLI_ASSOC)):;?>
                <option value="<?php echo $section["gsection"];?>">
                <?php echo $section["gsection"];?>
                <?php endwhile;?>
              </select>
          
              <span class="details">School Year</span>
              <select name="sy" class="select-box">
              <option><?php echo $row['sy']?></option>
              <?php
                $sql = "SELECT * FROM tblsy ";
                $all_sy = mysqli_query($conn,$sql);
                while ($sy = mysqli_fetch_array(
                    $all_sy, MYSQLI_ASSOC)):;?>
                <option value="<?php echo $sy["sy"];?>">
                <?php echo $sy["sy"];?>
                <?php endwhile;?>
              </select>
              
            </div>

            <div class="input-box">
            <span class="details">Adviser</span>
              <select name="adviser" class="select-box">
              <option><?php echo $row['adviser']?></option>
              <?php
                $sql = "SELECT * FROM tblteacher ";
                $all_adviser = mysqli_query($conn,$sql);
                while ($adviser = mysqli_fetch_array(
                    $all_adviser, MYSQLI_ASSOC)):;?>
                <option value="<?php echo $adviser["lname"],', '; echo $adviser["name"], ' '; echo $adviser["mname"];?>">
                <?php echo $adviser["lname"], ', '; echo $adviser["name"], ' '; echo $adviser["mname"];?>
                <?php endwhile;?>
              </select>
              

            </div>
          </div><?php 
                  
                }
            }
            ?>



          <!-- ===== Grading===== -->
          <div class="title">Subject</div>
          <div class="user-details2">
                  
          <table class="table">
            <thead>
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Subject Code</th>
                        <th>Schedule</th>
                        <th>Teacher</th>
                        <th>First Grading</th>
                        <th>Second Grading</th>
                        <th>Third Grading</th>
                        <th>Fourth Grading</th>
                        <th>Final Grade</th>
                        <th>Remarks</th>

                    </tr>
                </thead>
                
                <tbody>
                

                    <!-- ===== Fetching Student =====    -->
                    <?php
                    $id = $_POST['studentid'];
                        $ret=mysqli_query($conn,"SELECT * from tblgrading where studentid = '$id'");
                        $cnt=1;
                        while ($row=mysqli_fetch_array($ret)) {
                    ?>
                    <tr>
                        <td data-label="subj"><?php  echo $row['subj'];?></td>
                        <td data-label="subjcode"><?php  echo $row['subjcode'];?></td>
                        <td data-label="subj"><?php  echo $row['sched'];?></td>
                        <td data-label="subj"><?php  echo $row['teacher'];?></td>
                        <td data-label="grade"><?php  echo $row['fgrading'];?></td>
                        <td data-label="sched" class=""><?php  echo $row['sgrading'];?></td>
                        <td data-label="room"><?php  echo $row['tgrading'];?></td>
                        <td data-label="teacher"><?php  echo $row['rgrading'];?></td>
                        <td data-label="subj"><?php  echo $row['finalgrade'];?></td>
                        <td data-label="subj"><?php  echo $row['remarks'];?></td>
                       

                        
                    </tr>
                    <?php 
                    $cnt=$cnt+1;
                    }?>
                    
            </tbody>
        </table>
          </div>
              
              
        
          <div class="button">
            <input type="submit" name="submit" value="Update Student">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


  </section> 
    
</body>
</html>