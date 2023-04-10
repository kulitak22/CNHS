<?php 
    // ===== Connect Database ===== //
    include "includes/database.php";
    session_start();

    // ===== Validating Username & Password ===== //
    if (isset($_POST['username']) && isset($_POST['password'])){
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;

        }
        $username = validate($_POST['username']);
        $password = validate($_POST['password']);

        if (empty($username)) 
        {
            header("Location: index.php?error=username is required");
            exit();
        }
        else if(empty($password))
        {
            header("Location: index.php?error=password is required");
            exit();
        }
        else {
            $sql = "SELECT * FROM tbladmin WHERE user_name='$username' AND password='$password'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
                $_SESSION['teacherid'] = $row['teacherid'];
                $_SESSION['mname'] = $row['mname'];
                $_SESSION['lname'] = $row['lname'];
                $_SESSION['title'] = $row['title'];
                $_SESSION['sy'] = $row['sy'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: superAdmin/adminDashboard.php");
		        exit();
            } 
            else {
                header("Location: index.php?error=Incorrect Username or Password");
                exit();
            }   
        }   
    }else{
        header("Location: index.php?error=Incorrect Username or Password");
        exit();
    }