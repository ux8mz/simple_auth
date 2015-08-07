<?php

$counter = 0;

if ( isset($_COOKIE['counter']) ) {
	$counter = (int)$_COOKIE['counter'];

}

	$counter++;
	setcookie('counter', $counter, time()+365*24*60*60);