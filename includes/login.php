<?php include "../Lib/Connect_DB.php"; ?>
<?php
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM customer WHERE user_email = '{$email}' AND user_password = '{$password}'";
    $result =  mysqli_query($connection, $query);
    if(!$result){
        die("Failed" . mysqli_error($connection));
    }
    if(mysqli_num_rows($result) == 1) {
        header("location: ../index.php");
    }else{
        header("location: ../Login.php");
    }
}
?>