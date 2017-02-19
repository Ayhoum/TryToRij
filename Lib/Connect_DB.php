<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 19-2-2017
 * Time: 20:26
 * This page includes the connection code to the Database; you can add it to your page directly.
 */
?>
<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "trytorij";

$connection = mysqli_connect($dbhost,$dbuser,$dbpass, $dbname);

if (mysqli_connect_error())
{
    die ("connection to database failed: " . mysqli_connect_errno());
}
?>