<?php 
  // ===== Conneect Database ===== //
  include "../includes/database.php";
?>
<section class="historyLog">
    <div class="history-list">
    <span class="allTeacher">Student List</span>
        <table class="table">
            <thead>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Grade & Section</th>
                        <th>Adviser</th>
                        <th>SY</th>
                        <th>Add Subject</th>
                        <th>View Details</th>

                    </tr>
                </thead>
                
                <tbody>
                

                    <!-- ===== Fetching Student =====    -->
                    <?php
                        $ret=mysqli_query($conn,"SELECT * from tblstudent");
                        $cnt=1;
                        while ($row=mysqli_fetch_array($ret)) {
                    ?>
                    <tr>
                        <td data-label="#"><?php echo $cnt;?></td>
                        <td data-label="Username"><?php  echo $row['user_name'];?></td>
                        <td data-label="Email"><?php  echo $row['password'];?></td>
                        <td data-label="Student ID"><?php  echo $row['studentid'];?></td>
                        <td data-label="Name" class=""><?php  echo $row['lname'],', '; echo $row['name'],' ';echo $row['mname']?></td>
                        <td data-label="Title"><?php  echo $row['grade'];?></td>
                        <td data-label="#Admin Type"><?php  echo $row['adviser'];?></td>
                        <td data-label="SY"><?php  echo $row['sy'];?></td>
                        <form action="../superAdmin/subjs.php" method="POST"> 
                            <input type="hidden" name="sy" value="<?php echo $row['sy']?>">
                            
                            <input type="hidden" name="sstatus" value="<?php echo $row['sstatus']?>">
                            <input type="hidden" name="studentid" value="<?php echo $row['studentid']?>">
                            <td data-label="Details"><button type="submit" name="view" >Add</button></td>
                        </form>
                        <form action="../superAdmin/updatestudent.php" method="POST"> 
                            <input type="hidden" name="studentid" value="<?php echo $row['studentid']?>">
                            <td data-label="Details"><button type="submit" name="view" >View</button></td>
                        </form>                     
                    </tr>
                    <?php 
                    $cnt=$cnt+1;
                    }?>
                    
            </tbody>
        </table>
    </div>
</section>
 