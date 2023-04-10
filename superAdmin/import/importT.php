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
                    $id         = $getData[0];
                    $teacherid  = $getData[1];
                    $prefix     = $getData[2];
                    $name       = $getData[3];
                    $mname      = $getData[4];
                    $lname      = $getData[5];
                    $extname    = $getData[6];
                    $address    = $getData[7];
                    $religion   = $getData[8];
                    $gender     = $getData[9];
                    $age        = $getData[10];
                    $contact    = $getData[11];
                    $nationality= $getData[12];
                    $cstatus    = $getData[13];
                    $bday       = $getData[14];
                    $email      = $getData[15];
                    $title      = $getData[16];
                    $advisory   = $getData[17];
                    $sy         = $getData[18];

                    $query = "SELECT id FROM tblteacher WHERE id = '" . $getData[0] . "'";
     
                    $check = mysqli_query($conn, $query);
     
                    if ($check->num_rows > 0)
                    {
                        mysqli_query($conn, "UPDATE `tblteacher` SET `id`='$id',`teacherid`='$teacherid',`prefix`='$prefix',
                        `name`='$name',`mname`='$mname',`lname`='$lname',`extname`='$extname',`address`='$address',
                        `religion`='$religion',`gender`='$gender',`age`='$age',`contact`='$contact',`nationality`='$nationality',
                        `cstatus`='$cstatus',`bdate`='$bday',`email`='$email',`title`='$title',`advisory`='$advisory',`sy`='$sy'
                        WHERE `id` = $id");
                    }
                    else
                    {
                         mysqli_query($conn, "INSERT INTO `tblteacher`(`id`, `teacherid`, `prefix`, `name`, `mname`, `lname`, `extname`, `address`, 
                         `religion`, `gender`, `age`, `contact`, `nationality`, `cstatus`, `bdate`, `email`, `title`, `advisory`, `sy`) 
                         VALUES ('$id','$teacherid','$prefix','$name','$mname','$lname','$extname','$address','$religion',
                         '$gender','$age','$contact','$nationality','$cstatus','$bday','$email','$title','$advisory','$sy')");
     
                    }
                }
     
               
                fclose($csvFile);
     
                echo '<script language="javascript" type="text/javascript">
                alert("Imported success");
                window.location = "../viewFaculty.php";
                </script>';


                session_start();
                $page = basename($_SERVER['PHP_SELF']);
                date_default_timezone_set('Asia/Manila');
                $date = date("M-d-Y h:i:s A");
                 $userid = $_SESSION['teacherid'];
           
                $activity = "INSERT INTO `activitylog`(`user`, `activity`, `date`) VALUES 
                ('$userid','Imported files in Teacher List','$date')";
                mysqli_query($conn,$activity);
             
        }
        else
        {
          
            echo '<script language="javascript" type="text/javascript">
            alert("Please select Valid CSV file to Import");
            window.location = "../importTeacher.php";
            </script>';
        }
        
    }

?>