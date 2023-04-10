
<?php

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "database";

$conn = mysqli_connect($sname, 
    $uname, $password, $db_name);

if (!$conn) {
     echo "Connection failed!";
  }

  if (isset($_GET['id'])) {  
    $id = $_GET['id'];  
    $query = "DELETE FROM `tblteacher` WHERE id = '$id'";  
    $run = mysqli_query($conn,$query);  }

?>

<section class="historyLog">
    <div class="history-list">
        <div id="navlist">
            <span class="allTeacher">Teacher List</span>
            <!-- ===== Search bar  ===== -->
            <div class="searchside">
            
            </div>
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
                        $ret=mysqli_query($conn,"SELECT * from tblteacher");
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
                        <form action="../superAdmin/updateteacher.php" method="POST"> 
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

    
</div>

    <script>
        var modal = document.getElementById('id01');
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }
    </script>
</section>


 