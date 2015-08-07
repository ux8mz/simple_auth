<?php

session_start();

if ( isset($_SESSION['login']) ) {

	$_SESSION['login'];

} else {

	header("Location: /auth.php");

}

require_once ('counter.php');

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Main page</title>

	<!-- подключаем bootstrap -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<body>
<div class="container">
	<div class="col-md-4">
	</div>
	<div class="col-md-4">
		<h1><center>Welcome</center></h1>
		<form method="post" action="/lessons/auth/logout.php">
		<button class="btn btn-lg btn-primary btn-block" type="submit">Выйти</button>
		<form>
 </div>
 <div class="col-md-4">
 	<p align="right">Ваш логин: <b> <?= $_SESSION['login'] ?> </b></p>
 	<p align="right">Счетчик: <b> <?= $counter ?> </b></p>
 </div>
 </div>

</body>
</html>
