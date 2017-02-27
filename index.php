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




    <!-- STYLE -->
    <style>

        /* Remove the jumbotron's default bottom margin */
        .jumbotron {
            margin-top: -3%;
            height: 10%;
            margin-bottom: -3%;
            font: 25px 0 bold;


        }
        .jumbotron #img-logo{
            margin-left:-3%;
            width: 100px;
            height: 100px;
        }


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

        .container{
   padding: 0px;

        }








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

        .progress{
            width: 35%;
            margin-left:45%;
            margin-top: -10%;

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

<div class="container" style="width: 100%;">

    <div class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid ">
            <div class="navbar-header pull-right ">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar "></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span></a>
            </div>
            <div class="collapse navbar-collapse " id="myNavbar">
                <ul class="nav navbar-nav pull-right">
                    <li><a href="#">الدروس</a></li>
                    <li><a href="#">الامتحانات </a></li>
                    <li><a href="#">تواصل معنا</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> الحساب الشخصي</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> سله الشراء</a></li>
                </ul>
            </div>
        </div>
</div>
<div class="container">
    <div class="container text-center">
        <img class=".img-responsive" src="img/logo250.png">


        <div class="container">
            <div class="row row-centered">
                <div class="col-md-12 col-centered">

                    <h1>Try To Rij</h1>
                </div>


                </div>

            </div>
        </div>


</div><!-- jumbotron -->


<!-- BOX 1 CONTAINER (THE ROW AND TABEL)-->
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-warning">
                <div class="panel-heading ">Lessen</div>
                <div class="panel-body"><img src="img/road-signs.png" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="caption">
                    <h3> Thorie</h3>
                    <p>Driving is one of the most useful skills in the world. But before you begin to drive, remember that driving is a privilege, not a right,
                        and that you should learn how to be a responsible driver before you put your keys in the ignitio</p>

                    <p><a href="#" class="btn btn-warning " role="button">GO</a> </p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-danger">
                <div class="panel-heading">Toetsen</div>
                <div class="panel-body"><img src="img/Best-Keyboard-for-Fast-Typing.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="caption">
                    <h3>Toetsen</h3>
                    <p>re of the rules of driving and the basic safety precautions you should take as a responsible driver. It's much more advisable to learn the
                        rules before you get behind the wheel so you don't wing it and make mistakes as...  </p>

                    <p><a href="#" class="btn btn-danger " role="button">Test</a> </p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-success">
                <div class="panel-heading">Upgrade</div>
                <div class="panel-body"><img src="img/time-to-upgrade.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="caption">
                    <h3>Upgrade  </h3>
                    <p> ages of 14 and 18) and what you need to do to get it. [1] Here are some general guidelines:
                        If you're a minor, you'll need the signature of your parent or guardian.You'll have to pass a written test about driving rules.
                    </p>
                    <p><a href="#" class="btn btn-success" role="button">up</a></p>
                </div>

            </div>
        </div>
    </div>
</div><br>



<!-- BOX2 THE BLOG CONTAINER -->


<div class="box2-blog">

    <div class="col-md-9 blogShort">
        <h1>Meeste Gestelde Varagen</h1>
        <img src="#" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">

        <em>This was relevent to <a href="#" target="_blank">'here should be a link'</a></em>
        <article><p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                Lorem Ipsum.
            </p>
            <p></p>
        </article>
        <a class="btn btn-blog pull-right marginBottom10" href="#">More Information</a>
    </div>
    <div class="col-md-9 blogShort">
        <h1>Title 2</h1>
        <img src="#" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">
        <article><p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                Lorem Ipsum.
            </p></article>
        <a class="btn btn-blog pull-right marginBottom10" href="#">READ MORE</a>
    </div>

    <div class="col-md-9 blogShort">
        <h1>Title 3</h1>
        <img src="#" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">
        <article><p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                Lorem Ipsum.
            </p></article>
        <a class="btn btn-blog pull-right marginBottom10" href="#">READ MORE</a>
    </div>

    <div class="col-md-12 gap10"></div>
</div>





<!-- Box 3   progress and the userphoto-->

<div class="box3-parent">
    <div class="box3-child1">
        <button type="button"   href="SignIn.html" class="btn btn-warning" >LOGIN</button>
        <button type="button" class="btn btn-success">GaDoor</button>
    </div>

    <div class="box3-child2">
        <div class="user-home-photo">
            <img src="img/user-male-shape-in-a-circle--ios-7-interface-symbol_318-35357.png" class="img-circle" alt="Cinque Terre" width="104" height="96">
        </div>

        <div class="progress">
            <div class="progress-bar progress-bar-danger" style="width: 35%">
                <span class="sr-only">35% Complete (danger)</span>
            </div>
            <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 20%">
                <span class="sr-only">20% Complete (warning)</span>
            </div>
            <div class="progress-bar progress-bar-success" style="width: 10%">
                <span class="sr-only">10% Complete (success)</span>
            </div>
        </div>

    </div><!-- child -->
    <div id="clear"></div> <!-- clear -->
</div><br><!-- parent -->

</div>
<!--            FOOTER            -->

<footer class="container-fluid text-center">
    <a href="#TheBody" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p> &copy; SAA <a href="https://www.w3schools.com" title="link to somthing"> ---- </a></p>
</footer>

</body>
</html>
