<?php 
    
    $player       = $_GET['player']; 
    
    if ($player == null)          { $player = "player_radiouno"; }; 

?>


<!DOCTYPE html>
<html>
<head>
    <title>Radio UNO Digital - Web Player</title>
    <meta name="description" content="Donde la cultura del rock se siente" />
    <meta name="robots" content="index, follow" />
    <meta name="language" content="es"/>
    <meta name="distribution" content="global" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <script type="text/javascript">
    var to_refresh = ['title-thebeatles', 'artist-thebeatles', 'id3'];

    var auto_refresh = setInterval(function () {
    $.each(to_refresh, function(_,id) {
        $('#'+id).load('player.php #'+id).fadeIn("slow");
    });
    }, 5000);
    </script>
</head>

<body>
    <div class="container">
        <div class="player-container">
            <?php $url = 'players/'.$player.'.php'; include $url; ?>
        </div><!-- /.player-container -->
        <div class="player-item-section">

            <!-- /*ROW 1*/ -->
            <div class="player-item">
                <?php include "items/item_acdc.php" ?>
            </div><!-- /.player-item -->
            <div class="player-item">
                <?php include "items/item_rollingstones.php" ?>
            </div><!-- /.player-item -->
            <div class="player-item last">
                <?php include "items/item_thebeatles.php" ?>
            </div><!-- /.player-item-last -->
            <div class="clearfix"></div>

            <!-- /*ROW 2*/ -->
            <div class="player-item">
                <?php include "items/item_classicrock.php" ?>
            </div><!-- /.player-item -->
            <div class="player-item">
                <img src="assets/images/ban_mobile-app_271x208.jpg" alt="Descarga nuestra APP para iOS y Android" />
            </div><!-- /.player-item -->
            <div class="player-item last">
                <?php include "items/item_reggae.php" ?>
            </div><!-- /.player-item-last -->
            <div class="clearfix"></div>

            <!-- /*ROW 3*/ -->
            <div class="player-item">
                <?php include "items/item_70s.php" ?>
            </div><!-- /.player-item -->
            <div class="player-item">
                <?php include "items/item_80s.php" ?>
            </div><!-- /.player-item -->
            <div class="player-item last">
                <?php include "items/item_90s.php" ?>
            </div><!-- /.player-item-last -->
            <div class="clearfix"></div>

            <!-- /*ROW 4*/ -->
            <div class="player-item">
                <?php include "items/item_tophits.php" ?>
            </div><!-- /.player-item -->
            <div class="player-item">
                <?php include "items/item_rockdeaca.php" ?>
            </div><!-- /.player-item -->
            <div class="player-item last">
                <img src="assets/images/ban_mobile-app_271x208.jpg" alt="Descarga nuestra APP para iOS y Android" />
            </div><!-- /.player-item-last -->
            <div class="clearfix"></div>

        </div><!-- /.player-item-section -->



    </div><!-- /.container -->

</body>

</html>

