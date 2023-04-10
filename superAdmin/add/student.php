<?php 
    
    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "database";

    $conn = mysqli_connect($sname, 
    $uname, $password, $db_name);

    $name = $_POST['fname'];
    $suffix = $_POST['extname'];
    $address = $_POST['address'];
    $religion = $_POST['religion'];

    $mname = $_POST['maname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
    $nationality = $_POST['nationality'];


    $lname = $_POST['lname'];
    $cstatus = $_POST['cstatus'];
    $bday = $_POST['bdate'];
    $email = $_POST['email'];


//     $user_name = $_POST['username'];
//     $password = $_POST['lname'];
    $sstatus = $_POST['sstatus'];
    $grade = $_POST['grade'];
    $adviser = $_POST['adviser'];
    $sy = $_POST['sy'];

    $rcode = rand(1000,9999);
    $studentid = "HS-2223-".$rcode;
    
  
   

    $faname = $_POST['faname'];
    $ganame = $_POST['ganame'];
    $maname = $_POST['maname'];

    $famname = $_POST['famname'];
    $gamname = $_POST['gamname'];
    $mamname = $_POST['mamname'];

    $falname = $_POST['falname'];
    $galname = $_POST['galname'];
    $malname = $_POST['malname'];

    $foccu = $_POST['foccu'];
    $moccu = $_POST['moccu'];
    $guardianno = $_POST['guardianno'];

    $father = $falname. ", ".$faname. " ".$famname;
    $mother = $malname. ", ".$maname. " ".$mamname;
    $guardian = $galname. ", ".$ganame. " ".$gamname;



    $hash = password_hash($password, 
          PASSWORD_DEFAULT);

    $sql = "INSERT INTO `tblstudent`(`user_name`, `password`, `studentid`, `name`, `mname`, `lname`, `extname`, `gender`, 
    `cstatus`, `bday`, `age`, `nationality`, `religion`, `contact`, `address`, `email`, `sstatus`, `grade`, `adviser`, `sy`) 
    VALUES ('$studentid','$hash','$studentid','$name','$mname','$lname','$suffix','$gender','$cstatus','$bday',
    '$age','$nationality','$religion','$contact','$address','$email','$sstatus','$grade','$adviser','$sy')" ; 

    $ssql = "INSERT INTO `studentdetails`(`studid`, `fname`, `foccu`, `mname`, `moccu`, `gname`, `gcontact`, `famname`, `mamname`, `gamname`, `falname`, `galname`, `malname`) 
    VALUES ('$studentid','$faname','$foccu','$maname','$moccu','$ganame','$guardianno','$famname','$mamname','$gamname','$falname','$galname','$malname')";


     mysqli_query($conn,$sql);
     mysqli_query($conn,$ssql);


     session_start();
     $page = basename($_SERVER['PHP_SELF']);
     date_default_timezone_set('Asia/Manila');
     $date = date("M-d-Y h:i:s A");
      $userid = $_SESSION['teacherid'];

     $activity = "INSERT INTO `activitylog`(`user`, `activity`, `date`) VALUES 
     ('$userid','Added $studentid in Student List','$date')";
     mysqli_query($conn,$activity);
    
     
     echo '<script language="javascript" type="text/javascript">
                alert("Added Success");
                window.location = "../viewStudent.php";
                </script>';

?>