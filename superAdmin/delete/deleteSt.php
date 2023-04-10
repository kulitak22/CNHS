
<?php
    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "database";
                         
    $conn = mysqli_connect($sname, 
    $uname, $password, $db_name);

    $id = $_POST['id'];
    $sqls = "SELECT * FROM `tblstudent` WHERE `id` = $id ;";
    $results = mysqli_query($conn, $sqls);
    if ($results) {
         while($row = mysqli_fetch_array($results)){
    ?>
        <div id="id01" class="modal">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
            <div class="modal-content">
                <div class="container">
                               
                    <h1>Delete Account</h1>
                    <p>Are you sure you want to Delete <?php  echo $row['lname'],', '; echo $row['name'],' ';echo $row['mname']?></p>
                    <div class="clearfix">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        <form action="../superAdmin/delete/deleteS.php" method="POST"> 
                            <input type="hidden" name="id" value="<?php echo $row['id']?>">
                            <button type="submit" name="delete" value="Remove" class="deletebtn">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php
        }
    }
?>