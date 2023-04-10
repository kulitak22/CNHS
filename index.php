<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>CNHS</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="assets/css/style1.css">
  <style>
.dropbtn {
  background-color: #238806;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: rgb(0, 255, 34)!important;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
</head>
    
    
    
<body class="main">
    <center>
      <div class="container">
        <div class="subcontainer">
            <image class="banner" src="assets/img/Calbeg.png"></image>
        </div>
    
        <form action="login.php" method="post">
        <div class="logincontainer">
            <h1 class="userLogins" style="font-family: cursive;">Admin Login</h1>
            <?php if (isset($_GET['error'])) {?>
              <p class="error"><?php echo $_GET["error"]; ?>
            <?php } ?>
            <label class="logintxtOutput">Admin ID</label>
            <input class="loginInputfield" required name="username" type = "text" placeholder= "Admin ID" id= "userName">

            <label class="logintxtOutput">Password</label>
            <input class="loginInputfield" required name="password" type = "password" placeholder= "Password" id= "passWord">

            <button class="btnLogin" type="submit">Login</button>
        </div>
        <div class="dropdown" style="margin-top:20px;">
                <div onclick="myFunction()" class="dropbtn">Change User</div>
                <div id="myDropdown" class="dropdown-content">
                  <a href="teacherlogin.php">Teacher</a>
                  <a href="index.php">Admin</a>
        </div>
           
        </div>
        </form>
        <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
        
      </div>
    </center>
</body>

    
</html>