<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 19-2-2017
 * Time: 23:20
 */
require 'Lib/Bootstarp_code.php';
?>
<?php include "Lib/Connect_DB.php"; ?>
<?php
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM customer WHERE user_email = '{$email}' AND user_password = '{$password}'";
    $result =  mysqli_query($connection, $query);
    if(!$result){
        die("Failed" . mysqli_error($connection));
    }
    if(mysqli_num_rows($result) >0 ) {
        header("location: index.php");
    }else{
        header("location: Login.php");
    }
}
?>
<html>
<body>
<div class="container-fluid">
    <form action="Login.php" method="post">
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
                <input type="submit" name="login" class="btn btn-lg btn-default btn-block" value="Login">
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
