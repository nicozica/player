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
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="container">
        <div class="player-container">
            <?php $url = 'players/'.$player.'.php'; include $url; ?>
        </div><!-- /.player-container -->
        <div class="player-item-section">

            <!-- /*ROW 1*/ -->
            <div class="player-item">
            </div><!-- /.player-item -->
            <div class="player-item">
            </div><!-- /.player-item -->
            <div class="player-item last">
            </div><!-- /.player-item-last -->
            <div class="clearfix"></div>

            <!-- /*ROW 2*/ -->
            <div class="player-item">
            </div><!-- /.player-item -->
            <div class="player-item">
            </div><!-- /.player-item -->
            <div class="player-item last">
            </div><!-- /.player-item-last -->
            <div class="clearfix"></div>

            <!-- /*ROW 3*/ -->
            <div class="player-item">
            </div><!-- /.player-item -->
            <div class="player-item">
            </div><!-- /.player-item -->
            <div class="player-item last">
            </div><!-- /.player-item-last -->
            <div class="clearfix"></div>

            <!-- /*ROW 4*/ -->
            <div class="player-item">
            </div><!-- /.player-item -->
            <div class="player-item">
            </div><!-- /.player-item -->
            <div class="player-item last">
            </div><!-- /.player-item-last -->
            <div class="clearfix"></div>

        </div><!-- /.player-item-section -->



    </div><!-- /.container -->

</body>
</html>

