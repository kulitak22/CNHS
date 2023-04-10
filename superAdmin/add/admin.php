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

    $mname = $_POST['mname'];
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
  
    $title = $_POST['title'];
    $advisory = $_POST['advisory'];
    $sy = $_POST['sy'];

    $rcode = rand(1,9999);
    $teacherid = "HT-2223-".$rcode;

  



    $hash = password_hash($password, 
          PASSWORD_DEFAULT);

    $sql = "INSERT INTO `tbladmin`(`user_name`, `password`, `teacherid`, `email`, `name`, 
    `mname`, `lname`, `extname`, `address`, `religion`, `gender`, `age`, `contact`, `nationality`, 
    `cstatus`, `bday`, `title`, `sy`, `advisory`) VALUES ('$teacherid','$lname','$teacherid','$email','$name',
    '$mname','$lname','$suffix','$address','$religion','$gender','$age','$contact',
    '$nationality','$cstatus','$bday','$title','$sy','$sy')" ; 
     mysqli_query($conn,$sql);


     session_start();
     $page = basename($_SERVER['PHP_SELF']);
     date_default_timezone_set('Asia/Manila');
     $date = date("M-d-Y h:i:s A");
      $userid = $_SESSION['teacherid'];

     $activity = "INSERT INTO `activitylog`(`user`, `activity`, `date`) VALUES 
     ('$userid','Added $teacherid in Admin List','$date')";
     mysqli_query($conn,$activity);



     echo '<script language="javascript" type="text/javascript">
                alert("Added Success");
                window.location = "../viewDepartment.php";
                </script>';

?>