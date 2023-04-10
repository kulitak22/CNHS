<?php 
  // ===== Conneect Database ===== //
  include "../includes/database.php";
?>
<section class="historyLog">
    <div class="history-list">
        <table class="table">
            <thead>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>User</th>
                        <th>Activity</th>


                    </tr>
                </thead>
                
                <tbody>
                

                    <!-- ===== Fetching Student =====    -->
                    <?php
                        $ret=mysqli_query($conn,"SELECT * from activitylog");
                        $cnt=1;
                        while ($row=mysqli_fetch_array($ret)) {
                    ?>
                    <tr>
                        <td data-label="Date"><?php  echo $row['date'];?></td>
                        <td data-label="User"><?php  echo $row['user'];?></td>
                        <td data-label="Activity"><?php  echo $row['activity'];?></td>
                  
                    </tr>
                    <?php 
                    $cnt=$cnt+1;
                    }?>
                    
            </tbody>
        </table>
    </div>
</section>
 