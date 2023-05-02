<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title>Новая страница</title>
	<script src="/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="/path/to/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Форма регистрации</h1>
        <form action="check.php" method="post">
<input type="text" class="form-control" name="login"
id="login" placeholder="Введите логин"><br>

<input type="text" class="form-control" name="name"
id="name" placeholder="Введите имя"><br>

<input type="password" class="form-control" name="password"
id="pass" placeholder="Введите пароль"><br>

<input type="tel" class="form-control" name="number"
id="number" placeholder="7 (___) ___ __ __"><br>

<input type="text" class="form-control" name="mail"
id="mail" placeholder="Введите mail"><br>

<button class="btn btn-fill lead-form-submit" type="submit">Зарегестрировать</button>

        </form>

    </div>
    
</html>