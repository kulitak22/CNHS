<?php 
  // ===== Conneect Database ===== //
  include "../includes/database.php";
?>
<section class="historyLog">
    <div class="history-list">
        <div id="navlist">
            <span class="allTeacher">Admin List</span>
            <!-- ===== Search bar  ===== -->
            
        </div>
        <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Teacher ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Title</th>
                        <th>Advisory</th>
                        <th>SY</th>
                        <th>View Profile</th>
                    </tr>
                </thead>
                
                <tbody>
                

                    <!-- ===== Fetching Teachers =====    -->
                    <?php
                        $ret=mysqli_query($conn,"SELECT * from tbladmin");
                        $cnt=1;
                        while ($row=mysqli_fetch_array($ret)) {
                    ?>
                    <tr>
                        <td data-label="#"><?php echo $cnt;?></td>
                        <td data-label="Teacher ID"><?php  echo $row['teacherid'];?></td>
                        <td data-label="Name" class=""><?php  echo $row['lname'],', '; echo $row['name'],' ';echo $row['mname'],' ';echo $row['extname']?></td>
                        <td data-label="Email"><?php  echo $row['email'];?></td>
                        <td data-label="Contact"><?php  echo $row['contact'];?></td>
                        <td data-label="Title"><?php  echo $row['title'];?></td>
                        <td data-label="Advisory"><?php  echo $row['advisory'];?></td>
                        <td data-label="SY"><?php  echo $row['sy'];?></td>
                        <form action="../superAdmin/updateadmin.php" method="POST"> 
                            <input type="hidden" name="teacherid" value="<?php echo $row['teacherid']?>">
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
 