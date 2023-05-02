<?php 

$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_SPECIAL_CHARS);
$password =  filter_var(trim($_POST['password']),
FILTER_SANITIZE_SPECIAL_CHARS);

$mysql = new mysqli('localhost', 'root', '' ,'register-bd');

$result = $mysql->query("SELECT * FROM `users` WHERE `login` =
'$login' AND `password` = '$password'");

$user = $result->fetch_assoc();
if(!$user) {
    echo "Такой пользователь не найден";
    exit();
}

setcookie('user', $user['name'], time() + 3600, "/");

$mysql->close();

// После успешной регистрации
$_SESSION['user'] = $login;


header('Location: /');
exit();

?>
