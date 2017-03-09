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
<head>
    <title>TryToRij - Log In</title>
    <link rel="stylesheet" href="./Lib/css/font-awesome.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./Lib/styles/login-style.css">
    <script src="Lib/scripts/login.js"></script>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>

</head>
<body>
<!--<div class="container-fluid">-->
<!--    <form action="includes/login.php" method="post">-->
<!--        <h2>Please Login </h2>-->
<!--        <hr class="colorgraph">-->
<!--        <div class="form-group">-->
<!--            <input type="email" name="email" class="form-control input-lg" placeholder="Email Address">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <input type="password" name="password" class="form-control input-lg" placeholder="Password">-->
<!--        </div>-->
<!--        <hr class="colorgraph">-->
<!--        <div class="row">-->
<!--            <div class="col-xs-6 col-sm-6 col-md-6">-->
<!--                <input type="submit" name="login" class="btn btn-lg btn-default btn-block" value="Login">-->
<!--            </div>-->
<!---->
<!--            <div class="col-xs-6 col-sm-6 col-md-6">-->
<!--                <a href="" class="btn btn-lg btn-default btn-block">Register</a>-->
<!--            </div>-->
<!--        </div>-->
<!--        <hr class="colorgraph">-->
<!--    </form>-->
<!--</div>-->

<div class="container" style="direction: rtl;">
    <div class="row main">
        <div class="panel-heading">
            <div class="panel-title text-center">
                <center><img class="img-responsive" src="img/logo250.png"></center>
                <h2 class="title">يرجى تسجيل الدخول</h2>
                <hr />
            </div>
        </div>
        <div class="main-login main-center">
            <form class="form-horizontal" method="post" action="includes/login.php">
                <div class="form-group">
                    <label for="username" class="cols-sm-2 control-label">البريد الإلكتروني</label>
                    <div class="cols-sm-10">
                        <div class="input-group" dir="ltr">
                            <input type="email" dir="rtl" class="form-control" name="email" id="username"  placeholder="أدخل البريد الإلكتروني"/>
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">كلمة المرور</label>
                    <div class="cols-sm-10">
                        <div class="input-group" dir="ltr">
                            <input type="password" dir="rtl" class="form-control" name="password" id="password"  placeholder="أدخل كلمة المرور"/>
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <button type="submit" name="login" class="btn btn-primary btn-lg btn-block login-button">تسجيل الدخول</button>
                </div>
                <div class="login-register">
                    <a href="SignUp.php">إنشاء حساب</a> أو <a href="reset_password.php">إستعادة كلمة المرور</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="assets/js/bootstrap.js"></script>

</body>
</html>