<?php 
    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "database";

    $conn = mysqli_connect($sname, 
    $uname, $password, $db_name);

    // Personal Info

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
                    $id             = $getData[0];
                    $user_name      = $getData[1];
                    $password       = $getData[4];
                    $studentid      = $getData[1];
                    $name           = $getData[2];
                    $mname          = $getData[3];
                    $lname          = $getData[4];
                    $extname        = $getData[5];
                    $gender         = $getData[6];
                    $cstatus        = $getData[7];
                    $bday           = $getData[8];
                    $age            = $getData[9];
                    $nationality    = $getData[10];
                    $religion       = $getData[11];
                    $contact        = $getData[12];
                    $address        = $getData[13];
                    $email          = $getData[14];
                    $sstatus        = $getData[15];
                    $grade          = $getData[16];
                    $adviser        = $getData[17];
                    $sy             = $getData[18];
                    //Second
                    $faname         = $getData[19];
                    $famname        = $getData[20];
                    $falname        = $getData[21];
                    $foccu          = $getData[22];
                    $maname         = $getData[23];
                    $mamname        = $getData[24];
                    $malname        = $getData[25];
                    $moccu          = $getData[26];
                    $ganame         = $getData[27];
                    $gamname        = $getData[28];
                    $galname        = $getData[29];
                    $gcontact       = $getData[30];
                  

                    $query = "SELECT id FROM tblstudent WHERE id = '" . $getData[0] . "'";
     
                    $check = mysqli_query($conn, $query);
     
                    if ($check->num_rows > 0)
                    {
                        mysqli_query($conn, "UPDATE `tblstudent` SET `id`='$id',`user_name`='$user_name',
                        `password`='$password',`studentid`='$studentid',`name`='$name',`mname`='$mname',
                        `lname`='$lname',`extname`='$extname',`gender`='$gender',`cstatus`='$cstatus',
                        `bday`='$bday',`age`='$age',`nationality`='$nationality',`religion`='$religion',
                        `contact`='$contact',`address`='$address',`email`='$email',`sstatus`='$sstatus',
                        `grade`='$grade',`adviser`='$adviser',`sy`='$sy' WHERE `id` = '$id'");


                        mysqli_query($conn, "UPDATE `studentdetails` SET `id`='$id',`studid`='$studentid',
                        `fname`='$faname',`foccu`='$foccu',`mname`='$maname',`moccu`='$moccu',
                        `gname`='$ganame',`gcontact`='$gcontact',`famname`='$famname',`mamname`='$mamname',
                        `gamname`='$gamname',`falname`='$falname',`galname`='$galname',`malname`='$malname'
                         WHERE `id` = '$id'");

                        

                          
                    }
                    else
                    {
                         mysqli_query($conn, "INSERT INTO `tblstudent`(`id`, `user_name`, `password`, 
                         `studentid`, `name`, `mname`, `lname`, `extname`, `gender`, `cstatus`, `bday`, 
                         `age`, `nationality`, `religion`, `contact`, `address`, `email`, `sstatus`, 
                         `grade`, `adviser`, `sy`) VALUES ('$id','$user_name','$password','$studentid',
                         '$name','$mname','$lname','$extname','$gender','$cstatus','$bday',
                         '$age','$nationality','$religion','$contact','$address','$email',
                         '$sstatus','$grade','$adviser','$sy')");

                        mysqli_query($conn, "INSERT INTO `studentdetails`(`id`, `studid`, `fname`, `foccu`, 
                        `mname`, `moccu`, `gname`, `gcontact`, `famname`, `mamname`, `gamname`, `falname`, 
                        `galname`, `malname`) VALUES ('$id','$studentid','$faname','$foccu','$maname',
                        '$moccu','$ganame','$gcontact','$famname','$mamname','$gamname','$falname','$galname','$malname')");

                         
                    }
                }
     
               
                fclose($csvFile);

                session_start();
                $page = basename($_SERVER['PHP_SELF']);
                date_default_timezone_set('Asia/Manila');
                $date = date("M-d-Y h:i:s A");
                 $userid = $_SESSION['teacherid'];
           
                $activity = "INSERT INTO `activitylog`(`user`, `activity`, `date`) VALUES 
                ('$userid','Imported files in Student List','$date')";
                mysqli_query($conn,$activity);
     
                echo '<script language="javascript" type="text/javascript">
                alert("Imported success");
                window.location = "../viewStudent.php";
                </script>';
        }
        else
        {
            echo '<script language="javascript" type="text/javascript">
            alert("Please select Valid CSV file to Import");
            window.location = "../importStudent.php";
            </script>';
        }

    }

    

?>