<?php 
    
    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "database";

    $conn = mysqli_connect($sname, 
    $uname, $password, $db_name);

    $subj = $_POST['subj'];
    $sched = $_POST['sched'];
    $subjcode = $_POST['subjcode'];
    $sstatus = $_POST['sstaus'];

    $semester = $_POST['semester'];
    $teacher = $_POST['teacher'];


    $sql = "INSERT INTO `tblsubjlist`(`subj`, `subjcode`, `sstaus`, `semester`, `sched`, `teacher`) 
    VALUES ('$subj','$subjcode','$sstatus','$semester','$sched','$teacher')" ; 



     mysqli_query($conn,$sql);

     session_start();
     $page = basename($_SERVER['PHP_SELF']);
     date_default_timezone_set('Asia/Manila');
     $date = date("M-d-Y h:i:s A");
      $userid = $_SESSION['teacherid'];

     $activity = "INSERT INTO `activitylog`(`user`, `activity`, `date`) VALUES 
     ('$userid','Added $subjcode in Subject List','$date')";
     mysqli_query($conn,$activity);
     


     echo '<script language="javascript" type="text/javascript">
                alert("Added Success");
                window.location = "../viewSubject.php";
                </script>';

?>