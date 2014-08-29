<p class="song-title">
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
$port = "9972";

/* ----- No need to edit below this line ----- */
/* ------------------------------------------- */
$fp = @fsockopen($ip,$port,$errno,$errstr,1);
if (!$fp) 
	{ 
	echo "Streaming offline<br>momentaneamente"; // Displays when sever is offline
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
		echo "Streaming<br>offline"; // Displays when sever is online but no song title
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

	echo $song;
?>
</p>
<p class="song-artist"><?php echo $artist ?></p>