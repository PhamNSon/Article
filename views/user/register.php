<h1 style="text-align: center">Register</h1>
<form action="index.php?controller=user&action=register" method="POST" class="form-horizontal col-md-10 col-md-offset-1 well well-lg">
	<div class="form-group">
         <label>Username : </label>
		 <input class="form-control" type="text" name="username" required=”required”/>
	</div>
	<div class="form-group">
        <label>Password :</label>
		<input class="form-control" type="password" name="password" required=”required"></input>
	</div>
		<div class="form-group">
        <label>Full Name :</label>
		<input class="form-control" type="text" name="name" required=”required"></input>
	</div>
		<div class="form-group">
        <label>Phone :</label>
		<input class="form-control" type="text" name="phone" required=”required"></input>
	</div>
		<div class="form-group">
        <label>E-Mail :</label>
		<input class="form-control" type="email" name="mail" required=”required"></input>
	</div>
	<div class="form-group">
        <input class="col-md-2 col-md-offset-5" type="submit" name="sub" value="Register">
	</div>
</form>
