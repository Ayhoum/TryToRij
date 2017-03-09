<!DOCTYPE html><!-- -->
<?php session_start(); ?>

<html lang="en">
<head>
    <title>TryToRij</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="Lib/styles/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Arsenal" rel="stylesheet">
    <link rel="stylesheet" href="./Lib/css/font-awesome.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>

<!--    BODY          -->

<body id="TheBody">
<div class="container" id="back-con">

    <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./"><img src="img/logo250borwhite.png"/>Try To Rij</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> سلة المشتريات</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span>
                        <?php
                        if(isset($_SESSION['email'])){
                            echo $_SESSION['firstname'];
                            echo " ";
                            echo $_SESSION['lastname'];
                        }else{
                            ?> حسابي<?php
                        }?>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if(isset($_SESSION['email'])){ ?>
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> الصفحة الشخصية</a></li>
                            <li><a href="./includes/logout.php"><span class="glyphicon glyphicon-log-out"></span> تسجيل الخروج</a></li>
                        <?php }else{ ?>
                            <li><a href="./Login.php"><span class="glyphicon glyphicon-log-in"></span> تسجيل الدخول</a></li>
                            <li><a href="./SignUp.php"><span class="glyphicon glyphicon-pencil"></span> حساب جديد</a></li>
                        <?php }?>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#contact"><span class="glyphicon glyphicon-question-sign"></span> سؤال وجواب</a></li>
                <li><a href="#contact"><span class="glyphicon glyphicon-ok"></span> الإمتحانات</a></li>
                <li><a href="#about"><span class="glyphicon glyphicon-book"></span> الدروس</a></li>
            </ul>
        </div>
    </nav>
</div>

