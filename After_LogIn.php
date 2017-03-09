<!DOCTYPE html><!-- -->
<?php session_start(); ?>

<?php if(!isset($_SESSION['email'])){
    header("location: ./index.php");
}?>


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


</head>


<!--   the  BODY          -->

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
<!-- Custom content-->

<div class="container">
    <div class="text-center">
        <h1>أقسام الموقع</h1>
        <br/>
    </div>
    <div class="row">
        <div class="col-md-12" style="direction:rtl;">

            <div class="col-lg-4 pull-right">
                <div class="thumbnail text-center">
                    <h3>المنهاج النظري لتعلم القيادة</h3>
                    <img src="img/lessons.png" alt="lessen">
                    <div class="caption">
                        <p id="p-sec">عليك التركيز على الكثير من الأمور لتحصل على رخصة القيادة الخاصة بك، وأول خطوة في هذا الطريق هو النجاح في الإمتحان النظري للقيادة.<br/>من خلال المنهاج المطروح على موقعنا يمكنك تعلم كل ما تحتاجه لتجتاز الإمتحان ومجاناً!</p>
                        <p><a href="#" class="btn btn-primary" id="btn-sec" role="button">ابدأ التعلم</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 pull-right">
                <div class="thumbnail text-center">
                    <h3>الإمتحانات</h3>
                    <img src="img/exams.png" alt="toetsen">
                    <div class="caption">
                        <p id="p-sec">لتختبر نفسك قبل الذهاب إلى الإمتحان، قمنا بتطوير بيئة مشابهة لبيئة الإمتحانات في مراكز التقديم، وقمنا بإعداد عدد من الإمتحانات التي يمكنك التدرب عليها قبل الذهاب إلى الإمتحان الرسمي!</p>
                        <p><a href="#" class="btn btn-primary" id="btn-sec" role="button">ابدأ بالتدريب</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pull-right">
                <div class="thumbnail text-center">
                    <h3>سؤال وجواب</h3>
                    <img src="img/qa.png" alt="upgrade">
                    <div class="caption">

                        <p id="p-sec">لا بد وأن تواجه بعض الأسئلة، سواء على صعيد الدروس أو الإمتحانات، في هذا القسم يمكنك طرح أسئلتك كل حسب القسم المختص به.<br/>يمكنكم الاستفادة من إجابات المتدربين الآخرين، ومن إجابات فريق عمل الموقع أيضاً.</p>
                        <p><a href="#" class="btn btn-primary" id="btn-sec" role="button">اطرح سؤالاً</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<hr id="line-div"/>
<!--blog-->

<div class="container" style="direction:rtl;">
    <div class="text-center">
        <h1>الأسئلة التي قمت بسؤالها سابقاً</h1>
        <br/>
    </div>
    <div class="span8">

        <div class="container">
            <h3>الوقوف والتوقف العادي والمفاجئ!</h3>
            <p>
                يقوم الفاحص بمراقبة وتقييم مهارات الوقوف العادي والوقوف المفاجئ ويراقب الفاحص المتقدم للفحص كيف يقوم بتنفيذ المهارة في إجراءات الوقوف العادي إضافة إلى الوقوف المفاجئ حيث يقوم الفاحص فجأة بطلب الوقوف بسرعة وعلى المتقدم للفحص
                إن يحسسن تطبيق الوقوف وفي حال عدم قيام المتدرب بالعملية حسب المطلوب يمكن إن يقوم الفاحص بإتمام الوقوف بشكل امن

            </p>
            <div>
                <span class="badge badge-success">نشر بتاريخ: 2012-08-02 || الساعة: 20:47:04</span><div class="pull-left"><a href="#" class="btn btn-success" role="button">اقرأ المزيد</a></div>
            </div>
        </div>
        <hr>
        <div class="container">
            <h3>الوقوف والتوقف العادي والمفاجئ!</h3>
            <p>
                يقوم الفاحص بمراقبة وتقييم مهارات الوقوف العادي والوقوف المفاجئ ويراقب الفاحص المتقدم للفحص كيف يقوم بتنفيذ المهارة في إجراءات الوقوف العادي إضافة إلى الوقوف المفاجئ حيث يقوم الفاحص فجأة بطلب الوقوف بسرعة وعلى المتقدم للفحص
                إن يحسسن تطبيق الوقوف وفي حال عدم قيام المتدرب بالعملية حسب المطلوب يمكن إن يقوم الفاحص بإتمام الوقوف بشكل امن

            </p>
            <div>
                <span class="badge badge-success">نشر بتاريخ: 2012-08-02 || الساعة: 20:47:04</span><div class="pull-left"><a href="#" class="btn btn-success" role="button">اقرأ المزيد</a></div>
            </div>
        </div>
        <hr>
    </div>
</div>





<div class="container">
    <div class="row-fluid">
        <div class="col-md-12">
            <div class="col-md-4">
                <ul class="thumbnails">
                    <div style="padding:4px">
                        <img alt="300x200" style="max-width:200px" src="img/user.png">
                    </div>
                </ul>

            </div>

            <div class="col-md-8">
                <ul class="thumbnails">
                    <div class="span4">
                        <h4>مستوى التعلم</h4>
                        <div class="progress progress-striped active">
                            <div class="bar btn btn-success" style="width:50%"></div>
                        </div>
                        <p>
                            <button class="btn btn-primary" type="button">تعديل الصفحة الشخصية</button>
                            <button class="btn btn-success" type="button">شراء إمتحانات</button>
                        </p>
                    </div>
                </ul>
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