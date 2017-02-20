<div class="col-md-3 col-md-offset-9"><a href="index.php"><b><p>Home</p></b></a></div>
<div style="text-align:center"><strong><h1>Article details<h1></strong></div>
<div class="col-md-10 col-md-offset-1">
	<h3>Article title :<p><?php echo $article->title; ?></p></h3>
	Article content : <br/><textarea class="form-control" rows="20"><?php echo $article->content; ?></textarea>
	<p>Date created : <?php echo $article->created; ?>
</div>