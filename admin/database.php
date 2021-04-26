<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "admin";

$koneksi = mysqli_connect($host, $user, $pass, $db_name)
// mysqli_connect($host, $user, $pass) or die (mysql_error());
// mysqli_select_db($db_name) or die (mysql_error());
// ?>