<?php  
class UsersController
{
	public function login() {
		User::loginn();
		include('views/user/login.php');
	}

	public function register() {
		User::save();
		include('views/user/register.php');
	}

	public function logout() {
		session_destroy();
		include('views/user/logout.php');
		exit;
	}

	public function success() {
		include('views/user/success.php');
	}
}
?>