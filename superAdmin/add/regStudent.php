<div class="scontainer" style="margin: 20px;">
  <div class="container" >
    <div class="title">Pesonal Information</div>
      <div class="content">
        <form action="add/student.php" method="POST">
          <div class="user-details">
            <div class="input-box">
              <!-- ===== Name ===== -->
              <span class="details">Name</span>
              <input type="text" id="nname" name="fname" placeholder="Name" required>
              <!-- ===== Suffix ===== -->
              <span class="details">Suffix</span>
              <select name="extname" id="extname" class="select-box">
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
              <input type="text" id="address" name="address" placeholder="Address" required>
              <!-- ===== Religion ===== -->
            <span class="details">Religion</span>
            <input type="text" id="religion" name="religion" placeholder="Religion" required>

              
            </div>
            
            <div class="input-box">
              <!-- ===== Middle Name ===== -->
            <span class="details">Middle Name</span>
              <input type="text" id="maname" name="maname" placeholder="Middle Name" required>
              <!-- ===== Gender ===== -->
              <span class="details">Gender</span>
              <select name="gender" id="gender"class="select-box">
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
            <input type="number" id="age" name="age" placeholder="Age" required>
            <!-- ===== Contact No ===== -->
            <span class="details">Contact No.</span>
            <input type="number" id="contact" name="contact" placeholder="Contact No" required>
            <!-- ===== Nationality ===== -->
            <span class="details">Nationality</span>
            <input type="text" name="nationality"id="nationality" placeholder="Nationality" required>

              

             
            </div>
            
            <div class="input-box">
               <!-- ===== Last Name ===== -->
            <span class="details">Last Name</span>
              <input type="text" name="lname"id="lname" placeholder="Last Name" required>
              <!-- ===== Civil Status ===== -->
              <span class="details">Civil Status</span>
              <select name="cstatus" id="cstatus" class="select-box" >
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
            <input type="Date"id="bday" name="bdate" required>
            
            <span class="details">Email</span>
            <input type="email"id="email" name="email" placeholder="Email" required>

              
            </div>

            <!-- ===== Scholistic Status ===== -->
            <!-- <div class="input-box">
              
            </div> -->

           
           
          </div>
          <!-- ===== Secondary Information===== -->
          <div class="title">Secondary Information</div>
          <div class="user-details2">
                  
            <div class="input-box">
              <span class="details">Father's Name</span>
              <input type="text" id="fname" name="faname" placeholder="Name" >
              <span class="details">Mother's Name</span>
              <input type="text"id="maname" name="maname" placeholder="Name" >
              <span class="details">Guardian's Name</span>
              <input type="text"id="gname" name="ganame" placeholder="Name" >
            </div>

            <div class="input-box">
            <span class="details">Middle Name</span>
              <input type="text"id="famname" name="famname" placeholder="Middle Name" >
              <span class="details">Middle Name</span>
              <input type="text"id="mamname" name="mamname" placeholder="Middle Name" >
              <span class="details">Middle Name</span>
              <input type="text"id="gamname" name="gamname" placeholder="Middle Name" >
            </div>

            <div class="input-box">
            <span class="details">Last Name</span>
              <input type="text"id="falname" name="falname" placeholder="Last Name" >
              <span class="details">Last Name</span>
              <input type="text"id="malname" name="malname" placeholder="Last Name" >
              <span class="details">Last Name</span>
              <input type="text"id="galname" name="galname" placeholder="Last Name" >
            </div>

            <div class="input-box">
            <span class="details">Occupation</span>
              <input type="text"id="foccu" name="foccu" placeholder="Occupation" >
              <span class="details">Occupation</span>
              <input type="text"id="moccu" name="moccu" placeholder="Occupation" >
              <span class="details">Contact No.</span>
              <input type="text"id="guardianno" name="guardianno" placeholder="Contact No." >
            </div>
          </div>

          
          <div class="title">Academic Information</div>
          <div class="user-details">
          
            <div class="input-box">
              
            <span class="details">Scholastic Status</span>
              <select id="sstatus" name="sstatus" class="select-box">
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
              <select id="grade" name="grade" class="select-box">
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
              <select id="sy" name="sy" class="select-box">
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
              <select id="adviser" name="adviser" class="select-box">
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
          </div>
          <div class="button">
            <input type="submit" id="submitData" name="submit" value="Add Student">
          
          </div>
        </form>
 
      </div>
    </div>
  </div>
</div>