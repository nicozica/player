<?php

/*

Now Playing PHP script for SHOUTcast

This script is (C) MixStream.net 2008

Feel free to modify this free script 
in any other way to suit your needs.

Version: v1.1

*/


/* ----------- Server configuration ---------- */

$ip = "usa4-vn.mixstream.net";
$port = "9436";

/* ----- No need to edit below this line ----- */
/* ------------------------------------------- */
$fp = @fsockopen($ip,$port,$errno,$errstr,1);
if (!$fp) 
	{ 
	echo "Streaming offline momentaneamente"; // Displays when sever is offline
	} 
	else
	{ 
	fputs($fp, "GET /7.html HTTP/1.0\r\nUser-Agent: Mozilla\r\n\r\n");
	while (!feof($fp)) 
		{
		$info = fgets($fp);
		}
	$info = str_replace('</body></html>', "", $info);
	$split = explode(',', $info);
	if (empty($split[6]) )
		{
		echo "Streaming offline"; // Displays when sever is online but no song title
		}
	else
		{
		$title = str_replace('\'', '`', $split[6]);
		$title = str_replace(',', ' ', $title);
		$split = explode(' - ', $title);
		$artist = trim($split[0]);
		$song = trim($split[1]);
		}
	}

	if(strlen($song) > 35) {
		$short = substr($song,0,35) . " ...";
	}

	if(strlen($artist) > 38) {
		$short = substr($artist,0,38) . " ...";
	}


?>
<div class="player-item-ref thebeatles">
	<a class="player-link" href="#">
		<div class="player-thumb">
			<img src="assets/images/img_item_acdc.jpg" alt="AC/DC" />
		</div>
		<h2>AC/DC</h2>
		<ul>
			<li class="song-title"><?php echo $song ?></li>
			<li class="song-artist"><?php echo $artist ?></li>
		</ul>
	</a>
	<div class="divider"></div>
	<div class="icon-players">
		<p>Escuchar en tu<br>reproductor</p>
		<ul>
			<li><a class="wmp" href="#">Windows Media Player</a></li>
			<li><a class="winamp" href="#">Winamp</a></li>
			<li><a class="itunes" href="#">iTunes</a></li>
			<li><a class="realplayer" href="#">Real Player</a></li>
		</li>
	</div>
</div><!-- /.player-container -->









