
<div class="container">
        <div>
          <div class="grid-container">

          <!-- ===== View Department ===== -->
          <div onclick="location.href='viewDepartment.php';" style="cursor: pointer;">
              
              <div class="faculty">
                <div>
                  <!-- ===== Count Admin ===== -->
                  <?php
                    $sql= "SELECT count(id) As total from tbladmin";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                </div>
              <div>
                  <span class="numCount">Admin</span>
              </div>
              </div>
              <div class="facultyright">
              <i class="material-symbols-outlined" id="dashLogo">
manage_accounts
</i>
              </div>
            </div>

            <!-- ===== View Teachers ===== -->
            <div onclick="location.href='viewFaculty.php';" style="cursor: pointer;">
              <div class="faculty">
                <div>
                  <!-- ===== Count Teachers ===== -->
                  <?php
                    $sql= "SELECT count(id) As total from tblteacher";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                </div>
                <div>
                  <span class="numCount">Teacher</span>
                </div>
              </div>
              <div class="facultyright">
              <i class="material-symbols-outlined" id="dashLogo">
              group
              </i>
              </div>
            </div>
           
            <!-- ===== View Students ===== -->
            <div onclick="location.href='viewStudent.php';" style="cursor: pointer;">
              <!-- div left -->
              <div class="faculty">
                <div>
                  <!-- ===== Count Student ===== -->
                <?php
                    $sql= "SELECT count(id) As total from tblstudent";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                  </div>
                <div>
                    <span class="numCount">Student</span>
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
            <div onclick="location.href='viewSection.php';" style="cursor: pointer;">
              <div class="faculty">
              <div>
                  <!-- ===== Count Section ===== -->
                  <?php
                    $sql= "SELECT count(id) As total from tblgsection";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                </div>
                <div>
                    <span class="numCount">Section</span>
                  </div>
              </div>
                <div class="facultyright" >
                <i class="material-symbols-outlined" id="dashLogo">
          list
          </i>
              </div>
            </div>

            <!-- ===== View Subjects ===== -->
            <div onclick="location.href='viewSubject.php';" style="cursor: pointer;">
             
              <div class="faculty">
                <div>
                  <!-- ===== Count Subject ===== -->
                  <?php
                    $sql= "SELECT count(id) As total from tblsubjlist";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                  </div>
                <div>
                    <span class="numCount">Subject</span>
                  </div>
              </div>
             
              <div class="facultyright">
              <i class="material-symbols-outlined" id="dashLogo">
          subject
          </i>
              </div>
            </div>

            

            <!-- ===== View Grading Persiod ===== -->
            <div onclick="location.href='importGrade.php';" style="cursor: pointer;">
              <!-- div left -->
              <div class="faculty">
                <div>
                    <span class="numCount"></span>
                  </div>
                <div>
                    <span class="numCount">Grading</span>
                  </div>
              </div>
              <!-- div right -->
              <div class="facultyright">
              <i class="material-symbols-outlined" id="dashLogo">
            account_box
            </i>
              </div>
            </div>
            <!-- ===== View Passed Student ===== -->
            <div onclick="location.href='viewProfile.php';" style="cursor: pointer;">
              <!-- div left -->
              <div class="faculty">
                
                <div>
                    <span class="numCount">Profile</span>
                  </div>
              </div>
              <!-- div right -->
              <div class="facultyright">
                <i class="material-symbols-outlined"  id="dashLogo">
account_circle
</i>
              </div>
            </div>
            <!-- ===== View Failed students ===== -->
            <!-- <div onclick="location.href='viewFailed.php';" style="cursor: pointer;">
              
              <div class="faculty">
   
                <div>
                    <span class="numCount">Failed</span>
                  </div>
              </div>
              
              <div class="facultyright">
                <span class="material-symbols-outlined" id="dashLogo">
                  close
                  </span>
              </div>
            </div> -->
          </div>
        </div>
      </div>