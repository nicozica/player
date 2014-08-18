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
</head>
<script type="text/JavaScript">
<!--
function timedRefresh(timeoutPeriod) {
    setTimeout("location.reload(true);",timeoutPeriod);
}
//   -->
</script>
<body onLoad="JavaScript:timedRefresh(60000);">
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
                <?php include "items/item_acdc.php" ?>
            </div><!-- /.player-item -->
            <div class="player-item last">
                <?php include "items/item_acdc.php" ?>
            </div><!-- /.player-item-last -->
            <div class="clearfix"></div>

            <!-- /*ROW 2*/ -->
            <div class="player-item">
                <?php include "items/item_acdc.php" ?>
            </div><!-- /.player-item -->
            <div class="player-item">
                <img src="assets/images/ban_mobile-app_271x208.jpg" alt="Descarga nuestra APP para iOS y Android" />
            </div><!-- /.player-item -->
            <div class="player-item last">
                <?php include "items/item_acdc.php" ?>
            </div><!-- /.player-item-last -->
            <div class="clearfix"></div>

            <!-- /*ROW 3*/ -->
            <div class="player-item">
                <?php include "items/item_acdc.php" ?>
            </div><!-- /.player-item -->
            <div class="player-item">
                <?php include "items/item_acdc.php" ?>
            </div><!-- /.player-item -->
            <div class="player-item last">
                <?php include "items/item_acdc.php" ?>
            </div><!-- /.player-item-last -->
            <div class="clearfix"></div>

            <!-- /*ROW 4*/ -->
            <div class="player-item">
                <?php include "items/item_acdc.php" ?>
            </div><!-- /.player-item -->
            <div class="player-item">
                <?php include "items/item_acdc.php" ?>
            </div><!-- /.player-item -->
            <div class="player-item last">
                <?php include "items/item_acdc.php" ?>
            </div><!-- /.player-item-last -->
            <div class="clearfix"></div>

        </div><!-- /.player-item-section -->



    </div><!-- /.container -->

</body>
</html>

