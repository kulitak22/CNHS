<div class="scontainer" style="margin: 20px;">
  <div class="container" >
    <div class="title">Add Admin</div>
    <div class="title">Pesonal Information</div>
      <div class="content">
        <form action="add/admin.php" method="POST">
          <div class="user-details">
            <div class="input-box">
              <!-- ===== Name ===== -->
              <span class="details">Name</span>
              <input type="text" name="fname" placeholder="Name" required>
              <!-- ===== Suffix ===== -->
              <span class="details">Suffix</span>
              <select name="extname" class="select-box">
              <?php
                $sql = "SELECT * FROM tblextname ";
                $all_extname = mysqli_query($conn,$sql);
                while ($suffix = mysqli_fetch_array(
                    $all_extname, MYSQLI_ASSOC)):;?>
                <option value="<?php echo $suffix["extname"];?>">
                <?php echo $suffix["extname"];?>
                <?php endwhile;?>
              </select>
              <!-- ===== Address ===== -->
              <span class="details">Address</span>
              <input type="text" name="address" placeholder="Address" required>
              <!-- ===== Religion ===== -->
            <span class="details">Religion</span>
            <input type="text" name="religion" placeholder="Religion" required>

              
            </div>
            
            <div class="input-box">
              <!-- ===== Middle Name ===== -->
            <span class="details">Middle Name</span>
              <input type="text" name="mname" placeholder="Middle Name" required>
              <!-- ===== Gender ===== -->
              <span class="details">Gender</span>
              <select name="gender" class="select-box">
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
            <input type="number" name="age" placeholder="Age" required>
            <!-- ===== Contact No ===== -->
            <span class="details">Contact No.</span>
            <input type="number" name="contact" placeholder="Contact No" required>
            <!-- ===== Nationality ===== -->
            <span class="details">Nationality</span>
            <input type="text" name="nationality" placeholder="Nationality" required>

              

             
            </div>
            
            <div class="input-box">
               <!-- ===== Last Name ===== -->
            <span class="details">Last Name</span>
              <input type="text" name="lname" placeholder="Last Name" required>
              <!-- ===== Civil Status ===== -->
              <span class="details">Civil Status</span>
              <select name="cstatus" class="select-box" >
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
            <input type="Date" name="bdate" required>
            
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Email" required>

              
            </div>

           
          </div>
     
          

          
          <div class="title">Academic Information</div>
          <div class="user-details">
          
            <div class="input-box">
            <span class="details">Title</span>
              <select name="title" class="select-box">
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
              <?php
                $sql = "SELECT * FROM tblgsection ";
                $all_section = mysqli_query($conn,$sql);
                while ($section = mysqli_fetch_array(
                    $all_section, MYSQLI_ASSOC)):;?>
                <option value="<?php echo $section["gsection"];?>">
                <?php echo $section["gsection"];?>
                <?php endwhile;?>
              </select>
              
              

            </div>
          </div>
          
          
        
          <div class="button">
            <input type="submit" name="submit" value="Add Teacher">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>