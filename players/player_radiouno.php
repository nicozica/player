<div class="player-container radiouno">
	<div class="player-box">
		<div class="muse-player">
			<?php
				include "muse/muse_radiouno.php";
			?>
		</div>
		<div class="banner_onair">

				<img id="banner_onair" src="<?php echo $ban_programa ?>" />			
			
		</div>
	</div><!-- /.player-box -->
	<div class="second-line">
		<div class="icon-players">
			<p>Reproductores</p>
			<ul>
				<li><a class="wmp" href="assets/streams/radiounodigital.asx">Windows Media Player</a></li>
				<li><a class="winamp" href="assets/streams/radiounodigital.pls">Winamp</a></li>
				<li><a class="itunes" href="assets/streams/radiounodigital.pls">iTunes</a></li>
				<li><a class="realplayer" href="assets/streams/radiounodigital.ram">Real Player</a></li>
			</ul>
		</div>
		<div class="listeners">
			<div id="listeners_count">
				<?php include 'includes/stats.php' ?>
			</div>
		</div>
	</div>
	<div id="rds_radiouno">

	</div><!-- /#rds -->
</div><!-- /.player-container -->
