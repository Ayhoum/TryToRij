<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 19-2-2017
 * Time: 23:20
 */
require_once 'Lib/Connect_DB.php';
require 'Lib/Bootstarp_code.php';
?>
<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = 'SELECT * FROM `customer` WHERE Email = "'.$email.'" And Password = "'.$password.'"';
    $result =  mysqli_query($connection, $query);
    if(mysqli_num_rows($result) == 1) {
        header('location: google.com');
    }
    else {
        echo '<script>alert("Email or password is invalid")</script>';
        echo '<script>Login.php"</script>';
    }
}
?>
<html>
<body>
<div class="container-fluid">
    <form method="post" action="Login.php">
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
                <a href="" class="btn btn-lg btn-default btn-block">Register</a>
            </div>
        </div>
        <hr class="colorgraph">
    </form>

</div>

</body>
</html>
