<?php 
    
    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "database";

    $conn = mysqli_connect($sname, 
    $uname, $password, $db_name);
    
    $studid         = $_POST['id'];
    $grade          = $_POST['grade'];
    $subj           = $_POST['subj'];
    $subjcode       = $_POST['subjcode'];
    $sy             = $_POST['sy'];
    $sched          = $_POST['sched'];
   
    $teacher        = $_POST['teacher'];

    
    // $query = "INSERT INTO `tblsubj`(`studeid`, `subjname`, `subjcode`, `gradesec`, `sy`)
    //  VALUES ('$studid','$subj','$subjcode','$grade','$sy')";
    


    $duplicate = "SELECT `studentid` FROM tblgrading WHERE subjcode = '$subjcode'";
    $check_dupli = mysqli_query($conn, $duplicate);
    $count = mysqli_num_rows($check_dupli);
    if ($count > 0 )
    {


      mysqli_query($conn, "UPDATE `tblgrading` SET `studentid`='$studid',`subj`='$subj',
      `subjcode`='$subjcode',`sched`='$sched',`teacher`='$teacher' WHERE `subjcode` = '$subjcode'" );


        echo '<script language="javascript" type="text/javascript">
                        alert("All ready added subject");
                        window.location = "../viewStudent.php";
                        </script>';
    }
    else
    {
       

        mysqli_query($conn, "INSERT INTO `tblgrading`(`studentid`, `subj`, `subjcode`, `sched`, `teacher`) 
        VALUES ('$studid','$subj','$subjcode','$sched','$teacher')" );
      

      session_start();
      $page = basename($_SERVER['PHP_SELF']);
      date_default_timezone_set('Asia/Manila');
      $date = date("M-d-Y h:i:s A");
       $userid = $_SESSION['teacherid'];
 
      $activity = "INSERT INTO `activitylog`(`user`, `activity`, `date`) VALUES 
      ('$userid','Added Subject to $studid','$date')";
      mysqli_query($conn,$activity);


      echo '<script language="javascript" type="text/javascript">
      alert("Add subject success");
      window.location = "../viewStudent.php";
      </script>';
    }


