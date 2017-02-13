	<div style="float:left;position:fixed;" class="col-md-8">
		<h1>Create new article</h1>
        <form action="index.php?controller=article&action=create" method="POST" class="form-horizontal">
        <table>
		<div class="form-group">
            <tr><td><label>Title : </label></td><td>
			<input class="form-control" type="text" name="title"/></td></tr>
		</div>
		<div class="form-group">
			<tr><td><label>Category : </label></td>
			<td>
				<select name="cate" class="form-control">
					<option>Truyện cười</option>
					<option>Truyện kiếm hiệp</option>
					<option>Truyện ngôn tình</option>
					<option>Truyện tiên hiệp</option>
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