<div class="scontainer" style="margin: 20px;">
  <div class="container" >
    <div class="title">Add Subject</div>
    
      <div class="content">
        <form action="add/subj.php" method="POST">
          <div class="user-details">
            <div class="input-box">
              <!-- ===== Subject Name ===== -->
              <span class="details">Subject Name</span>
              <input type="text" name="subj" placeholder="Description" required>
              <!-- ===== Schedule ===== -->
              <span class="details">Schedule</span>
              <select name="sched" class="select-box">
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
              <input type="text" name="subjcode" placeholder="Subject Code" required>
              <!-- ===== Room ===== -->
              <span class="details">Semester</span>
              <select name="semester" class="select-box">
              <?php
                $sql = "SELECT * FROM semester ";
                $all_room = mysqli_query($conn,$sql);
                while ($room = mysqli_fetch_array(
                    $all_room, MYSQLI_ASSOC)):;?>
                <option value="<?php echo $room["semester"];?>">
                <?php echo $room["semester"];?>
                <?php endwhile;?>
              </select>



              

             
            </div>
            
            <div class="input-box">
               <!-- ===== Grade ===== -->
            <span class="details">Grade</span>
            <select name="sstaus" class="select-box">
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
            <input type="submit" name="submit" value="Add Subject">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>