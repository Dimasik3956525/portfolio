<?php 
// Проверка, была ли отправлена форма
if(isset($_POST['submit'])){

    // Получение данных из формы
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $vat = $_POST['vat'];
    $total_price = $_POST['total_price'];

    // Подключение к базе данных
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register-bd";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Получение логина пользователя из формы
    $login = $_POST['login'];

    // Получение имени пользователя из таблицы users
    $query = "SELECT name FROM users WHERE login = '$login'";
    $result = $conn->query($query);

    // Проверка, был ли запрос выполнен успешно
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $user_name = $row['name'];
    } else {
        $user_name = $_COOKIE['user'];
    }

    // Создание запроса на добавление данных в базу данных
    $sql = "INSERT INTO DataMatrixQR_код (name, quantity, price, vat, total_price, user_name)
    VALUES ('$name', '$quantity', '$price', '$vat', '$total_price', '$user_name')";

    // Проверка, был ли запрос выполнен успешно
    if ($conn->query($sql) === TRUE) {
        echo "Запись успешно добавлена в базу данных";
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }

    // Закрытие соединения с базой данных
    $conn->close();
}
?>

