
<?php 
session_start();
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $vat = $_POST['vat'];
    $total_price = $_POST['total_price'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register-bd";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $login = $_POST['login'];
    $query = "SELECT name FROM users WHERE login = '$login'";
    $result = $conn->query($query);
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $user_name = $row['name'];
    } else {
        $user_name = $_COOKIE['user'];
    }

    // рассчет скидки
    $discountAmount = 0;
    $quantity = intval($_POST['quantity']);
    if ($quantity >= 5) {
        $discountGroup = floor($quantity / 5);
        $discountPercent = $discountGroup > 5 ? 30 : $discountGroup * 5;
        $priceWithVat = floatval($price) * $quantity * (100 + floatval($vat)) / 100;
        $discountAmount = $priceWithVat * $discountPercent / 100;
    }

    // рассчет итоговой цены с учетом скидки
    $priceWithoutVat = floatval($price) * $quantity;
    $vatAmount = $priceWithoutVat * floatval($vat) / 100;
    $priceWithVat = $priceWithoutVat + $vatAmount;
    $totalPrice = $priceWithVat - $discountAmount;

    // добавление записи в базу данных
    $sql = "INSERT INTO Круговая_этикетка (name, quantity, price, vat, total_price, discount, user_name)
    VALUES ('$name', '$quantity', '$price', '$vat', '$totalPrice', '$discountAmount', '$user_name')";
    if ($conn->query($sql) === TRUE) {
        echo "Запись успешно добавлена в базу данных";
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>