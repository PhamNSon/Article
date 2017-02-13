	<div style="float:left;position:fixed;" class="col-md-8">
		<h1>Create new article</h1>
        <form action="index.php?controller=article&action=create" method="POST" class="form-horizontal">
        <table>
		<div class="form-group">
            <tr><td><label>Title : </label></td><td>
			<input class="form-control" type="text" name="title" required=”required”/></td></tr>
		</div>
		<div class="form-group">
			<tr><td><label>Category : </label></td>
			<td>
				<select name="cate" class="form-control" required>
					<option value="">--Select--</option>
					<option value="1">News</option>
					<option value="2">Weather</option>
					<option value="3">Life</option>
				</select>		
			</td>
		</div>
		<div class="form-group">
            <tr><td><label>Content :</label></td><td><textarea class="form-control" name="content"></textarea></td></tr>
		</div>
		<div class="form-group">
            <tr><td></td><td><input type="submit" name="sub" value="Submit"></td></tr>
		</div>
        </table>
        </form>
	</div>