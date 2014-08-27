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
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    
    <script type="text/javascript">// <![CDATA[
    $(document).ready(function() {
    $.ajaxSetup({ cache: false }); // This part addresses an IE bug. without it, IE will only load the first number and will never refresh
    setInterval(function() {

    $('#acdc').load('items/item_acdc.php');
    $('#rollingstones').load('items/item_rollingstones.php');
    $('#thebeatles').load('items/item_thebeatles.php');

    $('#classicrock').load('items/item_classicrock.php');
    $('#reggae').load('items/item_reggae.php');

    $('#70s').load('items/item_70s.php');
    $('#80s').load('items/item_80s.php');
    $('#90s').load('items/item_90s.php');

    $('#tophits').load('items/item_tophits.php');
    $('#rockdeaca').load('items/item_rockdeaca.php');

    }, 9000); // the "9000" here refers to the time to refresh the div. it is in milliseconds.

    });
    // ]]></script>
</head>

<body>
    <div class="container">
        <div class="player-container">
            <?php $url = 'players/'.$player.'.php'; include $url; ?>
        </div><!-- /.player-container -->
        <div class="player-item-section" id="items">

            <!-- /*ROW 1*/ -->
            <div class="player-item" id="acdc">
                
            </div><!-- /.player-item -->
            <div class="player-item" id="rollingstones">
                
            </div><!-- /.player-item -->
            <div class="player-item last" id="thebeatles">
              
            </div><!-- /.player-item-last -->
            <div class="clearfix"></div>

            <!-- /*ROW 2*/ -->
            <div class="player-item" id="classicrock">
              
            </div><!-- /.player-item -->
            <div class="player-item">
                <img src="assets/images/ban_mobile-app_271x208.jpg" alt="Descarga nuestra APP para iOS y Android" />
            </div><!-- /.player-item -->
            <div class="player-item last" id="reggae">
               
            </div><!-- /.player-item-last -->
            <div class="clearfix"></div>

            <!-- /*ROW 3*/ -->
            <div class="player-item" id="70s">
               
            </div><!-- /.player-item -->
            <div class="player-item" id="80s">
               
            </div><!-- /.player-item -->
            <div class="player-item last" id="90s">
               
            </div><!-- /.player-item-last -->
            <div class="clearfix"></div>

            <!-- /*ROW 4*/ -->
            <div class="player-item" id="tophits">
             
            </div><!-- /.player-item -->
            <div class="player-item" id="rockdeaca">
            
            </div><!-- /.player-item -->
            <div class="player-item last">
                <img src="assets/images/rotator/rotate.php" alt="Banner" width="271" height="255" />
            </div><!-- /.player-item-last -->
            <div class="clearfix"></div>

        </div><!-- /.player-item-section -->



    </div><!-- /.container -->

</body>

</html>

