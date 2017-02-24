<!DOCTYPE html>
<html lang="en">
<head>
    <title>TryToRij - Buying</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Lib/style.css">
    <style>
        /* Remove the navbar's default rounded borders and increase the bottom margin */
        .navbar {
            margin-bottom: 50px;
            border-radius: 0;
        }

        /* Remove the jumbotron's default bottom margin */
        .jumbotron {
            margin-bottom: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
    </style>
</head>
<body>

<div class="jumbotron">
    <div class="container text-center">
        <h1>Online Store</h1>
        <p>Mission, Vission & Values</p>
    </div>
</div>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Lessons</a></li>
                <li><a href="#">Exams</a></li>
                <li><a href="#">Questions</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo " Username"; ?></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
            </ul>
        </div>
    </div>
</nav>


<div id="pricing" class="container-fluid">
    <div class="text-center">
        <h2>قم بشراء المزيد من الامتحانات</h2>
        <h4>اختر ما يناسبك من باقاتنا</h4>
    </div>
    <div class="row slideanim">
        <div class="col-sm-4 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>الباقة الابتدائية</h1>
                </div>
                <div class="panel-body">
                    <p>الامتحانات<strong> الأول والثاني </strong>مجاناً</p>
                    <p>الامتحانات<strong> الثالث والرابع</strong></p>
                    <p><strong>مدى الحياة</strong></p>
                </div>
                <div class="panel-footer">
                    <h3>20 €</h3>
                    <h4>لمرة واحدة</h4>
                    <button class="btn btn-lg">اختر</button>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>الباقة المتوسطة</h1>
                </div>
                <div class="panel-body">
                    <p>الامتحانات<strong> الأول والثاني </strong>مجاناً</p>
                    <p>الامتحانات<strong>الثالث والرابع والخامس والسادس</strong></p>
                    <p><strong>مدى الحياة</strong></p>
                </div>
                <div class="panel-footer">
                    <h3>35 €</h3>
                    <h4>لمرة واحدة</h4>
                    <button class="btn btn-lg">اختر</button>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>الباقة الكاملة</h1>
                </div>
                <div class="panel-body">
                    <p>الامتحانات<strong> الأول والثاني </strong>مجاناً</p>
                    <p>الامتحانات<strong>كاملة</strong></p>
                    <p><strong>مدى الحياة</strong></p>
                </div>
                <div class="panel-footer">
                    <h3>50 €</h3>
                    <h4>لمرة واحدة</h4>
                    <button class="btn btn-lg">اختر</button>
                </div>
            </div>
        </div>
    </div>
</div>


<br><br>

<footer class="container-fluid text-center">
    <p>Online Store Copyright</p>

</footer>

</body>
</html>
