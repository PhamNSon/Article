<div>
<div class="col-md-2 col-md-offset-9"><p><strong><a href="index.php?controller=article&action=create">Create</a></strong></p></div> 
<div class="col-md-8 col-md-offset-1">
<h1>Article list</h1>
<?php
	if(isset($listall)){
		foreach ($listall as $row){
	?>
	<p><strong><a href="index.php?controller=article&action=view&id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a></strong></p>
	<p><?php echo substr($row['content'],0,100) ?></p>
	<p> Date created : <?php echo $row['datecreated'] ?></p>
	<?php	} 
		
	}
	?>