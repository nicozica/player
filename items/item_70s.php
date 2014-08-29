<div class="player-item-ref">
	<a class="player-link" onclick="load('player_70s');return false;" href="">
		<div class="player-thumb">
			<img src="assets/images/img_item_70s.jpg" alt="70s" />
		</div>
		<h2>70s</h2>
		<ul>
			<?php

			/*

			Now Playing PHP script for SHOUTcast

			This script is (C) MixStream.net 2008

			Feel free to modify this free script 
			in any other way to suit your needs.

			Version: v1.1

			*/


			/* ----------- Server configuration ---------- */

			$ip = "server-uk4.radioseninternetuy.com";
			$port = "10012";

			/* ----- No need to edit below this line ----- */
			/* ------------------------------------------- */
			$fp = @fsockopen($ip,$port,$errno,$errstr,1);
			if (!$fp) 
				{ 
				echo "<div class='alert'>Streaming offline<br>moment&aacute;neamente</div>"; // Displays when sever is offline
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
					echo "<div class='alert'>Sin informaci&oacute;n<br>para la pista actual</div>"; // Displays when sever is online but no song title
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

			function truncate($string, $length, $dots = "...") {
			    return (strlen($string) > $length) ? substr($string, 0, $length - strlen($dots)) . $dots : $string;
			}

			?>
			<li class="song-title"><?php echo truncate("$song", 30); ?></li>
			<li class="song-artist"><?php echo truncate("$artist", 32); ?></li>
		</ul>
	</a>
	<div class="divider"></div>
	<div class="icon-players">
		<p>Escuchar en tu<br>reproductor</p>
		<ul>
			<li><a class="wmp" href="assets/streams/70s.asx">Windows Media Player</a></li>
			<li><a class="winamp" href="assets/streams/70s.pls">Winamp</a></li>
			<li><a class="itunes" href="assets/streams/70s.pls">iTunes</a></li>
			<li><a class="realplayer" href="assets/streams/70s.ram">Real Player</a></li>
		</ul>
	</div>
</div><!-- /.player-container -->









