<?php 
    
    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "database";

    $conn = mysqli_connect($sname, 
    $uname, $password, $db_name);

    $id= $_POST['id'];

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

    $title = $_POST['title'];
    $advisory = $_POST['advisory'];
    $sy = $_POST['sy'];
    $rcode = rand(1,9999);
    $studentid = "HS-2223-".$rcode;

   



    $hash = password_hash($password, 
          PASSWORD_DEFAULT);

    $sql = "UPDATE `tbladmin` SET `name`='$name',
    `mname`='$mname',`lname`='$lname',`extname`='$suffix',`address`='$address',
    `religion`='$religion',`gender`='$gender',`age`='$age',`contact`='$contact',
    `nationality`='$nationality',`cstatus`='$cstatus',`bday`='$bday',
    `email`='$email',`title`='$title',`advisory`='$advisory',
    `sy`='$sy' WHERE `teacherid` = '$id' " ; 

  
session_start();
                $page = basename($_SERVER['PHP_SELF']);
                date_default_timezone_set('Asia/Manila');
                $date = date("M-d-Y h:i:s A");
                 $userid = $_SESSION['teacherid'];
           
                $activity = "INSERT INTO `activitylog`(`user`, `activity`, `date`) VALUES 
                ('$userid','Update $name $lname ','$date')";
                mysqli_query($conn,$activity);

     mysqli_query($conn,$sql);
   
     


    
     echo '<script language="javascript" type="text/javascript">
     alert("Update success");
     window.location = "../viewDepartment.php";
     </script>';

?>