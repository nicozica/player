<?php
/*

Now Playing PHP script for SHOUTcast

This script is (C) MixStream.net 2008

Feel free to modify this free script 
in any other way to suit your needs.

Version: v1.1

*/


/* ----------- Server configuration ---------- */

$ip = "server-uk1.radioseninternetuy.com";
$port = "8012";

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
?>


<div class="player-container thebeatles">
	<h1>The Beatles</h1>
	<div class="player-box">
		<?php
			include "muse/the-beatles.php"
		?> 
	</div><!-- /.player-box -->
		<p class="song-title" id="title-thebeatles"><?php echo $song ?></p>
		<p class="song-artist" id="artist-thebeatles"><?php echo $artist ?></p>
</div><!-- /.player-container -->

