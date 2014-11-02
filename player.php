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
    <link rel="shortcut icon" href="http://radiounodigital.com.uy/home/wp-content/uploads/2012/10/favicon.ico" type="image/x-icon" /> 
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    
    <script type="text/javascript">

    function load(player){
       $("#load-player").load('players/'+player+'.php');
    }

    $(document).ready(function() {

       //LOAD RDS ITEMS
        $('#rds_item_acdc').load('items/rds/rds_item_acdc.php');
        $('#rds_item_rollingstones').load('items/rds/rds_item_rollingstones.php');
        $('#rds_item_thebeatles').load('items/rds/rds_item_thebeatles.php');

        $('#rds_item_u2').load('items/rds/rds_item_u2.php');
        $('#rds_item_queen').load('items/rds/rds_item_queen.php');
        $('#rds_item_redondos').load('items/rds/rds_item_redondos.php');

        $('#rds_item_classicrock').load('items/rds/rds_item_classicrock.php');
        $('#rds_item_reggae').load('items/rds/rds_item_reggae.php');

        $('#rds_item_70s').load('items/rds/rds_item_70s.php');
        $('#rds_item_80s').load('items/rds/rds_item_80s.php');
        $('#rds_item_90s').load('items/rds/rds_item_90s.php');

        $('#rds_item_tophits').load('items/rds/rds_item_tophits.php');
        $('#rds_item_rockdeaca').load('items/rds/rds_item_rockdeaca.php');


        //LOAD RDS PLAYERS
        $('#rds_radiouno').load('players/rds/rds_radiouno.php');

        $('#rds_acdc').load('players/rds/rds_acdc.php');
        $('#rds_rollingstones').load('players/rds/rds_rollingstones.php');
        $('#rds_thebeatles').load('players/rds/rds_thebeatles.php');

        $('#rds_u2').load('players/rds/rds_u2.php');
        $('#rds_queen').load('players/rds/rds_queen.php');
        $('#rds_redondos').load('players/rds/rds_redondos.php');

        $('#rds_classicrock').load('players/rds/rds_classicrock.php');
        $('#rds_reggae').load('players/rds/rds_reggae.php');

        $('#rds_70s').load('players/rds/rds_70s.php');
        $('#rds_80s').load('players/rds/rds_80s.php');
        $('#rds_90s').load('players/rds/rds_90s.php');

        $('#rds_tophits').load('players/rds/rds_tophits.php');
        $('#rds_rockdeaca').load('players/rds/rds_rockdeaca.php');

        $('#listeners_count').load('includes/stats.php');
        $('#banner_onair').load('includes/minibanner-programas.php');

        //STARTS REFRESHERS
       var refreshId = setInterval(function() {
        //RELOAD RDS ITEMS
        $("#rds_item_acdc").load('items/rds/rds_item_acdc.php?' + 1*new Date());
        $('#rds_item_rollingstones').load('items/rds/rds_item_rollingstones.php' + 1*new Date());
        $('#rds_item_thebeatles').load('items/rds/rds_item_thebeatles.php' + 1*new Date());

        $('#rds_item_u2').load('items/rds/rds_item_u2.php' + 1*new Date());
        $('#rds_item_queen').load('items/rds/rds_item_queen.php' + 1*new Date());
        $('#rds_item_redondos').load('items/rds/rds_item_redondos.php' + 1*new Date());

        $('#rds_item_classicrock').load('items/rds/rds_item_classicrock.php' + 1*new Date());
        $('#rds_item_reggae').load('items/rds/rds_item_reggae.php' + 1*new Date());

        $('#rds_item_70s').load('items/rds/rds_item_70s.php' + 1*new Date());
        $('#rds_item_80s').load('items/rds/rds_item_80s.php' + 1*new Date());
        $('#rds_item_90s').load('items/rds/rds_item_90s.php' + 1*new Date());

        $('#rds_item_tophits').load('items/rds/rds_item_tophits.php' + 1*new Date());
        $('#rds_item_rockdeaca').load('items/rds/rds_item_rockdeaca.php' + 1*new Date());


        //RELOAD RDS PLAYERS
        $('#rds_radiouno').load('players/rds/rds_radiouno.php' + 1*new Date());

        $('#rds_acdc').load('players/rds/rds_acdc.php' + 1*new Date());
        $('#rds_rollingstones').load('players/rds/rds_rollingstones.php' + 1*new Date());
        $('#rds_thebeatles').load('players/rds/rds_thebeatles.php' + 1*new Date());

        $('#rds_u2').load('players/rds/rds_u2.php' + 1*new Date());
        $('#rds_queen').load('players/rds/rds_queen.php' + 1*new Date());
        $('#rds_redondos').load('players/rds/rds_redondos.php' + 1*new Date());

        $('#rds_classicrock').load('players/rds/rds_classicrock.php' + 1*new Date());
        $('#rds_reggae').load('players/rds/rds_reggae.php' + 1*new Date());

        $('#rds_70s').load('players/rds/rds_70s.php' + 1*new Date());
        $('#rds_80s').load('players/rds/rds_80s.php' + 1*new Date());
        $('#rds_90s').load('players/rds/rds_90s.php' + 1*new Date());

        $('#rds_tophits').load('players/rds/rds_tophits.php' + 1*new Date());
        $('#rds_rockdeaca').load('players/rds/rds_rockdeaca.php' + 1*new Date());

        $('#listeners_count').load('includes/stats.php' + 1*new Date());
        $('#banner_onair').load('includes/minibanner-programas.php' + 1*new Date());

       }, 30000);

    });

    </script>
