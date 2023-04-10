
<section class="historyLog">
    <div class="history-list">
        <div id="navlist">
            <span class="allTeacher">Subject List</span>
            <!-- ===== Search bar  ===== -->
            
        </div>

        <table class="table">
                <thead>
                    <tr>
                        <th>Select</th>
                        <th>Description</th>
                        <th>Subject Code</th>
                        <th>Schedule</th>
                        <th>Semester</th>
                        <th>Assigned Teacher</th>
                        <th>Add</th>

                    </tr>
                </thead>
                
                <tbody>
                    <?php
                        $id = $_POST['studentid'];
                        $sstatus = $_POST['sstatus'];
                        $sy = $_POST['sy'];
                        $ret=mysqli_query($conn,"SELECT * from tblsubjlist WHERE sstaus = '$sstatus'");
                        $cnt=1;
                        while ($row=mysqli_fetch_array($ret)) {
                    ?>
                    <tr>
                        
                        <td data-label="#"><?php  echo $cnt;?></td>
                        <td data-label="Subject"><?php  echo $row['subj'];?></td>
                        <td data-label="Subject Code"><?php  echo $row['subjcode'];?></td>
                        <td data-label="Schedule"><?php  echo $row['sched'];?></td>
                        <td data-label="Room"><?php  echo $row['semester'];?></td>
                        <td data-label="Teacher"><?php  echo $row['teacher'];?></td>
                        <form action="../superAdmin/subject/subjlisted.php" method="POST"> 
                            <input type="hidden" name="id" value="<?php echo $id?>">
                            <input type="hidden" name="sched" value="<?php echo $row['sched']?>">
                            <input type="hidden" name="room" value="<?php echo $row['room']?>">
                            <input type="hidden" name="teacher" value="<?php echo $row['teacher']?>">
                            <input type="hidden" name="sy" value="<?php echo $sy?>">
                            <input type="hidden" name="grade" value="<?php echo $grade?>">
                            <input type="hidden" name="sstatus" value="<?php echo $sstatus?>">
                            <input type="hidden" name="subj" value="<?php echo $row['subj']?>">
                            <input type="hidden" name="subjcode" value="<?php echo $row['subjcode']?>">
                            <td data-label="Details"><button type="submit" name="view" >Add</button></td>
                        </form>
                    </tr>
                    <?php 
                    $cnt=$cnt+1;
                    }?>
                    
            </tbody>
            
        </table>
        
    </div>
   

</section>
 