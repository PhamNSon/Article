<DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <header>
		<h1></h1>
	</header>
	<body>
		<div class="row">
			<div class = "col-md-7 col-md-offset-1">
				<?php include('routes.php'); ?>
			</div>
			<div class = "col-md-3 text-center right-bar">
				<div class = "col-md-12 well well-lg">
				<div><b>
					<a href="index.php"><h2>Home</h2></a>
				</b></div>
				<div><b>
				<?php
				if(!isset($_SESSION['username'])) { //if not yet logged in
					echo '';
				}else {
					echo '<a href="index.php?controller=article&action=create">Create</a>';
				}
				?>
				</b></div>
				<div><b>
				<?php
				if(!isset($_SESSION['username'])) {
					echo '<a href="index.php?controller=user&action=login">Login</a>';
				}else{
					echo '<h4 class = "text-danger">Welcome, '.$_SESSION['username'].'</h4>';
				}
				?>
				</b></div>
				<div><b>
				<?php
				if(!isset($_SESSION['username'])) {
					echo '';
				}else {
					echo '<a href="index.php?controller=user&action=logout">Logout</a>';
				}
				?>
				</b></div>
				</div>
				<div class="col-md-12 well well-lg">
					<div><h2>Top view</h2>
						<div><?php
						include('top.php');
						?>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<object type="application/x-shockwave-flash" data="library/other/player_mp3_multi.swf">
					<param name="movie" value="http://flash-mp3-player.net/medias/player_mp3_multi.swf" />
					<param name="bgcolor" value="#F8F8F8" />
					<param name="FlashVars" value="mp3='audiolinkhere'&amp;width=300&amp;height=150&amp;showlist=1&amp;loop=1&amp;shuffle=1&amp;showvolume=1" />
					</object>
				</div>
			</div>
	</body>
    <footer>
    </footer>
  <body>
<html>