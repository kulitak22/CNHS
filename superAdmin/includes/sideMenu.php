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
        <a href="adminDashboard.php">
        <i class="material-symbols-outlined">dashboard</i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="adminDadboard.php">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class="material-symbols-outlined">
manage_accounts
</i>
            <span class="link_name">Admin</span>
          </a>
          <i class="material-symbols-outlined arrow">
        expand_more
        </i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Admin</a></li>
          <li><a href="viewDepartment.php">View Admin</a></li>
          <li><a href="addadmin.php">Add Admin</a></li>
          <li><a href="importAdmin.php">Import Admin</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class="material-symbols-outlined">
              group
              </i>
            <span class="link_name">Teachers</span>
          </a>
          <i class="material-symbols-outlined arrow">
            expand_more
            </i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Teachers</a></li>
          <li><a href="viewFaculty.php">View Teachers</a></li>
          <li><a href="addteacher.php">Add Teachers</a></li>
          <li><a href="importTeacher.php">Import Teachers</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class="material-symbols-outlined">
            person
            </i>
            <span class="link_name">Students</span>
          </a>
          <i class="material-symbols-outlined arrow">
          expand_more
          </i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Students</a></li>
          <li><a href="viewStudent.php">View Students</a></li>
          <li><a href="addstudent.php">Add Students</a></li>
          <li><a href="importStudent.php">Import Students</a></li>
        </ul>
      </li>
      <li>
        <a href="viewSection.php">
        <i class="material-symbols-outlined">
          list
          </i>
          <span class="link_name">Section</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="viewSection.php">Section</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class="material-symbols-outlined">
          subject
          </i>
            <span class="link_name">Subject</span>
          </a>
          <i class="material-symbols-outlined arrow">
            expand_more
            </i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Subject</a></li>
          <li><a href="viewSubject.php">View Subject</a></li>
          <li><a href="addsubj.php">Add Subject</a></li>
          <li><a href="importsubj.php">Import Subject</a></li>
        </ul>
      </li>

      
      <li>


        <div class="iocn-link">
          <a href="#">
          <i class="material-symbols-outlined">
            account_box
            </i>
            <span class="link_name">Grading</span>
          </a>
          <i class="material-symbols-outlined arrow">
            expand_more
            </i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Grading</a></li>
          <li><a href="importGrade.php">Import Grades</a></li>

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
          <li><a class="link_name" href="#">Profile</a></li>
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
      <a href="../superAdmin/logout.php">
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