</head>

<body>
    <div class="container">
        <div class="player-container" id="load-player">
            <?php $url = 'players/'.$player.'.php'; include $url; ?>
        </div><!-- /.player-container -->
        <div class="player-item-section" id="items">

            <!-- /*ROW 1*/ -->
            <div class="player-item">
                <?php include 'items/item_acdc.php' ?>
            </div><!-- /.player-item -->
            <div class="player-item">
                <?php include 'items/item_rollingstones.php' ?>
            </div><!-- /.player-item -->
            <div class="player-item last">
                <?php include 'items/item_thebeatles.php' ?>
            </div><!-- /.player-item-last -->
            <div class="clearfix"></div>

            <!-- /*ROW 2 NEW*/ -->
            <div class="player-item">
                <img src="assets/images/rotator/rotate.php" alt="Banner" width="271" height="255" />
                <!-- <img src="assets/images/ban_mobile-app_271x208.jpg" alt="Descarga nuestra APP para iOS y Android" /> -->
            </div><!-- /.player-item -->
            <div class="player-item">
                <?php include 'items/item_u2.php' ?>
            </div><!-- /.player-item -->     
            <div class="player-item last">
                <?php include 'items/item_redondos.php' ?>
            </div><!-- /.player-item-last -->
            <div class="clearfix"></div>

            <!-- /*ROW 2*/ -->
            <div class="player-item">
                <?php include 'items/item_queen.php' ?>
            </div><!-- /.player-item -->
            <div class="player-item">
                <?php include 'items/item_classicrock.php' ?>
            </div><!-- /.player-item -->
            <div class="player-item last">
                <?php include 'items/item_reggae.php' ?>
            </div><!-- /.player-item-last -->
            <div class="clearfix"></div>

            <!-- /*ROW 3*/ -->
            <div class="player-item">
                <?php include 'items/item_70s.php' ?>
            </div><!-- /.player-item -->
            <div class="player-item">
                <?php include 'items/item_80s.php' ?>
            </div><!-- /.player-item -->
            <div class="player-item last">
                <?php include 'items/item_90s.php' ?>
            </div><!-- /.player-item-last -->
            <div class="clearfix"></div>

            <!-- /*ROW 4*/ -->
            <div class="player-item">
                <?php include 'items/item_tophits.php' ?>
            </div><!-- /.player-item -->
            <div class="player-item">
                <?php include 'items/item_rockdeaca.php' ?>
            </div><!-- /.player-item -->
            <div class="player-item last">
                <img src="assets/images/rotator2/rotate2.php" alt="Banner" width="271" height="255" />
            </div><!-- /.player-item-last -->
            <div class="clearfix"></div>

        </div><!-- /.player-item-section -->



    </div><!-- /.container -->

</body>

</html>

