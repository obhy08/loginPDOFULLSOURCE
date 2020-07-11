<?php
session_start();

if( isset($_SESSION['akses']) )
{
	header('location:'.$_SESSION['akses']);
	exit();
}

$error = '';
if( isset($_SESSION['error']) ) {

 	$error = $_SESSION['error']; 

 	unset($_SESSION['error']);
} ?>

<?php echo $error;?>
<center>
<h2>Form Login</h2>
<form action="check-login.php" method="post">
username :
<input type="text" name="usernamemu" /> <p>
password : 
<input type="password" name="passwordmu" /><p>
<button>Login</button>
</form>
</center>