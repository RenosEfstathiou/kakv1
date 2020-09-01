<?php
// Change this to your connection info.
$DATABASE_HOST = 'webpagesdb.it.auth.gr:3306';
$DATABASE_USER = 'kakaziag';
$DATABASE_PASS = 'kakajohn561998';
$DATABASE_NAME = 'kakaziag1';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

?>
