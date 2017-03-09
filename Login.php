<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 19-2-2017
 * Time: 23:20
 */
require 'Lib/Bootstarp_code.php';
?>
<html>
<body>
<div class="container-fluid">
    <form action="includes/login.php" method="post">
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
