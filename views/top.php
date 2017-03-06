<?php
$db = $db = Db::getInstance();
$req = $db->query('SELECT * FROM articles ORDER BY viewed DESC LIMIT 5');
foreach($req->fetchAll() as $e) { ?>
<div class="row well well-lg">
	<div class=""><img class ="col-md-6" src="library/images/<?php echo $e['image'] ?>" width="150px" height="100px" target="_blank"></img></div>
	<div class="col-md-6">
		<p><b><a data-toggle='tooltip' title="<?php echo $e['title']; ?>" href='?controller=article&action=show&id=<?php echo $e['id']; ?>'><?php echo substr($e['title'],0,15);echo '...' ?></a></b></p>
		<p class="small">Views : <?php echo $e['viewed']; ?></p>
		</div>
</div>
<?php } ?>

