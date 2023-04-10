<?php 
    
    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "database";

    $conn = mysqli_connect($sname, 
    $uname, $password, $db_name);

    $id = $_POST['studentid'];

    $lname = $_POST['lname'];


 


    $sql = "UPDATE `tblstudent` SET `password`='$lname' WHERE `studentid` = '$id'" ; 



     mysqli_query($conn,$sql);

     session_start();
      $page = basename($_SERVER['PHP_SELF']);
      date_default_timezone_set('Asia/Manila');
      $date = date("M-d-Y h:i:s A");
       $userid = $_SESSION['teacherid'];
 
      $activity = "INSERT INTO `activitylog`(`user`, `activity`, `date`) VALUES 
      ('$userid','Update Password $id','$date')";
      mysqli_query($conn,$activity);


     echo '<script language="javascript" type="text/javascript">
                alert("Update Success");
                window.location = "viewPassword.php";
                </script>';

?>