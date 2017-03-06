<?php
class User
{
	public $id;
	public $username;
	public $password;
	public $name;
	public $phone;
	public $mail;

	function __construct($id, $username, $password, $name, $phone, $mail)
	{
		$this->id = $id;
		$this->username = $username;
		$this->password = $password;
		$this->name = $name;
		$this->phone = $phone;
		$this->mail = $mail;
	}

	public function save() {
		$db = Db::getInstance();
 		if(isset($_POST['sub'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$pass = md5($password);
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			$mail = $_POST['mail'];
			$status ='1';
			$req = $db->prepare("SELECT username FROM user WHERE username = :username");
			$req->execute(array(':username' => $_POST['username']));
			$user = $req->fetchAll();
			if (!empty($user)) {
				echo "<script>alert('Username exists');windown.history.back(-1);</script>";
			}else{
				$req1 = $db->prepare("INSERT into user(username,password,name,phone,mail) values (:username,:password,:name,:phone,:mail)");
				$req1->execute(array(':username' => $username, ':password' => $pass, ':name' => $name, ':phone' => $phone, ':mail' => $mail));
				header('location:index.php?controller=user&action=success');
			}
		}
	}

	public function loginn() {
		$db = Db::getInstance();
		if(isset($_POST['sub1'])){
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['password'] = $_POST['password'];
			$username = $_SESSION['username'];
			$password = $_SESSION['password'];
			$pass = md5($password);
		$req = $db->prepare("SELECT username,password FROM user WHERE username = :username AND password = :password");
		$req->execute(array(':username' => $username, ':password' => $pass));
		$user = $req->fetch(); //print_r($user); die;
		if (!empty($user)){
			header("location:index.php?controller=user&action=loginsuccess");
		}else{
			unset($_SESSION['username']);
			echo "<script>alert('Invalid Username and Password');window.history.back(-1);</script>";
		}
		}
	}
}
?>