<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 27-2-2017
 * Time: 21:09
 */
include 'Lib/Connect_DB.php';
?>
<?php
if(isset($_POST['signup']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone= $_POST['phone_number'];

    $query = "INSERT INTO customer (user_firstname, user_lastname, user_email, user_password, user_phone)
             VALUES ('{$first_name}' , '{$last_name}' ,'{$email}' ,'{$password}' ,'{$phone}')";

    $result =  mysqli_query($connection, $query);
    if(!$result)
    {
        die("Failed" . mysqli_error($connection));
    }
}
?>
<div class='container-fluid' align="center">
    <h2>Sign Up</h2>
    <form name="singup" action="SignUp.php" method="post">
        <input name='first_name' placeholder='First Name' type='text'></br>
        <input name='last_name' placeholder='Last Name' type='text'></br>
        <input name='email'  placeholder='E-Mail Address' type='text'></br>
        <input name='email1' placeholder='E-Mail Address Conformation' type='text'></br>
        <input name='password' placeholder='Password' type='password'></br>
        <input name='password1' placeholder='Password Conformation ' type='password'></br>
        <input name='phone_number' placeholder='Phone Number ' type="number"></br>
        <input type='submit' name="signup" value='Register'>
    </form>
    <a class='forgot' href='#'>Already have an account?</a>
</div>

<?php

?>