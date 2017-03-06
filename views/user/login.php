
<?php
//if(empty($_SESSION)){ // if the session not yet started
 //  session_start();
//}
if(isset($_SESSION['username'])) { //if logged in
   header("Location: index.php");// send to index page
   exit;
}
?>
<h1 style="text-align: center">Login</h1>
<form action="" method="POST" class="form-horizontal col-md-10 col-md-offset-1">
	<div class="form-group">
         <label>username : </label>
		 <input class="form-control" type="text" name="username" required=”required”/>
	</div>
	<div class="form-group">
        <label>password :</label>
		<input class="form-control" type="password" name="password" rows="10"></input>
	</div>
		<div class="form-group">
        <input class="col-md-2 col-md-offset-5" type="submit" name="sub1" value="Login">
	</div>
</form>