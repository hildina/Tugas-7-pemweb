<?php
session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];

if($isLoggedIn != '1'){
	session_destroy();
	header('Location: login.php');
}
?>

<h1>Selamat Datang <?php echo $username;?></h1>
<p><a href="logout.php">Logout</a></p>