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


    <body class="page-1">
    <header class="header">
        <div class="header-top">
            <div class="header-grid">
                <div class="header-top--left">
                    <a class="logo" href="index.php" >
                        <img src="/img/logo.PNG" alt="">
                        
                    </a>
                </div>
                <div class="header-top--right p-wrap-right">
                    <nav class="top-nav">
                        <div class="mobile-menu">
                            <a href="javascript:" class="header__menu-toggle">
                                <div id="nav-icon" class="">
                                    
                                </div>
                            </a>
                        </div>
                        <div class="desktop-menu">
                            <ul class="">
                                <li class="first"><a href="onas.php">О нас</a></li>
                                <li><a href="produkt.php">Продукция</a></li>
                                <li><a href="portfolio.php">Портфолио</a></li>
                                <li class="last"><a href="contact.php">Контакты</a></li>
                                <li class="last"><a href="corzina.php">Корзина</a></li>
                                <?php if(@$_COOKIE['user'] == ''): ?>
                                    <li class="last"><a href="register.php">Регистрация</a></li>
                                    <li class="last"><a href="avtorizacia.php">Авторизация</a></li>
                                <?php else: ?>
                                    <li class="last"><a href="/exit.php"><?php echo $_COOKIE['user']; ?></a></li>
                                <?php endif ; ?>
                            </ul>                
                                </div>
                    </nav>
                    <div class="lang-wrap">
                        <div class="act-lang lang">
                        
                            <a href="" class="lang-change-link ru active">ru</a>
    <a href="glavnayakz.php" class="lang-change-link en">kz</a>                    
                        </div>
                    </div>
                    <div class="header-phone">
                        <a href="tel:+78005009422" class="top-phone-link tracking">8 (888) 888-88-88</a>
                        <span>Наш номер  </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
	<main>

    

    <div class="cart">
    <h2>Корзина заказов</h2>

    <?php 
session_start();

if (!isset($_SESSION['user']) && !isset($_COOKIE['user'])) {
    header('Location: /auth.php');
    exit();
}

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    $user = $_COOKIE['user'];
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register-bd";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['delete_order'])) {
    $order_id = $_POST['order_id'];
    $label = $_POST['label'];

    $query = "DELETE FROM `$label` WHERE `id` = '$order_id' AND `user_name` = '$user'";
    $result = $conn->query($query);

    if ($result) {
        echo "<p style='color:green'>Заказ успешно удален.</p>";
    } else {
        echo "<p style='color:red'>Ошибка удаления заказа.</p>";
    }
}

$labels = array(
    'Самоклеящаяся_этикетка',
    'Специальная_этикетка',
    'Термоусадочная_этикетка',
    'Цифровая_этикетка',
    'Гибкая_упаковка',
    'Вплавляемые_этикетки',
    'Промо_этикетка',
    'Круговая_этикетка',
    'DataMatrixQR_код'
);

$total_sum = 0;

echo '<div style="padding: 10px; border: 1px solid black; margin-bottom: 10px;">';

foreach ($labels as $label) {
    $query = "SELECT id, name, quantity, total_price FROM `$label` WHERE `user_name` = '$user'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo "<div style='margin-bottom: 30px;'>";
        echo "<h3 style='margin-bottom: 5px;'>$label</h3>";
        while ($row = $result->fetch_assoc()) {
            echo "<div style='margin-bottom: 5px;'>";
            echo "<div style='font-weight: bold;'>Название:</div> " . $row["name"] . "<br>";
            echo "<div style='font-weight: bold;'>Количество:</div> " . $row["quantity"] . "<br>";
            echo "<div style='font-weight: bold;'>Итого:</div> " . $row["total_price"] . "<br>";
            echo "<form method='post' onsubmit='return confirm(\"Вы уверены, что хотите удалить этот заказ?\")'>";
            echo "<input type='hidden' name='label' value='$label'>";
            echo "<input type='hidden' name='order_id' value='".$row['id']."'>";
            echo "<input type='submit' name='delete_order' value='Удалить заказ'>";
            echo "</form>";
            echo "</div>";
            $total_sum += $row["total_price"];
        }
        echo "</div>";
    } else {
        continue;
    }
}

echo '</div>';

$conn->close();

if ($total_sum > 0) {
    echo "<h3 style='margin-top: 10px;'>Общая сумма: $total_sum</h3>";
}
?>


</div>


</div>

</div>

   
    
	</main>
	
		<footer class="footer">
            <div class="footer-top-wrap">
                <div class="wrapper p-wrap-left p-wrap-right">
                    <div class="footer-top">
                        <div class="footer-col footer-col-1">
                            <div class="footer-logo">
                                <a class="logo" href="index.php" style="pointer-events: none;">
                                    <img src="img/logo.PNG" alt="aph-group.kz">
                                    
                                </a>
                            </div>
                            <div class="footer-contacts">
                                <a href="mailto:aph-group.kz" class="footer-email">aph-group.kz</a>
                                
                            </div>
                        </div>
                        <div class="footer-col footer-col-2">
                            <div class="footer-cities">
                                
                         <div class="city-item">
            <div class="city-title"></div>
           <div class="footer-section">
                                 <h3>Контакты</h3>
                                    <p>Адрес: ул. Примерная, 123</p>
                                    <p>Телефон: +7 123-45-67</p>
                                    <p>Email: info@example.com</p>
                                  </div>
        </div>
        
                            </div>
                        </div>
                        <div class="footer-col footer-col-3">
                            <ul class="footer-menu"><li class="first">
                                <a href="produkt.php">Продукция</a></li>
                                <li><a href="onas.php">О нас</a></li>
                                    <li><a href="portfolio.php">Портфолио</a></li>
                                    <li><a href="contact.php">Контакты</a></li>
                                    
                                </ul>                </div>
                        <div class="footer-col footer-col-4">
                            <div class="col-4-contacts">
                                <a href="tel:+78005004533" class="footer-phone tracking">8 (800) 500-45-33</a>
                                <div class="call-time">
                                    10:00 - 18:00 по Алмате                        </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-wrap">
                <div class="wrapper p-wrap-left p-wrap-right">
                    <div class="footer-bottom">
                        <div class="footer-bottom-left">
                            <p>©2023 APH GROUP </p>
                        </div>
        
        
        
                    </div>
                </div>
            </div>
        </footer>
	
   <script src="/js/script.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>



</html>