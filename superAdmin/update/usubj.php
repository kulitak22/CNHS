<div class="scontainer" style="margin: 20px;">
  <div class="container" >
    <div class="title">Add Subject</div>
    
      <div class="content">
      <?php
      $sname = "localhost";
      $uname = "root";
      $password = "";
      $db_name = "database";
      
      $conn = mysqli_connect($sname, 
          $uname, $password, $db_name);

        $id = $_POST['subjcode'];
        $sqls = "SELECT * FROM `tblsubjlist` WHERE `subjcode` = '$id' ;";
        $results = mysqli_query($conn, $sqls);

        if ($results) {
          while($row = mysqli_fetch_array($results)){
      ?>
        <form action="update/updatesubj.php" method="POST">
          <div class="user-details">
            <div class="input-box">
              <!-- ===== Subject Name ===== -->
              <span class="details">Subject Name</span>
              <input type="text" name="subj" value="<?php echo $row['subj']?>" required>
              <!-- ===== Schedule ===== -->
              <span class="details">Schedule</span>
            
              <select name="sched" class="select-box">
              <option><?php echo $row['sched']?></option>
              <?php
                $sql = "SELECT * FROM tblschedule ";
                $all_sched = mysqli_query($conn,$sql);
                while ($sched = mysqli_fetch_array(
                    $all_sched, MYSQLI_ASSOC)):;?>
                <option value="<?php echo $sched["sched"];?>">
                <?php echo $sched["sched"];?>
                <?php endwhile;?>
              </select>


              
            </div>
            
            <div class="input-box">
              <!-- ===== Subject Code ===== -->
            <span class="details">Subject Code</span>
              <input type="text" name="subjcode" value="<?php echo $row['subjcode']?>" required>
              <!-- ===== Room ===== -->
              <span class="details">Semester</span>
             
              <select name="semester" class="select-box">
              <option><?php echo $row['semester']?></option>
              <?php
                $sql = "SELECT * FROM semester ";
                $all_semester = mysqli_query($conn,$sql);
                while ($semester = mysqli_fetch_array(
                    $all_semester, MYSQLI_ASSOC)):;?>
                <option value="<?php echo $semester["semester"];?>">
                <?php echo $semester["semester"];?>
                <?php endwhile;?>
              </select>

            </div>
            
            <div class="input-box">
               <!-- ===== Grade ===== -->
            <span class="details">Grade</span>
            
            <select name="sstatus" class="select-box">
            <option><?php echo $row['sstaus']?></option>
              <?php
                $sql = "SELECT * FROM tblscholastic ";
                $all_scholastic = mysqli_query($conn,$sql);
                while ($scholastic = mysqli_fetch_array(
                    $all_scholastic, MYSQLI_ASSOC)):;?>
                <option value="<?php echo $scholastic["Status"];?>">
                <?php echo $scholastic["Status"];?>
                <?php endwhile;?>
              </select>
              <!-- ===== Assigned Teacher ===== -->
              <span class="details">Teacher</span>
              
              <select name="teacher" class="select-box">
              <option><?php echo $row['teacher']?></option>
              <?php
                $sql = "SELECT * FROM tblteacher ";
                $all_teacher = mysqli_query($conn,$sql);
                while ($teacher = mysqli_fetch_array(
                    $all_teacher, MYSQLI_ASSOC)):;?>
                <option value="<?php echo $teacher["lname"],', '; echo $teacher["name"], ' '; echo $teacher["mname"];?>">
                <?php echo $teacher["lname"], ', '; echo $teacher["name"], ' '; echo $teacher["mname"];?>
                <?php endwhile;?>
              </select>
        

              
            </div>

          </div>

          
     
        
          <div class="button">
            <input type="submit" name="submit" value="Update Subject">
          </div>
        </form>

        <?php             }
        }
        else {echo '<script> alert "No Record Found");</script>';}?>
      </div>
      
    </div>
  </div>
</div>