<?php

$today = date('D');
$hour = date('H'); // Gets the current hour (server time, 24 hour)
if ($today == "Mon") {
	// if hour is less than or equal to 9 (i.e 12am to 9:59am) show bannergeneral.gif
	if ($hour <= 2) {
		$ban_programa = 'assets/images/ban_radiounometal.jpg';
	}
	else if ($hour <= 5) {
		$ban_programa = 'assets/images/ban_culturarock.jpg';
	}
	else if ($hour <= 12) {
		$ban_programa = 'assets/images/ban_pasadoperfecto.jpg';
	}
	else if ($hour <= 14) {
		$ban_programa = 'assets/images/ban_tophits.jpg';
	}
	else if ($hour <= 16) {
		$ban_programa = 'assets/images/ban_culturarock.jpg';
	}
	else if ($hour <= 21) {
		$ban_programa = 'assets/images/ban_pasadoperfecto.jpg';
	}
	// the same format continues
	else if ($hour <= 23) {
		$ban_programa = 'assets/images/ban_classicrock.jpg';
	}
} else if ($today == "Tue") {
	// if hour is less than or equal to 9 (i.e 12am to 9:59am) show bannergeneral.gif
	if ($hour <= 2) {
		$ban_programa = 'assets/images/ban_radiounometal.jpg';
	}
	else if ($hour <= 5) {
		$ban_programa = 'assets/images/ban_culturarock.jpg';
	}
	else if ($hour <= 12) {
		$ban_programa = 'assets/images/ban_pasadoperfecto.jpg';
	}
	else if ($hour <= 14) {
		$ban_programa = 'assets/images/ban_tophits.jpg';
	}
	else if ($hour <= 16) {
		$ban_programa = 'assets/images/ban_culturarock.jpg';
	}
	else if ($hour <= 21) {
		$ban_programa = 'assets/images/ban_pasadoperfecto.jpg';
	}
	// the same format continues
	else if ($hour <= 23) {
		$ban_programa = 'assets/images/ban_classicrock.jpg';
	}
} else if ($today == "Wed") {
	// if hour is less than or equal to 9 (i.e 12am to 9:59am) show bannergeneral.gif
	if ($hour <= 2) {
		$ban_programa = 'assets/images/ban_radiounometal.jpg';
	}
	else if ($hour <= 5) {
		$ban_programa = 'assets/images/ban_culturarock.jpg';
	}
	else if ($hour <= 12) {
		$ban_programa = 'assets/images/ban_pasadoperfecto.jpg';
	}
	else if ($hour <= 14) {
		$ban_programa = 'assets/images/ban_tophits.jpg';
	}
	else if ($hour <= 16) {
		$ban_programa = 'assets/images/ban_culturarock.jpg';
	}
	else if ($hour <= 21) {
		$ban_programa = 'assets/images/ban_pasadoperfecto.jpg';
	}
	// the same format continues
	else if ($hour <= 23) {
		print "<img src=\"classicrock.jpg\">";
	}
} else if ($today == "Thu") {
	// if hour is less than or equal to 9 (i.e 12am to 9:59am) show bannergeneral.gif
	// if hour is less than or equal to 9 (i.e 12am to 9:59am) show bannergeneral.gif
	if ($hour <= 2) {
		$ban_programa = 'assets/images/ban_radiounometal.jpg';
	}
	else if ($hour <= 5) {
		$ban_programa = 'assets/images/ban_culturarock.jpg';
	}
	else if ($hour <= 12) {
		$ban_programa = 'assets/images/ban_pasadoperfecto.jpg';
	}
	else if ($hour <= 14) {
		$ban_programa = 'assets/images/ban_tophits.jpg';
	}
	else if ($hour <= 16) {
		$ban_programa = 'assets/images/ban_culturarock.jpg';
	}
	else if ($hour <= 21) {
		$ban_programa = 'assets/images/ban_pasadoperfecto.jpg';
	}
	// the same format continues
	else if ($hour <= 23) {
		$ban_programa = 'assets/images/ban_classicrock.jpg';
	}
} else if ($today == "Fri") {
	if ($hour <= 2) {
		$ban_programa = 'assets/images/ban_radiounometal.jpg';
	}
	else if ($hour <= 5) {
		$ban_programa = 'assets/images/ban_culturarock.jpg';
	}
	else if ($hour <= 12) {
		$ban_programa = 'assets/images/ban_pasadoperfecto.jpg';
	}
	else if ($hour <= 14) {
		$ban_programa = 'assets/images/ban_tophits.jpg';
	}
	else if ($hour <= 16) {
		$ban_programa = 'assets/images/ban_culturarock.jpg';
	}
	else if ($hour <= 21) {
		$ban_programa = 'assets/images/ban_pasadoperfecto.jpg';
	}
	// the same format continues
	else if ($hour <= 23) {
		$ban_programa = 'assets/images/ban_classicrock.jpg';
	}
} else if ($today == "Sat") {
	// if hour is less than or equal to 9 (i.e 12am to 9:59am) show bannergeneral.gif
	if ($hour <= 2) {
		$ban_programa = 'assets/images/ban_radiounometal.jpg';
	}
	else if ($hour <= 5) {
		$ban_programa = 'assets/images/ban_culturarock.jpg';
	}
	else if ($hour <= 12) {
		$ban_programa = 'assets/images/ban_708090s.jpg';
	}
	else if ($hour <= 14) {
		$ban_programa = 'assets/images/ban_tophits.jpg';
	}
	else if ($hour <= 16) {
		$ban_programa = 'assets/images/ban_culturarock.jpg';
	}
	// the same format continues
	else if ($hour <= 23) {
		$ban_programa = 'assets/images/ban_classicrock.jpg';
	}
} else if ($today == "Sun") {
	// if hour is less than or equal to 9 (i.e 12am to 9:59am) show bannergeneral.gif
	if ($hour <= 2) {
		$ban_programa = 'assets/images/ban_radiounometal.jpg';
	}
	else if ($hour <= 5) {
		$ban_programa = 'assets/images/ban_culturarock.jpg';
	}
	else if ($hour <= 12) {
		$ban_programa = 'assets/images/ban_708090s.jpg';
	}
	else if ($hour <= 14) {
		$ban_programa = 'assets/images/ban_tophits.jpg';
	}
	else if ($hour <= 16) {
		$ban_programa = 'assets/images/ban_culturarock.jpg';
	}
	// the same format continues
	else if ($hour <= 23) {
		$ban_programa = 'assets/images/ban_classicrock.jpg';
	}	
}



?>