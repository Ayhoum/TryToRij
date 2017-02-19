<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 19-2-2017
 * Time: 20:50
 * This is Sign in Page; where the customer can make an account into the website.
 */
require 'Lib/Bootstarp_code.php';
require 'Lib/Connect_DB.php';

	if(isset($_POST['submit'])) {
        // check if both email and password are match.
        $email1    = $_POST['email1'];
        $email2    = $_POST['email2'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        if ($email1 == $email2) {
            if ($password1 == $password2) {
                //convert_data to strings:
                $first_name = $_POST['first_name'];
                $last_name  = $_POST['last_name'];
                $date       = $_POST['date_of_birth'];
                $email1     = $_POST['email1'];
                $password1  = $_POST["password1"];
                $phone      = $_POST['phone'];

                //Insert Customer into database::
                $query  = "INSERT INTO `costumer`(`First_Name`, `Last_Name`, `Password`, `Email`, `Date_Of_Birth`, `Mobile_Number`) VALUES 
		      	('".$first_name."', '".$last_name."', '".$date."', '".$email1."', '".$password1."', '".$phone."')";
                $result =  mysqli_query($connection, $query);
                if (!$result) {
                    die("Database query failed");
                }

                if (!$result) {
                    die("Database query1 failed");
                }
                // check is the user is exsit::
                $query1 = "SELECT * FROM `COSTUMER` WHERE `Email` = '$email1'";
                $result = mysqli_query($connection, $query1);

                if (mysqli_num_rows($result) > 0 ) {
                    echo "Sorry this user is already exists. ";
                    exit();
                }

            } else {
                echo "Sorry, your passwords do not match";
                exit();
            }

        } else {
            echo "Sorry, your emails do not match";
        }



    } else {
	    echo " something wrong ";

    }
?>
    <html lang="en">

    <title>Register</title>
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-1">
                <h3>Create an account</h3>
            </div>
        </div>
        <hr>
        <form id="register-form" method="post" action="">
            <div class="messages"></div>
            <div class="controls">
                <!-- First name -->
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-4">

                            <label for="form_name">First name</label>
                            <input id="form_name" type="text" name="first_name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <!-- Last name -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="form_lastname">Last name</label>
                            <input id="form_lastname" type="text" name="last_name" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <!-- birthdate -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="form_date_of_birth">Date of Birth </label>
                            <input id="form_date_of_birth" type="date" name="date_of_birth" class="form-control" placeholder="DD-MM-YYYY" >
                        </div>
                    </div>
                </div>
                <!-- Phone Number -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="form_lastname">Phone Number</label>
                            <input id="form_lastname" type="text" name="phone" class="form-control" placeholder="Please enter your phone number *" required="required" data-error="Lastname is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <!-- Email -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="form_email">Email</label>
                            <input id="form_email" type="email" name="email1" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <!-- Email confirmation-->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="form_email">Email Confirmation</label>
                            <input id="form_email" type="email" name="email2" class="form-control" placeholder="Please confirm your email *" required="required" data-error="Valid email is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <!-- Password -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <div class="controls">
                                <input type="password" id="password" name="password1" placeholder="" class="input-xlarge">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Password confirmation -->
                <div class="control-group">
                    <label class="control-label"  for="password_confirm">Password Confirmation</label>
                    <div class="controls">
                        <input type="password" id="password_confirm" name="password2" placeholder="" class="input-xlarge">
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-default btn-send" value="Send">
            </div>
        </form>
    </div>
    </body>
    </html>
<?php
mysqli_close($connection);
?>