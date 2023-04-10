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
                    $subj           = $getData[1];
                    $subjcode       = $getData[2];
                    $sstatus          = $getData[3];

                    $semester          = $getData[4];
                    $sched           = $getData[5];
                    $teacher        = $getData[6];



                    $query = "SELECT subjcode FROM tblsubjlist WHERE subjcode = '" . $getData[2] . "'";
     
                    $check = mysqli_query($conn, $query);
     
                    if ($check->num_rows > 0)
                    {
                        mysqli_query($conn, "UPDATE `tblsubjlist` SET `id`='$id',`subj`='$subj',
                        `subjcode`='$subjcode',`sstaus`='$sstatus',`semester`='$semester',
                        `sched`='$sched',`teacher`='$teacher'
                         WHERE `subjcode` = '$subjcode'");

                          
                    }
                    else
                    {
                         mysqli_query($conn, "INSERT INTO `tblsubjlist`(`id`, `subj`, `subjcode`, `sstaus`, `semester`, `sched`, `teacher`) 
                         VALUES ('$id','$subj','$subjcode','$sstatus','$semester','$sched','$teacher')");
                    }
                }
     
               
                fclose($csvFile);

                session_start();
                $page = basename($_SERVER['PHP_SELF']);
                date_default_timezone_set('Asia/Manila');
                $date = date("M-d-Y h:i:s A");
                 $userid = $_SESSION['teacherid'];
           
                $activity = "INSERT INTO `activitylog`(`user`, `activity`, `date`) VALUES 
                ('$userid','Imported files in Subject List','$date')";
                mysqli_query($conn,$activity);
                
     
                echo '<script language="javascript" type="text/javascript">
                alert("Imported success");
                window.location = "../viewSubject.php";
                </script>';
        }
        else
        {
            echo '<script language="javascript" type="text/javascript">
            alert("Please select Valid CSV file to Import");
            window.location = "../viewSubject.php";
            </script>';
        }

    }

    

?>