<?php include "../Lib/Connect_DB.php"; ?>
<?php session_start(); ?>
<?php
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);
    $query = "SELECT * FROM customer WHERE user_email = '{$email}' AND user_password = '{$password}'";
    $result =  mysqli_query($connection, $query);
    if(!$result){
        die("Failed" . mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($result)){
        $db_user_id = $row['user_id'];
        $db_user_firstname = $row['user_firstname'];
        $db_user_lastname = $row['user_lastname'];
        $db_email = $row['user_email'];
    }

    if(mysqli_num_rows($result) >0 ) {
        $_SESSION['email'] = $db_email;
        $_SESSION['firstname'] = $db_user_firstname;
        $_SESSION['lastname'] = $db_user_lastname;
        header("location: ../After_Login.php");
    }else{
        header("location: Login.php");
    }
}
?>
