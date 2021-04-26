<?php
session_start();
include 'database.php';

if(!empty($_POST)){
	
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = "select * from user where username='".$username."' and password='".$password."'";
	#echo $sql."<br>";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

	// pengecekan query valid atau tidak
	if($query){
		$row = mysqli_num_rows($query);
		
		// jika $row > 0 atau username dan password ditemukan
		if($row > 0){
			$_SESSION['isLoggedIn']=1;
			$_SESSION['username']=$username;
			header( 'Location: index.php' ) ;
		}else{
			echo "username atau password salah";
		}
	}
}
?>
<form action="" method="post">
	<p>
    <tr>
        <td>Username</td> 
        <input type="text" name="username">
    </tr>
	</p>
	<p>
    <tr>
        <td>Password</td>
        <input type="password" name="password">
    </tr>
	</p>
	<p>
		<input type="submit" value="login">
	</p>
</form>
<!-- username: admin
password: password -->