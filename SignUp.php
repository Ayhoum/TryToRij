<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 27-2-2017
 * Time: 21:09
 */
include 'Lib/Connect_DB.php';
include 'Lib/Bootstarp_code.php';
?>
<?php
if(isset($_POST['signup'])) {
    $first_name  = $_POST['first_name'];
    $last_name   = $_POST['last_name'];
    $email1      = $_POST['email'];
    $password1   = $_POST['user_password'];
    $phone       = $_POST['contact_no'];

    //Insert the data into Customer table.
    $query = "INSERT INTO customer (user_firstname, user_lastname, user_email, user_password, user_phone)
             VALUES ('{$first_name}' , '{$last_name}' ,'{$email1}' ,'{$password1}' ,'{$phone}')";

    $result =  mysqli_query($connection, $query);
    if(!$result)
    {
        die("Failed" . mysqli_error($connection));
    }
}

?>
    <html>
    <head>
        <script type="text/javascript" src="Lib/scripts/signup.js"></script>
    <style>
        #success_message{ display: none;}
    </style>
    </head>

    <body>

    <form class="well form-horizontal" action=" SignUp.php" method="post"  id="contact_form">
        <fieldset>

            <!-- Form Name -->
            <legend><center><h2><b>Registration Form</b></h2></center></legend><br>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">الاســــــم</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="first_name" placeholder="قــم بادخـــال اسمـك" class="form-control"  type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label" >الكنيــــة</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="last_name" placeholder="قــم بادخـــال كنيتــك" class="form-control"  type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">البــــريد الالكتــروني</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="email" placeholder="قــم بادخــال برديك الالكترونـــي" class="form-control"  type="text">
                    </div>
                </div>
            </div>


            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label" >كلمـــة الســـر </label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="user_password" placeholder="قــم بادخــال كلمة سر " class="form-control"  type="password">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label" >تـــأكيد كلمـــة الســر</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="confirm_password" placeholder="قم بتـاكيد كلمة السر الخاصة بك" class="form-control"  type="password">
                    </div>
                </div>
            </div>



            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label"> رقــم الهاتف</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input name="contact_no" placeholder="قــم بادخــال رقــم هاتفك" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- Select Basic -->

            <!-- Success message -->
            <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4"><br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit"  name="signup" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                </div>
            </div>

        </fieldset>
    </form>
    </div>

    </body>

    </html>
<?php
mysqli_close($connection);
?>