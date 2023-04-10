      <?php 
      // ===== Conneect Database ===== //
      include "../includes/database.php";
      ?>
      <div class="container">
        <div>
          <div class="grid-container">
            <!-- ===== View Student ===== -->
            <div onclick="location.href='sg7.php';" style="cursor: pointer;">
              <div class="faculty">
                <div>
                  <!-- ===== Count Student Grade 7===== -->
                  <?php
                    $sql= "SELECT count(id) As total from tblsubjlist where sstaus='Grade 7'";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                </div>
                <div>
                  <span class="numCount">Grade 7</span>
                </div>
              </div>
              <div class="facultyright">
                  
              </div>
            </div>
            <!-- ===== View Student ===== -->
            <div onclick="location.href='sg8.php';" style="cursor: pointer;">
              <div class="faculty">
                <div>
                  <!-- ===== Count Student Grade 8 ===== -->
                  <?php
                    $sql= "SELECT count(id) As total from tblsubjlist where sstaus='Grade 8'";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                </div>
                <div>
                  <span class="numCount">Grade 8</span>
                </div>
              </div>
              <div class="facultyright">
                  
              </div>
            </div>
            <!-- ===== View Students ===== -->
            <div onclick="location.href='sg9.php';" style="cursor: pointer;">
              <div class="faculty">
                <div>
                  <!-- ===== Count Student Grade 9 ===== -->
                  <?php
                    $sql= "SELECT count(id) As total from tblsubjlist where sstaus='Grade 9'";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                </div>
                <div>
                  <span class="numCount">Grade 9</span>
                </div>
              </div>
              <div class="facultyright">
                  
              </div>
            </div>
            <!-- ===== View Students ===== -->
            <div onclick="location.href='sg10.php';" style="cursor: pointer;">
              <div class="faculty">
                <div>
                  <!-- ===== Count Student Grade 10 ===== -->
                  <?php
                    $sql= "SELECT count(id) As total from tblsubjlist where sstaus='Grade 10'";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                </div>
                <div>
                  <span class="numCount">Grade 10</span>
                </div>
              </div>
              <div class="facultyright">
                  
              </div>
            </div>
            <!-- ===== View Students ===== -->
            <div onclick="location.href='sg11.php';" style="cursor: pointer;">
              <div class="faculty">
                <div>
                  <!-- ===== Count Student Grade 11 ===== -->
                  <?php
                    $sql= "SELECT count(id) As total from tblsubjlist where sstaus='Grade 11'";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                </div>
                <div>
                  <span class="numCount">Grade 11</span>
                </div>
              </div>
              <div class="facultyright">
                  
              </div>
            </div>
            <!-- ===== View Students ===== -->
            <div onclick="location.href='sg12.php';" style="cursor: pointer;">
              <div class="faculty">
                <div>
                  <!-- ===== Count Student Grade 12 ===== -->
                  <?php
                    $sql= "SELECT count(id) As total from tblsubjlist where sstaus='Grade 12'";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                </div>
                <div>
                  <span class="numCount">Grade 12</span>
                </div>
              </div>
              <div class="facultyright">
                  
              </div>
            </div>

          </div>
        </div>
      </div>