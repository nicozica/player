<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style><?php

$today = date('D');
$hour = date('H'); // Gets the current hour (server time, 24 hour)
if ($today == "Mon") {
	// if hour is less than or equal to 9 (i.e 12am to 9:59am) show bannergeneral.gif
	if ($hour <= 2) {
		print "<img src=\"radiounometal.png\">";
	}
	else if ($hour <= 5) {
		print "<img src=\"culturarock.png\">";
	}
	else if ($hour <= 12) {
		print "<img src=\"pasadoperfecto.png\">";
	}
	else if ($hour <= 14) {
		print "<img src=\"tophits.png\">";
	}
	else if ($hour <= 16) {
		print "<img src=\"culturarock.png\">";
	}
	else if ($hour <= 21) {
		print "<img src=\"pasadoperfecto.png\">";
	}
	// the same format continues
	else if ($hour <= 23) {
		print "<img src=\"classicrock.png\">";
	}
} else if ($today == "Tue") {
	// if hour is less than or equal to 9 (i.e 12am to 9:59am) show bannergeneral.gif
	if ($hour <= 2) {
		print "<img src=\"radiounometal.png\">";
	}
	else if ($hour <= 5) {
		print "<img src=\"culturarock.png\">";
	}
	else if ($hour <= 12) {
		print "<img src=\"pasadoperfecto.png\">";
	}
	else if ($hour <= 14) {
		print "<img src=\"tophits.png\">";
	}
	else if ($hour <= 16) {
		print "<img src=\"culturarock.png\">";
	}
	else if ($hour <= 21) {
		print "<img src=\"pasadoperfecto.png\">";
	}
	// the same format continues
	else if ($hour <= 23) {
		print "<img src=\"classicrock.png\">";
	}
} else if ($today == "Wed") {
	// if hour is less than or equal to 9 (i.e 12am to 9:59am) show bannergeneral.gif
	if ($hour <= 2) {
		print "<img src=\"radiounometal.png\">";
	}
	else if ($hour <= 5) {
		print "<img src=\"culturarock.png\">";
	}
	else if ($hour <= 12) {
		print "<img src=\"pasadoperfecto.png\">";
	}
	else if ($hour <= 14) {
		print "<img src=\"tophits.png\">";
	}
	else if ($hour <= 16) {
		print "<img src=\"culturarock.png\">";
	}
	else if ($hour <= 21) {
		print "<img src=\"pasadoperfecto.png\">";
	}
	// the same format continues
	else if ($hour <= 23) {
		print "<img src=\"classicrock.png\">";
	}
} else if ($today == "Thu") {
	// if hour is less than or equal to 9 (i.e 12am to 9:59am) show bannergeneral.gif
	// if hour is less than or equal to 9 (i.e 12am to 9:59am) show bannergeneral.gif
	if ($hour <= 2) {
		print "<img src=\"radiounometal.png\">";
	}
	else if ($hour <= 5) {
		print "<img src=\"culturarock.png\">";
	}
	else if ($hour <= 12) {
		print "<img src=\"pasadoperfecto.png\">";
	}
	else if ($hour <= 14) {
		print "<img src=\"tophits.png\">";
	}
	else if ($hour <= 16) {
		print "<img src=\"culturarock.png\">";
	}
	else if ($hour <= 21) {
		print "<img src=\"pasadoperfecto.png\">";
	}
	// the same format continues
	else if ($hour <= 23) {
		print "<img src=\"classicrock.png\">";
	}
} else if ($today == "Fri") {
	if ($hour <= 2) {
		print "<img src=\"radiounometal.png\">";
	}
	else if ($hour <= 5) {
		print "<img src=\"culturarock.png\">";
	}
	else if ($hour <= 12) {
		print "<img src=\"pasadoperfecto.png\">";
	}
	else if ($hour <= 14) {
		print "<img src=\"tophits.png\">";
	}
	else if ($hour <= 16) {
		print "<img src=\"culturarock.png\">";
	}
	else if ($hour <= 21) {
		print "<img src=\"pasadoperfecto.png\">";
	}
	// the same format continues
	else if ($hour <= 23) {
		print "<img src=\"classicrock.png\">";
	}
} else if ($today == "Sat") {
	// if hour is less than or equal to 9 (i.e 12am to 9:59am) show bannergeneral.gif
	if ($hour <= 2) {
		print "<img src=\"radiounometal.png\">";
	}
	else if ($hour <= 5) {
		print "<img src=\"culturarock.png\">";
	}
	else if ($hour <= 12) {
		print "<img src=\"708090s.png\">";
	}
	else if ($hour <= 14) {
		print "<img src=\"tophits.png\">";
	}
	else if ($hour <= 16) {
		print "<img src=\"culturarock.png\">";
	}
	// the same format continues
	else if ($hour <= 23) {
		print "<img src=\"classicrock.png\">";
	}
} else if ($today == "Sun") {
	// if hour is less than or equal to 9 (i.e 12am to 9:59am) show bannergeneral.gif
	if ($hour <= 2) {
		print "<img src=\"radiounometal.png\">";
	}
	else if ($hour <= 5) {
		print "<img src=\"culturarock.png\">";
	}
	else if ($hour <= 12) {
		print "<img src=\"708090s.png\">";
	}
	else if ($hour <= 14) {
		print "<img src=\"tophits.png\">";
	}
	else if ($hour <= 16) {
		print "<img src=\"culturarock.png\">";
	}
	// the same format continues
	else if ($hour <= 23) {
		print "<img src=\"classicrock.png\">";
	}	
}



?>
<script type="text/JavaScript">
<!--
function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}
//   -->
</script>
<body onLoad="JavaScript:timedRefresh(150000);">