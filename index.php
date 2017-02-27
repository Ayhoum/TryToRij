<!DOCTYPE html><!-- -->
<html lang="en">
<head>
    <title>TryToRij</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="Lib/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Arsenal" rel="stylesheet">
    <link rel="stylesheet" href="./Lib/css/font-awesome.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- STYLE -->
    <style>



        @keyframes move {
            0%  { top: 0px; }
            20% { top: -50px; }
            40% { top: -100px; }
            60% { top: -150px; }
            80% { top: -200px; }
        }




        /* Remove the navbar's default rounded borders and increase the bottom margin */
        /*.navbar {*/

            /*margin-bottom: 5%;*/
            /*border-radius: 30px;*/
        /*}*/









        /*  BOX2 */

        .box2-blog{
            width: 70%;
            background-color: blue;
            height: 20%;
            margin-top: 5%;
            margin-left:25%;
        }

        .blogShort{ border-bottom:1px solid #ddd;}
        .add{background: #333; padding: 10%; height: 300px;}


        .btn-blog {
            color: #ffffff;
            background-color: darkred ;
            border-color: darkred;
            border-radius:0;
            margin-bottom:10px
        }

        .btn-blog:hover,
        .btn-blog:focus,
        .btn-blog:active,
        .btn-blog.active,
        .open .dropdown-toggle.btn-blog {
            color: white;
            background-color:#34ca78;
            border-color: #34ca78;
        }
        h2{color:#34ca78;}
        .margin10{margin-bottom:10px; margin-right:10px;}







        /* BOX3 */

        .box3-parent{

            width: 70%;
            margin: auto;
            margin-top: 40%;



        }

        .box3-child1{
            width: 40%;
            float: right;
            height: 300px;
            padding: 9%;


        }


        .box3-child2{
            width: 25%;
            width: 30%;
            float: right;
            height: 300px;

        }

        #clear {
            clear:both;
        }



        .user-home-photo{
            width: 25%;
            margin-left: 15%;
            margin-top: 20%
        }
        /* FOOTER */

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
            margin-top: 15%;


        }
    </style>
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
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span> حسابي</a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-pencil"></span> حساب جديد</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> تسجيل الدخول</a></li>
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

<div class="container" id="back-con">
    <div class="container text-center">

<iframe width="100%" height="315" src="https://www.youtube.com/embed/keVZSqxrLIE?rel=0" frameborder="0" allowfullscreen></iframe>

    </div>
</div>

<hr id="line-div"/>


<div class="container" id="back-con">
    <div class="container text-center">
        <div class="container-fluid text-center">
            <h2>الخدمات</h2>
            <h4>ماذا نقدم؟</h4>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-earphone logo-small"></span>
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

            <a href="#"><button class="btn btn-primary btn-lg">قم بالتسجيل!</button></a>

        </div>


        <div class="container">
            <div class="row row-centered">
                <div class="col-md-12 col-centered">

                </div>


                </div>

            </div>
        </div>


</div>

<hr id="line-div"/>

<!-- BOX 1 CONTAINER (THE ROW AND TABEL)-->
<div class="container">
    <div class="row">
        <div class="col-md-6">
<center>
    <h3><span class="count">1000</span></h3><br/>
    <h3><span class="count">200</span></h3><br/>
</center>

        </div>
        <div class="col-md-6">
            <center>
                <h3>عدد الطلاب في الموقع</h3><br/>
                <h3>عدد الطلاب الناجحين</h3><br/>
        </center>
    </div>
</div>
</div>

<hr id="line-div"/>


<div class="container-fluid bg-grey">
    <h2 class="text-center">تواصل معنا</h2>
    <div class="row">
        <div class="col-sm-12">
            <div class="row">

            <center>
            <h4 style="direction: rtl">نسعى لتقبل جميع المشاركات منكم وسنقوم بالرد عليكم خلال 24 ساعة</h4>
            <h4>Groningen, The Nerherlands <span class="glyphicon glyphicon-map-marker"></span></h4>
            <h4>+31 6 80000000 <span class="glyphicon glyphicon-phone"></span></h4>
            <h4>info@trytorij.nl <span class="glyphicon glyphicon-envelope"></span></h4>

                <a href="#"><button class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-envelope"></span> تواصل معنا</button></a>

            </center>
        </div>
    </div>
</div>
</div>
<hr id="line-div"/>


<div class="container" id="back-con">
    <div class="container text-center">

        <h2>من نحن؟</h2>
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active" style="direction: rtl;">
                    <h4>مجموعة من الشباب تعمل على تأمين الخدمات المختلفة</h4>
                </div>
                <div class="item" style="direction: rtl;">
                    <h4>كل ما نسعى لتقديمه هو المعرفة</h4>
                </div>
                <div class="item" style="direction: rtl;">
                    <h4>تعلم .. تدرب .. اختبر نفسك .. وستنجح!</h4>
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
    </div>
</div>

<!--            FOOTER            -->

<footer id="footer1" class="container-fluid text-center">
    <a href="#TheBody" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p style="direction: rtl">تم تطوير الموقع من قبل: <a href="#">SAA</a>.جميع الحقوق محفوظة لشركة SAA</p><br/><p style="direction: rtl">&copy;2017</p>
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