<?php 
  // ===== Conneect Database ===== //
  include "../includes/database.php";
?>
<!-- ===== Grade 7  ===== -->
<section class="historyLog">
    <div class="history-list">
        <div id="navlist">
            <span class="allTeacher">Grade 7</span>
            <!-- ===== Search bar  ===== -->
           
        </div>
        <table class="table">
            <thead>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Student ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Section</th>
                        <th>Remarks</th>
                        <th>Adviser</th>
                        <th>SY</th>
                    </tr>
                </thead>
                
                <tbody>
                    <!-- ===== Fetching All Grade 7 Students =====    -->
                  
                    
            </tbody>
        </table>
    </div>
</section>

<!-- ===== Grade 8  ===== -->
<section class="historyLog">
    <div class="history-list">
        <div id="navlist">
            <span class="allTeacher">Grade 8</span>
            <!-- ===== Search bar  ===== -->
           
        </div>
        <table class="table">
            <thead>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Student ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Section</th>
                        <th>Remarks</th>
                        <th>Adviser</th>
                        <th>SY</th>
                    </tr>
                </thead>
                
                <tbody>
                    <!-- ===== Fetching All Grade 8 Students =====    -->
                    
                    
            </tbody>
        </table>
    </div>
</section>

<!-- ===== Grade 9  ===== -->
<section class="historyLog">
    <div class="history-list">
        <div id="navlist">
            <span class="allTeacher">Grade 9</span>
            <!-- ===== Search bar  ===== -->
           
        </div>
        <table class="table">
            <thead>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Student ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Section</th>
                        <th>Remarks</th>
                        <th>Adviser</th>
                        <th>SY</th>
                    </tr>
                </thead>
                
                <tbody>
                    <!-- ===== Fetching All Grade 9 Students =====    -->
                    
                    
            </tbody>
        </table>
    </div>
</section>

<!-- ===== Grade 10  ===== -->
<section class="historyLog">
    <div class="history-list">
        <div id="navlist">
            <span class="allTeacher">Grade 10</span>
            <!-- ===== Search bar  ===== -->
           
        </div>
        <table class="table">
            <thead>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Student ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Section</th>
                        <th>Remarks</th>
                        <th>Adviser</th>
                        <th>SY</th>
                    </tr>
                </thead>
                
                <tbody>
                    <!-- ===== Fetching All Grade 10 Students =====    -->
                    
                    
            </tbody>
        </table>
    </div>
</section>

<!-- ===== Grade 11  ===== -->
<section class="historyLog">
    <div class="history-list">
        <div id="navlist">
            <span class="allTeacher">Grade 11</span>
            <!-- ===== Search bar  ===== -->
           
        </div>
        <table class="table">
            <thead>
                <thead>
                    <tr>
                    <th>#</th>
                        <th>Name</th>
                        <th>Student ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Section</th>
                        <th>Adviser</th>
                        <th>SY</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                
                <tbody>
                    <!-- ===== Fetching All Grade 11 Students =====    -->
                    <?php
                        $ret=mysqli_query($conn,"SELECT *  from tblstudent where sstatus='Grade 11'");
                        $cnt=1;
                        while ($row=mysqli_fetch_array($ret)) {
                    ?>
                    <tr>
                        <td><?php echo $cnt;?></td>
                        <td class=""><?php  echo $row['lname'],', '; echo $row['name'],' ';echo $row['mname']?></td>
                        <td><?php  echo $row['studentid'];?></td>
                        <td><?php  echo $row['user_name'];?></td>
                        <td><?php  echo $row['password'];?></td>
                        <td><?php  echo $row['grade'];?></td>
                        <td><?php  echo $row['adviser'];?></td>
                        <td><?php  echo $row['sy'];?></td>
                    </tr>
                    <?php 
                    $cnt=$cnt+1;
                    }?>
                    
            </tbody>
        </table>
    </div>
</section>
 

<!-- ===== Grade 12  ===== -->
<section class="historyLog">
    <div class="history-list">
        <div id="navlist">
            <span class="allTeacher">Grade 12</span>
            <!-- ===== Search bar  ===== -->
           
        </div>
        <table class="table">
            <thead>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Student ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Section</th>
                        <th>Adviser</th>
                        <th>SY</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                
                <tbody>
                    <!-- ===== Fetching All Grade 12 Students =====    -->
                
                    <?php
                        $ret=mysqli_query($conn,"SELECT *  from tblstudent where sstatus='Grade 12'");
                        $cnt=1;
                        while ($row=mysqli_fetch_array($ret)) {
                    ?>
                    <tr>
                        <td><?php echo $cnt;?></td>
                        <td class=""><?php  echo $row['lname'],', '; echo $row['name'],' ';echo $row['mname']?></td>
                        <td><?php  echo $row['studentid'];?></td>
                        <td><?php  echo $row['user_name'];?></td>
                        <td><?php  echo $row['password'];?></td>
                        <td><?php  echo $row['grade'];?></td>
                        <td><?php  echo $row['adviser'];?></td>
                        <td><?php  echo $row['sy'];?></td>
                    </tr>
                    <?php 
                    $cnt=$cnt+1;
                    }?>
                    
            </tbody>
        </table>
    </div>
</section>
 