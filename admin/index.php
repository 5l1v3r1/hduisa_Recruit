<?php 
    session_start();
    if(isset($_SESSION['username'])&&(!empty($_SESSION['username']))){
        header("Location:user.php");
    }
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>用户登陆</title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/LoRexxar.css">
    <link rel="stylesheet" href="../css/styles.css"> 
</head>
<body style="background-color: black">

<div class="container back" style="height: 100vh; width: 100vw; background-image:url('../img/isa1.jpg');background-position: center;background-repeat:  no-repeat; background-size: cover;">
    <!-- body -->
    <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                  <h1 class="white">HDUISA招新系统</h1>
                  <h2 class="animated fadeInUp delay-05s white">Just find something</h2>
                </div>
    </div>

    <form id="login-form" class="form-signin center" action="reg.php" method="POST">
        <div class="row" style="margin-left:50px;">
        <h4 class="white">username:</h4>
        <input type="text" maxlength="20" style="width:400px;" class="form-control" name="username" placeholder="Username">
        </div>

        <div class="row" style="margin-left:50px;">
        <h4 class="white">password:</h4>
        <input type="password" maxlength="20" style="width:400px;" class="form-control" name="password" placeholder="Password">
        </div>

        <input style="display:inline; margin-left:130px" type="button" value="login" onclick="login()" />
        <input type="button" style="display:inline; margin-left:20px" value="register" onclick="window.location.href='./register.html'">
    </form>
    <div class="row" role="alert" style="text-align:center;"><p id = "msg"></p></div>

</div>

<script src="http://cdn.bootcss.com/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="../js/Undefined.js"></script>
</body>
</html>
