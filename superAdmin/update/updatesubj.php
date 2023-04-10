<?php 
    
    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "database";

    $conn = mysqli_connect($sname, 
    $uname, $password, $db_name);

    $id = $_POST['subjcode'];

    $subj = $_POST['subj'];
    $sched = $_POST['sched'];
    $subjcode = $_POST['subjcode'];
    $semester = $_POST['semester'];
    $sstatus = $_POST['sstatus'];
 

    $teacher = $_POST['teacher'];


    $sql = "UPDATE `tblsubjlist` SET `subj`='$subj',
    `subjcode`='$id',`sstaus`='$sstatus',`semester`='$semester',
    `sched`='$sched',`teacher`='$teacher' 
    WHERE `subjcode` = '$id'" ; 



     mysqli_query($conn,$sql);

     session_start();
      $page = basename($_SERVER['PHP_SELF']);
      date_default_timezone_set('Asia/Manila');
      $date = date("M-d-Y h:i:s A");
       $userid = $_SESSION['teacherid'];
 
      $activity = "INSERT INTO `activitylog`(`user`, `activity`, `date`) VALUES 
      ('$userid','Update Subject $subjcode','$date')";
      mysqli_query($conn,$activity);


     echo '<script language="javascript" type="text/javascript">
                alert("Update Success");
                window.location = "../viewSubject.php";
                </script>';

?>