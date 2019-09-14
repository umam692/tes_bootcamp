<?php 

// public function setUsername($value='')
// {
// 	# code...
// }

	// $username = '@sony';
	$username = 'Ayu99v';
	
	// $password = md5($_POST['password']);

	// $ismatch = preg_match("[pattern]", subject);
	$match_username = "/^([a-zA-Z])([a-zA-Z0-9]){5,9}$/";

	if (preg_match($match_username, $username)) {
		echo 'benar <br>';
	}else{
		echo 'salah';
	}

	$password = "p@ssW0rd#";
	// $password = "C0d3YourFuture!#";

	$match_password = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@])(?=.*[!#\$%\^&\*])(?=.{8,})/";

	if (preg_match($match_password, $password)) {
		echo 'benar';
	}else{
		echo 'salah';
	}


 ?>