<div class="container text-center" style="width:80%;">

    <div class="container text-center" id="back-con">

        <iframe width="100%" height="315" src="https://www.youtube.com/embed/keVZSqxrLIE?rel=0" frameborder="0" allowfullscreen></iframe>

    </div>

    <hr id="line-div"/>


    <div class="container" id="back-con">

        <h2 class="text-center">خدماتنا</h2>
        <h4 class="text-center">ماذا نقدم؟</h4>
        <br>
        <div class="col-md-12 text-center">
            <div class="row">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-bullhorn logo-small"></span>
                    <h4>دعم كامل</h4>
                    <p>يمكنكم طرح الأسئلة للإجابة عليها</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-file logo-small"></span>
                    <h4>إمتحانات كاملة</h4>
                    <p>مطابقة للمواصفات المتعارف عليها</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-road logo-small"></span>
                    <h4>دروس نظرية مجانية</h4>
                    <p>مدعمة بالصور والفيديوهات</p>
                </div>
            </div>
            <br>

            <a href="#"><button style="direction:rtl;" class="btn btn-primary btn-lg">قم بالتسجيل!</button></a>
        </div>


    </div>

    <hr id="line-div"/>

    <!-- BOX 1 CONTAINER (THE ROW AND TABEL)-->
    <div class="container" id="back-con">
        <h2 class="text-center">إحصائيات الموقع</h2>
        <div class="col-md-12 text-center">
            <div class="row">
                <div class="col-md-6">



                    <center>
                        <h3>عدد الطلاب الناجحين</h3><br/>


                        <h3><span class="count" id="num">200</span></h3><br/>

                    </center>
                </div>

                <div class="col-md-6">
                    <center>
                        <h3>عدد الطلاب في الموقع</h3><br/>

                        <h3><span class="count" id="num">1000</span></h3><br/>

                    </center>
                </div>
            </div>
        </div>
    </div>

    <hr id="line-div"/>


    <div class="container-fluid bg-grey">
        <h2 class="text-center">شاركنا برأيك</h2>
        <div class="row">
            <div class="col-sm-12">
                <div class="row">

                    <h4 class="text-center" style="direction: rtl">يسعى فريق العمل لتقبل جميع المشاركات والتعليقات بهدف تحسين الخدمات والجودة</h4>

                    <div class="row text-center">
                        <div class="col-sm-12">

                            <div class="col-sm-4 col-xs-6 first-box">
                                <h1><span class="glyphicon glyphicon-earphone logo-small1"></span></h1>
                                <h3>الهاتف</h3>
                                <p id="contact-txt">0680000000</p><br>
                            </div>
                            <div class="col-sm-4 col-xs-6 second-box">
                                <h1><span class="glyphicon glyphicon-home logo-small1"></span></h1>
                                <h3>العنوان</h3>
                                <p id="contact-txt">Groningen, The Netherlands</p><br>
                            </div>
                            <div class="col-sm-4 col-xs-6 third-box">
                                <h1><span class="glyphicon glyphicon-send logo-small1"></span></h1>
                                <h3>البريد الإلكتروني</h3>
                                <p id="contact-txt">info@trytorij.nl</p><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr id="line-div"/>


    <div class="container" id="back-con">

        <h2 class="text-center">من نحن؟</h2>
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators" style="display:none;">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active" style="direction: rtl;">
                    <h4>شركة ناشئة تعمل على توفير الخدمات المختلفة</h4>
                </div>
                <div class="item" style="direction: rtl;">
                    <h4>كل ما تسعى إليه شركتنا هو تقديم المعرفة</h4>
                </div>
                <div class="item" style="direction: rtl;">
                    <h4>تعلم .. تدرب .. اختبر نفسك .. وستنجح!</h4>
                </div>
                <div class="item" style="direction: rtl;">
                    <h4>ترغب بالإنضمام إلينا؟</h4>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br/>
        <br/>
        <br/>
        <div class="col-md-12 text-center">

            <div class="col-md-4">
                <h4>Dev 1</h4>
                <img src="./img/1.png">
            </div>

            <div class="col-md-4">
                <h4>Dev 2</h4>
                <img src="./img/1.png">
            </div>

            <div class="col-md-4">
                <h4>Dev 3</h4>
                <img src="./img/1.png">
            </div>
        </div>

    </div>

    <hr id="line-div"/>

    <div class="container" id="back-con">

        <h2 class="text-center">الشركاء</h2>
        <center>

            <div class="col-md-12 text-center">

                <div class="col-md-2">
                    <h4>Partner 1</h4>
                    <img src="./img/1.png">
                </div>

                <div class="col-md-2">
                    <h4>Partner 2</h4>
                    <img src="./img/1.png">
                </div>

                <div class="col-md-2">
                    <h4>Partner 3</h4>
                    <img src="./img/1.png">
                </div>

                <div class="col-md-2">
                    <h4>Partner 4</h4>
                    <img src="./img/1.png">
                </div>

                <div class="col-md-2">
                    <h4>Partner 5</h4>
                    <img src="./img/1.png">
                </div>

                <div class="col-md-2">
                    <h4>Partner 6</h4>
                    <img src="./img/1.png">
                </div>

            </div>
        </center>
    </div>


    <hr id="line-div"/>

    <div class="container" id="back-con">
        <h2 class="text-center">تواصل معنا</h2>

        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="الاسم" type="text" style="direction:rtl;" required="">
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="البريد الالكتروني" type="email" style="direction:rtl;" required="">
                </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="الرسالة" rows="5" style="direction:rtl;"></textarea><br>
            <div class="row">
                <div class="col-sm-12 form-group text-center">
                    <button class="btn btn-primary btn-lg" style="font-family: 'DroidArabicKufiRegular';" type="submit">إرسال</button>
                </div>
            </div>
        </div>
    </div>


</div>


<!--            FOOTER            -->

<footer id="footer1" class="container-fluid text-center">
    <a href="#TheBody" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p style="direction: rtl">تم تطوير الموقع من قبل: <a href="#">Ayham Najem</a> & <a href="#">Alaa Semsmea</a> & <a href="#">Suleiman Obeid</a> <br>
        .جميع الحقوق محفوظة لشركة <a href="#">SAA</a></p><p style="direction: rtl">&copy;2017</p>
</footer>
</body>
</html>

<script>

    $('.count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

</script>