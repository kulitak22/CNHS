<?php 
    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "database";

    $conn = mysqli_connect($sname, 
    $uname, $password, $db_name);

    session_start();
$page = basename($_SERVER['PHP_SELF']);

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
                    $studid         = $getData[1];
                    $subj           = $getData[2];
                    $subjcode       = $getData[3];
                    $sched          = $getData[4];
                    $teacher        = $getData[5];
                    $fgrading       = $getData[6];
                    $sgrading       = $getData[7];
                    $tgrading       = $getData[8];
                    $rgrading       = $getData[9];
                    $fgrade         = $getData[10];
                    $remarks        = $getData[11];

                     date_default_timezone_set('Asia/Manila');
                    $date =         date("M-d-Y h:i:s A");
                   
                     $userid = $_SESSION['teacherid'];



                    $query = "SELECT subjcode FROM tblgrading WHERE subjcode = '" . $getData[3] . "'";
     
                    $check = mysqli_query($conn, $query);
     
                    if ($check->num_rows > 0)
                    {
                        mysqli_query($conn, "UPDATE `tblgrading` SET `id`='$id',`studentid`='$studid',
                        `subj`='$subj',`subjcode`='$subjcode',`sched`='$sched',`teacher`='$teacher',
                        `fgrading`='$fgrading',`sgrading`='$sgrading',`tgrading`='$tgrading',`rgrading`='$rgrading',
                        `finalgrade`='$fgrade',`remarks`='$remarks' WHERE `subjcode` = '$subjcode'");



                          
                    }
                    else
                    {
                         mysqli_query($conn, "INSERT INTO `tblgrading`(`id`, `studentid`, `subj`, `subjcode`, `sched`, `room`, `teacher`, 
                         `fgrading`, `sgrading`, `tgrading`, `rgrading`, `finalgrade`, `remarks`)
                          VALUES ('$id','$studid','$subj','$subjcode','$sched','$room','$teacher','$fgrading','$sgrading',
                          '$tgrading','$rgrading','$fgrade','$remarks')");

                        
                    }
                }
     
               
                fclose($csvFile);

                        $activity = "INSERT INTO `activitylog`(`user`, `activity`, `date`) VALUES 
                        ('$userid','Imported files in Grades ','$date')";
                        mysqli_query($conn,$activity);

                        echo '<script language="javascript" type="text/javascript">
                        alert("Imported success");
                        window.location = "importGrade.php";
                        </script>';
               
        }
        else
        {
            echo '<script language="javascript" type="text/javascript">
            alert("Please select Valid CSV file to Import");
            window.location = "importGrade.php";
            </script>';
        }

    }

    

?>