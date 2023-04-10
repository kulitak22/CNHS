<?php 
 session_start();
$page = basename($_SERVER['PHP_SELF']);
 ?>

<div class="sidebar close">
    <div class="logo-details">
    <img src="../assets/img/logos.png">
      <span class="logo_name">Calbeg National Highschool</span>
      
    </div>
    <ul class="nav-links">
      <li>
        <a href="teacherDashboard.php">
        <i class="material-symbols-outlined">dashboard</i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="teacherDadboard.php">Dashboard</a></li>
        </ul>
      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
          <i class="material-symbols-outlined">
            person
            </i>
            <span class="link_name">Advisory</span>
          </a>
          <i class="material-symbols-outlined arrow">
          expand_more
          </i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Advisory</a></li>
          <li><a href="viewAdvisory.php">View Students</a></li>
          <li><a href="importGrade.php">Import Grade</a></li>
        </ul>
      </li>



      <li>
        <a href="viewPassword.php">
        <i class="material-symbols-outlined">
            lock
            </i>
          <span class="link_name">Manage Password</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="viewPassword.php">Manage Password</a></li>
        </ul>
      </li>

      <li>
        <a href="viewProfile.php">
        <i class="material-symbols-outlined">
        account_circle
</i>
          <span class="link_name">Profile</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="viewProfile.php">Profile</a></li>
        </ul>
      </li>



      <li>

    <div class="profile-details">
      <div class="profile-content">
        <!--<img src="image/profile.jpg" alt="profileImg">-->
      </div>
      <div class="name-job">
        <div class="profile_name"><?php echo $_SESSION['name'],' '; echo $_SESSION['lname'];?></div>
        <div class="job"><?php echo $_SESSION['teacherid']?></div>
      </div>
      <a href="../teacherlogin.php">
      <i class="material-symbols-outlined">
logout
</i>
                  </a>
      
    </div>
  </li>
</ul>
  </div>
  
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>