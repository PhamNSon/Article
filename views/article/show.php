<?php
	$a = $article->title;
	$b = $article->id;
	$c = $a.'_'.$b;
	$expire = time() + 10;
	setcookie ('view',$c,$expire);
?>

<div style="text-align:center"><strong><h1>Article details<h1></strong></div>
<div class="well well-lg">
	<h3>Article title : <?php echo $article->title; ?></h3>
	<div><img class= "img-rounded col-md-12" src="library/images/<?php echo $article->image; ?>" height="500px"></img></div>
	<div class="col-md-offset-10">Total Views : <?php echo $article->viewed; ?></div>
	<div>Article content : <br/><textarea class="form-control" readonly rows="20"><?php echo $article->content; ?></textarea></div>
	<div>Date created :<?php echo $article->created;?></div><br/>
</div>