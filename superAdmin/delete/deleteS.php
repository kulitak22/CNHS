<?php  
 
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "database";

$conn = mysqli_connect($sname, 
    $uname, $password, $db_name);

 if (isset($_POST['delete'])) {  
      $id = $_POST['id'];
      $query = "DELETE FROM tblstudent WHERE id = '$id'";
      $query_run = mysqli_query($conn, $query);

      if ($query_run) {
          echo '<script> alert("Data Deleted");</script>';
          header ("location: ../viewStudent.php");
      }
      else
      {
          echo '<script> alert("Data not deleted");</script>';
      }
 }  
 ?> 