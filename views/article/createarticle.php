<h1>Create new article</h1>
<form action="index.php?controller=article&action=create" method="POST" enctype="multipart/form-data" class="form-horizontal col-md-10 col-md-offset-1">
	<div class="form-group">
        <label>Title : </label>
		<input class="form-control" type="text" name="title" required/>
	</div>
	<div class = "form-group">
		<label>Image : </label>
		<input class = "form-control" type="file" name="image">
	</div>
	<div class="form-group">
        <label>Content :</label>
		<textarea class="form-control" name="content" rows="10"></textarea>
	</div>
	<div class = "form-group">
        <input class="col-md-2 col-md-offset-5" type="submit" name="sub" value="Submit">
	</div>
</form>
