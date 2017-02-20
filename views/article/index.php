<div class="col-md-2 col-md-offset-9"><h3><strong><a href="index.php?controller=article&action=create">Create</a></strong></h3></div>
<div class="row"> 
	<div class="col-md-6 col-md-offset-1">
	<h1>Article list</h1>
	<?php foreach($article as $p) { ?>
		<p><strong><a href='?controller=article&action=show&id=<?php echo $p->id; ?>'><?php echo $p->title; ?></a></strong></p>
		<p><?php echo $p->content; ?></p>
		<p> Date created :<?php echo $p->created; ?></p><br/>
	<?php } ?>
	</div>
	<div class="col-md-3 col-md-offset-1">
	<h2>Category List</h2>
	<?php
		$conn=mysqli_connect('localhost','root','','article');
		$sql = "SELECT * FROM categories";
		$kq=mysqli_query($conn,$sql);
		while ($row = mysqli_fetch_assoc($kq)){
		?>
		<p><strong><a href="index.php?controller=category&action=show&id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a></strong></p>
		<?php
		}
		?>
	</div>	
</div>
