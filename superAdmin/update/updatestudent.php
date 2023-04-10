<?php 
    
    $sname          = "localhost";
    $uname          = "root";
    $password       = "";
    $db_name        = "database";

    $conn           = mysqli_connect($sname, 
                    $uname, $password, $db_name);

    $id             = $_POST['id'];

    $name           = $_POST['fname'];
    $suffix         = $_POST['extname'];
    $address        = $_POST['address'];
    $religion       = $_POST['religion'];

    $mname          = $_POST['mname'];
    $gender         = $_POST['gender'];
    $age            = $_POST['age'];
    $contact        = $_POST['contact'];
    $nationality    = $_POST['nationality'];


    $lname          = $_POST['lname'];
    $cstatus        = $_POST['cstatus'];
    $bday           = $_POST['bdate'];
    $email          = $_POST['email'];

    $sstatus        = $_POST['sstatus'];
    $grade          = $_POST['grade'];
    $adviser        = $_POST['adviser'];
    $sy             = $_POST['sy'];
  

    $faname         = $_POST['faname'];
    $ganame         = $_POST['ganame'];
    $maname         = $_POST['maname'];
    $famname        = $_POST['famname'];
    $gamname        = $_POST['gamname'];
    $mamname        = $_POST['mamname'];
    $falname        = $_POST['falname'];
    $galname        = $_POST['galname'];
    $malname        = $_POST['malname'];
    $foccu          = $_POST['foccu'];
    $moccu          = $_POST['moccu'];
    $guardianno     = $_POST['guardianno'];

    $hash           = password_hash($password, 
                    PASSWORD_DEFAULT);

    $sql            = "UPDATE `tblstudent` SET 
                    `name`='$name',`mname`='$mname',`lname`='$lname',
                    `extname`='$suffix',`gender`='$gender',`cstatus`='$cstatus',`bday`='$bday',`age`='$age',
                    `nationality`='$nationality',`religion`='$religion',`contact`='$contact',`address`='$address',
                    `email`='$email',`sstatus`='$sstatus',`grade`='$grade',`adviser`='$adviser',`sy`='$sy' WHERE `studentid` = '$id'" ; 

    $ssql           = "UPDATE `studentdetails` SET `fname`='$faname',
                    `foccu`='$foccu',`mname`='$maname',`moccu`='$moccu',`gname`='$ganame',`gcontact`='$guardianno',
                    `famname`='$famname',`mamname`='$mamname',`gamname`='$gamname',`falname`='$falname',
                    `galname`='$galname',`malname`='$malname' WHERE `studid` = '$id'";


     mysqli_query($conn,$sql);
     mysqli_query($conn,$ssql);
     
     session_start();
     $page = basename($_SERVER['PHP_SELF']);
     date_default_timezone_set('Asia/Manila');
     $date = date("M-d-Y h:i:s A");
      $userid = $_SESSION['teacherid'];

     $activity = "INSERT INTO `activitylog`(`user`, `activity`, `date`) VALUES 
     ('$userid','Update $name $lname','$date')";
     mysqli_query($conn,$activity);

     echo '<script language="javascript" type="text/javascript">
     alert("Add subject success");
     window.location = "../viewStudent.php";
     </script>';

?>