<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/studLogin.css">


</head>
<body>
<center>


<form  action="slogin.php" method="post" class="formarea">

  <div class="imgcontainer">
    <img src="assets/img/Calbeg.png" alt="Avatar" class="avatar">
  </div>
  <h3>User Login</h3>
  <div class="container">
  <?php if (isset($_GET['error'])) {?>
    <p class="error"><?php echo $_GET["error"]; ?>
    <?php } ?>
    <label class="logintxtOutput">User ID</label>
    <input class="loginInputfield" required name="username" type = "text" placeholder= "Student ID" id= "userName">

    <label class="logintxtOutput">Password</label>
    <input class="loginInputfield" required name="password" type = "password" placeholder= "Password" id= "passWord">

    <button class="btnLogin" type="submit">Login</button>
      

  </div>
</form>
<center>

</body>
</html>
