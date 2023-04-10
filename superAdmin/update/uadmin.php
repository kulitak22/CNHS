
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

        $id = $_POST['teacherid'];
        $sqls = "SELECT * FROM `tbladmin` WHERE `teacherid` = '$id' ;";
        $results = mysqli_query($conn, $sqls);

        if ($results) {
          while($row = mysqli_fetch_array($results)){
      ?>
        <form action="update/updateadmin.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['teacherid']?>">
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
            <input type="Date" name="bdate" value="<?php echo $row['bday']?>"required>
            
            <span class="details">Email</span>
            <input type="email" name="email" value="<?php echo $row['email']?>" required>
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

        $id = $_POST['teacherid'];
        $sqls = "SELECT * FROM `tbladmin` WHERE `teacherid` = '$id' ;";
        $results = mysqli_query($conn, $sqls);

        if ($results) {
          while($row = mysqli_fetch_array($results)){
      ?>

          
          <div class="title">Academic Information</div>
          <div class="user-details">
          
            <div class="input-box">
            <span class="details">Title</span>
            
              <select name="title" class="select-box">
              <option><?php echo $row['title']?></option>
              <?php
                $sql = "SELECT * FROM tbltitle ";
                $all_title = mysqli_query($conn,$sql);
                while ($title = mysqli_fetch_array(
                    $all_title, MYSQLI_ASSOC)):;?>
                <option value="<?php echo $title["title"];?>">
                <?php echo $title["title"];?>
                <?php endwhile;?>
              </select>
              
              
            </div>
            
            <div class="input-box">
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
            <span class="details">Advisory</span>
              <select name="advisory" class="select-box">
              <option><?php echo $row['advisory']?></option>
              <?php
                $sql = "SELECT * FROM tblgsection ";
                $all_adviser = mysqli_query($conn,$sql);
                while ($adviser = mysqli_fetch_array(
                    $all_adviser, MYSQLI_ASSOC)):;?>
                <option value="<?php echo $adviser["gsection"]?>">
                <?php echo $adviser["gsection"]?>
                <?php endwhile;?>
              </select>
            </div>
          </div>
          
          <div class="button">
            <input type="submit" name="submit" value="Update Admin">
          </div>
        </form>
      </div>
    </div>
    <?php 
      
            }
        }
        else {echo '<script> alert "No Record Found");</script>';}?>
    
  </div>
</div>

