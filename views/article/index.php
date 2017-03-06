<h1>Article list</h1>
<div class="row well well-lg">
	<?php foreach($article as $p) { ?>
		<ul class="row test well well-lg list-unstyled">
			<li><b><a class="text-info" href='?controller=article&action=show&id=<?php echo $p->id; ?>'><?php echo $p->title; ?></a></b></li>
			<li><img class = "img-circle col-md-4" src="library/images/<?php echo $p->image ?>" width="200px" height="200px" target="_blank"></img></li>
			<ul class="col-md-6 list-unstyled">
				<li><?php $a = $p->content; echo substr($a,0,50);?></li>
				<li> Date created : <?php echo $p->created; ?></li>
			</ul>
			<li class= "col-md-3 col-md-offset-9">
				<?php
					if (isset($_SESSION['username'])) { ?>
						<span class="action"><a href="#" id="<?php echo $p->id; ?>" class="delete btn btn-warning" title="Delete">Delete</a></span>
					<?php } ?>
						<a class="btn btn-success" href="index.php?controller=article&action=show&id=<?php echo $p->id; ?>">Detail >></a>
			</li>
		</ul>
	<?php } ?>
</div>
<div class="center">
	<ul class="pagination">
		<li><?php echo $Pagination->listPages($totalPages); ?></li>
	</ul>
</div>

<script type="text/javascript">
$(function() {
	$(".delete").click(function(){
		var element = $(this);
		var del_id = element.attr("id");
		var info = 'id=' + del_id;
		if(confirm("Are you sure you want to delete this?")) {
			$.ajax({
			type: 'POST',
			url: 'index.php?controller=article&action=deletet',
			data: info,
			success: function(){
			}
			});
			$(this).parents(".test").animate({ backgroundColor: "#003" }, "fast")
			.animate({ opacity: "hide" }, "fast");
		}
		return false;
	});
});
</script>
