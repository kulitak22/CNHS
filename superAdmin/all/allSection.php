<?php 
  // ===== Conneect Database ===== //
  include "../includes/database.php";
?>

<div class="container">
        <div>
          <div class="grid-container">
            <!-- ===== View Student ===== -->
            <div onclick="location.href='g71.php';" style="cursor: pointer;">
              <div class="faculty">
                <div>
                  <!-- ===== Count Student Grade 7 - 1 ===== -->
                  <?php
                    $sql= "SELECT count(id) As total from tblStudent where grade='Grade 7 Rizal'";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                </div>
                <div>
                  <span class="numCount">Grade 7 - Rizal</span>
                </div>
              </div>
              <div class="facultyright">
                  
              </div>
            </div>
            <!-- ===== View Student ===== -->
            <div onclick="location.href='g72.php';" style="cursor: pointer;">
              <div class="faculty">
                <div>
                  <!-- ===== Count Student Grade 7 - 2 ===== -->
                  <?php
                    $sql= "SELECT count(id) As total from tblStudent where grade='Grade 7 Bonifacio'";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                </div>
                <div>
                  <span class="numCount">Grade 7 - Bonifacio</span>
                </div>
              </div>
              <div class="facultyright">
                  
              </div>
            </div>
            <!-- ===== View Students ===== -->
            <div onclick="location.href='g81.php';" style="cursor: pointer;">
              <div class="faculty">
                <div>
                  <!-- ===== Count Student Grade 8 - 1 ===== -->
                  <?php
                    $sql= "SELECT count(id) As total from tblStudent where grade='Grade 8 Orchids'";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                </div>
                <div>
                  <span class="numCount">Grade 8 - Orchid</span>
                </div>
              </div>
              <div class="facultyright">
                  
              </div>
            </div>
            <!-- ===== View Students ===== -->
            <div onclick="location.href='g82.php';" style="cursor: pointer;">
              <div class="faculty">
                <div>
                  <!-- ===== Count Student Grade 8 - 2 ===== -->
                  <?php
                    $sql= "SELECT count(id) As total from tblStudent where grade='Grade 8 Camia'";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                </div>
                <div>
                  <span class="numCount">Grade 8 - Camia</span>
                </div>
              </div>
              <div class="facultyright">
                  
              </div>
            </div>
            <!-- ===== View Students ===== -->
            <div onclick="location.href='g91.php';" style="cursor: pointer;">
              <div class="faculty">
                <div>
                  <!-- ===== Count Student Grade 9 - 1 ===== -->
                  <?php
                    $sql= "SELECT count(id) As total from tblStudent where grade='Grade 9 Eagle'";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                </div>
                <div>
                  <span class="numCount">Grade 9 - Eagle</span>
                </div>
              </div>
              <div class="facultyright">
                  
              </div>
            </div>
            <!-- ===== View Students ===== -->
            <div onclick="location.href='g92.php';" style="cursor: pointer;">
              <div class="faculty">
                <div>
                  <!-- ===== Count Student Grade 9 - 2 ===== -->
                  <?php
                    $sql= "SELECT count(id) As total from tblStudent where grade='Grade 9 Peacock'";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                </div>
                <div>
                  <span class="numCount">Grade 9 - Peacock</span>
                </div>
              </div>
              <div class="facultyright">
                  
              </div>
            </div>
            <!-- ===== View Students ===== -->
            <div onclick="location.href='g101.php';" style="cursor: pointer;">
              <div class="faculty">
                <div>
                  <!-- ===== Count Student Grade 10 - 1 ===== -->
                  <?php
                    $sql= "SELECT count(id) As total from tblStudent where grade='Grade 10 Emerald'";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                </div>
                <div>
                  <span class="numCount">Grade 10 - Emerald</span>
                </div>
              </div>
              <div class="facultyright">
                  
              </div>
            </div>
            <!-- ===== View Students ===== -->
            <div onclick="location.href='g102.php';" style="cursor: pointer;">
              <div class="faculty">
                <div>
                  <!-- ===== Count Student Grade 10 - 2 ===== -->
                  <?php
                    $sql= "SELECT count(id) As total from tblStudent where grade='Grade 10 Sapphire'";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                </div>
                <div>
                  <span class="numCount">Grade 10 - Sapphire</span>
                </div>
              </div>
              <div class="facultyright">
                  
              </div>
            </div>
            <!-- ===== View Students ===== -->
            <div onclick="location.href='g111.php';" style="cursor: pointer;">
              <div class="faculty">
                <div>
                  <!-- ===== Count Student Grade 11 - 1 ===== -->
                  <?php
                    $sql= "SELECT count(id) As total from tblStudent where grade='Grade 11 Zeus'";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                </div>
                <div>
                  <span class="numCount">Grade 11 - ICT</span>
                </div>
              </div>
              <div class="facultyright">
                  
              </div>
            </div>
            <!-- ===== View Students ===== -->
            <div onclick="location.href='g112.php';" style="cursor: pointer;">
              <div class="faculty">
                <div>
                  <!-- ===== Count Student Grade 11 - 2 ===== -->
                  <?php
                    $sql= "SELECT count(id) As total from tblStudent where grade='Grade 11 Athena'";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                </div>
                <div>
                  <span class="numCount">Grade 11 - HE</span>
                </div>
              </div>
              <div class="facultyright">
                  
              </div>
            </div>
            <!-- ===== View Students ===== -->
            <div onclick="location.href='g121.php';" style="cursor: pointer;">
              <div class="faculty">
                <div>
                  <!-- ===== Count Student Grade 12 - 1 ===== -->
                  <?php
                    $sql= "SELECT count(id) As total from tblStudent where grade='Grade 12 Venus'";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                </div>
                <div>
                  <span class="numCount">Grade 12 - ICT</span>
                </div>
              </div>
              <div class="facultyright">
                  
              </div>
            </div>
            <!-- ===== View Students ===== -->
            <div onclick="location.href='g122.php';" style="cursor: pointer;">
              <div class="faculty">
                <div>
                  <!-- ===== Count Student Grade 12 - 2 ===== -->
                  <?php
                    $sql= "SELECT count(id) As total from tblStudent where grade='Grade 12 Jupiter'";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_assoc($result);
                    $num_rows = $value['total']
                    ?>
                  <span class="numCount"><?php echo($num_rows);?></span>
                </div>
                <div>
                  <span class="numCount">Grade 12 HE</span>
                </div>
              </div>
              <div class="facultyright">
                  
              </div>
            </div>
          </div>
        </div>
      </div>