<?php 
if (isset($_POST['login'], $_POST['name'], $_POST['password'], $_POST['number'], $_POST['mail'])) {
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_SPECIAL_CHARS);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_SPECIAL_CHARS);
    $number = filter_var(trim($_POST['number']), FILTER_SANITIZE_SPECIAL_CHARS);
    $mail = filter_var(trim($_POST['mail']), FILTER_SANITIZE_SPECIAL_CHARS);

    if (mb_strlen($login) < 2 || mb_strlen($login) > 90) {
        echo "Недопустимая длина логина";
        exit();
    }
    else if (mb_strlen($name) < 1 || mb_strlen($name) > 90) {
        echo "Недопустимая длина имени";
        exit();
    }
    else if (mb_strlen($password) < 2 || mb_strlen($password) > 10) {
        echo "Недопустимая длина пароля";
        exit();
    }

    $mysql = new mysqli('localhost', 'root', '', 'register-bd');
    $query = "INSERT INTO `users` (`login`, `password`, `name`, `number`, `mail`) VALUES ('$login', '$password', '$name', '$number', '$mail')";
    $result = $mysql->query($query);

    if (!$result) {
        echo "Error: " . $mysql->error;
        exit();
    }

    $mysql->close();
}

header('Location: /');
exit();
?>
