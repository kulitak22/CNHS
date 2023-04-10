<?php 
    
    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "database";

    $conn = mysqli_connect($sname, 
    $uname, $password, $db_name);

    $id= $_POST['id'];
    $password =  $_POST['password'];



    $hash = password_hash($password, 
          PASSWORD_DEFAULT);

    $sql = "UPDATE `tblstudent` SET `password`='$password'  WHERE `studentid` = '$id' " ; 

     mysqli_query($conn,$sql);
   
     header("Location: studPassword.php ");




?>