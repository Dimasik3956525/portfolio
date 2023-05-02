<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Новая страница</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-4">
    <?php 
if(@$_COOKIE['user'] == ''): ?>
    <div class="row">
        <div class="col">
            <h1>Форма авторизации</h1>
            <form action="auth.php" method="post">
                <input type="text" class="form-control" name="login"
                id="login" placeholder="Введите логин"><br>
                <input type="password" class="form-control" name="password"
                id="pass" placeholder="Введите пароль"><br>
                <button class="btn btn-fill lead-form-submit" type="submit">Авторизоваться</button>
            </form>
        </div>
    </div>
<?php else: ?>
    <div class="row">
        <div class="col">
            <h1>Привет, <?=$_COOKIE['user'] ?>!</h1>
            <p>Вы успешно авторизовались на сайте.</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p>Что-то еще</p>
        </div>
    </div>
<?php endif ; ?>

        </form>

    </div>
    
</body>
</html>