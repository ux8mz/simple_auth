<?php
session_start();

if ( $_POST && isset($_POST['username']) && isset($_POST['password']) ){
    if ( strtolower($_POST['username']) == 'admin' && strtolower($_POST['password']) == '12345' ) {
    	$_SESSION['login'] = "admin";
        header("Location: /index.php");
    } else {
        echo ('<b><center>Oops! Bad credentials!</center></b>');
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Authorization</title>
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Авторизация</h1>
            <div class="account-wall">
                <img class="profile-img" src="/assets/img/logo.png" alt="logo">
                <form class="form-signin" method="post" action="">
                <input type="text" class="form-control" name="username" id="login" placeholder="Имя пользователя" required autofocus>
                <input type="password" class="form-control" name="password" id="password" placeholder="Пароль" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
                <span class="clearfix"></span>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>