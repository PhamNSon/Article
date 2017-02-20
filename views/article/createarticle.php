<h1>Create new article</h1>
<form action="index.php?controller=article&action=create" method="POST" class="form-horizontal col-md-10 col-md-offset-1">
	<div class="form-group">
         <label>Title : </label>
		 <input class="form-control" type="text" name="title" required=”required”/> 
	</div>
	<div class="form-group">
		<label>Category : </label>
		<select name="cate" class="form-control" required=”required”>
			<option value="">--Select--</option>
			<option value="1">News</option>
			<option value="2">Weather</option>
			<option value="3">Life</option>
		</select>
	</div>
	<div class="form-group">
        <label>Content :</label>
		<textarea class="form-control" name="content" rows="10"></textarea>
	</div>
	<div class="form-group">
        <input class="col-md-1 col-md-offset-5" type="submit" name="sub" value="Submit">
	</div>
</form>
