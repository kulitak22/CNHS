<?php 
    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "database";

    $conn = mysqli_connect($sname, 
    $uname, $password, $db_name);

     if (isset($_POST["submit"])) {
        $fileMimes = array(
            'text/x-comma-separated-values',
            'text/comma-separated-values',
            'application/octet-stream',
            'application/vnd.ms-excel',
            'application/x-csv',
            'text/x-csv',
            'text/csv',
            'application/csv',
            'application/excel',
            'application/vnd.msexcel',
            'text/plain'
        );
        if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $fileMimes))
        {
                $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
                fgetcsv($csvFile);
                while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE)
                {
                    $id = $getData[0];
                    $user_name = $getData[1];
                    $password = $getData[5];
                    $teacherid = $getData[1];
                    $email = $getData[2];
                    $name = $getData[3];
                    $mname = $getData[4];
                    $lname = $getData[5];
                    $extname = $getData[6];
                    $address = $getData[7];
                    $religion = $getData[8];
                    $gender = $getData[9];
                    $age = $getData[10];
                    $contact = $getData[11];
                    $nationality = $getData[12];
                    $cstatus = $getData[13];
                    $bday = $getData[14];
                    $title = $getData[15];
                    $sy = $getData[16];
                    $advisory = $getData[17];

                    $query = "SELECT id FROM tbladmin WHERE id = '" . $getData[0] . "'";
     
                    $check = mysqli_query($conn, $query);
     
                    if ($check->num_rows > 0)
                    {
                        mysqli_query($conn, "UPDATE `tbladmin` SET `id`='$id',`user_name`='$user_name',`password`='$password',
                        `teacherid`='$teacherid',`email`='$email',`name`='$name',`mname`='$mname',`lname`='$lname',
                        `extname`='$extname',`address`='$address',`religion`='$religion',`gender`='$gender',`age`='$age',
                        `contact`='$contact',`nationality`='$nationality',`cstatus`='$cstatus',`bday`='$bday',`title`='$title',
                        `sy`='$sy',`advisory`='$advisory' WHERE `id` = '$id' ");
                    }
                    else
                    {
                         mysqli_query($conn, "INSERT INTO `tbladmin`(`id`, `user_name`, `password`, `teacherid`, 
                         `email`, `name`, `mname`, `lname`, `extname`, `address`, `religion`, `gender`, `age`, `contact`, 
                         `nationality`, `cstatus`, `bday`, `title`, `sy`, `advisory`) 
                         VALUES ('$id','$user_name','$password','$teacherid','$email','$name','$mname',
                         '$lname','$extname','$address','$religion','$gender','$age','$contact','$nationality',
                         '$cstatus','$bday','$title','$sy','$advisory')");
     
                    }
                }
     
               
                fclose($csvFile);
     

                session_start();
                $page = basename($_SERVER['PHP_SELF']);
                date_default_timezone_set('Asia/Manila');
                $date = date("M-d-Y h:i:s A");
                 $userid = $_SESSION['teacherid'];
           
                $activity = "INSERT INTO `activitylog`(`user`, `activity`, `date`) VALUES 
                ('$userid','Imported files in Admin List','$date')";
                mysqli_query($conn,$activity);

                echo '<script language="javascript" type="text/javascript">
            alert("Imported success");
            window.location = "../viewDepartment.php";
            </script>';
             
        }
        else
        {
          
            echo '<script language="javascript" type="text/javascript">
            alert("Please select Valid CSV file to Import");
            window.location = "../importAdmin.php";
            </script>';
        }
    }

?>