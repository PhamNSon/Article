<div class="col-md-2 col-md-offset-9"><h3><strong><a href="index.php?controller=article&action=create">Create</a></strong></h3></div>
<div class="row"> 
	<div class="col-md-6 col-md-offset-1">
	<h1>Article list</h1>
	<?php
		if(isset($listall)){
			foreach ($listall as $row){
		?>
		<p><strong><a href="index.php?controller=article&action=view&id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a></strong></p>
		<p><?php echo substr($row['content'],0,100) ?></p>
		<p> Date created : <?php echo $row['datecreated'] ?></p>
		<?php
		}
		}
		?>
	</div>
	<div class="col-md-3 col-md-offset-1">
	<h2>Category List</h2>
	<?php
		$conn=mysqli_connect('localhost','root','','article');
		$sql = "SELECT * FROM categories";
		$kq=mysqli_query($conn,$sql);
		while ($row1 = mysqli_fetch_assoc($kq)){
		?>
		<p><strong><a href="index.php?controller=category&action=view&id=<?php echo $row1['id'] ?>"><?php echo $row1['name'] ?></a></strong></p>
		<?php
		}
		?>
	</div>
<div class="col-md-10 col-md-offset-1" style="text-align:center">
<?php echo $Pagination->listPages($totalPages); ?>
</div>