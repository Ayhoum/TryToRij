<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 19-2-2017
 * Time: 20:50
 * This is the Login page; here can the user/admin login to his/her own homepage.
 */
require 'Lib/Bootstarp_code.php';
require 'Lib/Connect_DB.php';
		session_start();

		if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $query = 'SELECT * FROM `CUSTOMER` WHERE email = "'.$email.'" AND Password= "'. $password.'" ';
            $result =  mysqli_query($connection, $query);
            if(mysqli_num_rows($result) == 1) {
                $_SESSION['email'] = $email;
                $_SESSION['logged']="1";
                header('location: google.nl');
            }
            else {
                echo '<script>alert("Email or password is invalid ")</script>';
                echo '<script>Login.php"</script>';
            }
        }
	?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <form 0 method="post" action="login.php">
        <fieldset>
            <h2>Please Login </h2>
            <hr class="colorgraph">
            <div class="form-group">
                <input type="email" name="email" class="form-control input-lg" placeholder="Email Address">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control input-lg" placeholder="Password">
            </div>
            <hr class="colorgraph">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <input type="submit" name="submit" class="btn btn-lg btn-default btn-block" value="Login">
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <a href="signin.php" class="btn btn-lg btn-default btn-block">Register</a>
                </div>
            </div>
            <hr class="colorgraph">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <a href="admin/admin_login.php" class="btn btn-lg btn-default btn-block">Admin</a>
        </fieldset>
    </form>
</div>
</body>

</html>
