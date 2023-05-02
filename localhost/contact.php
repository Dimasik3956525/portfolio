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
<body class="page-5">
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
    <a href="/contactkz.php" class="lang-change-link en">kz</a>                    
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
		<section >
            <div class="contact-us">
            <h2>Контакты</h2>
            <ul>
              <li><strong>Адрес:</strong> город Алматы, ул. Сатпаева 90/1</li>
              <li><strong>Телефон:</strong> +77273118358 , +77273118359 , +77017255264
                </li>
              <li><strong>Email:</strong> info@example.com</li>
            </ul>
        </div>
          </section>

          <section >
            <div class="contact-us">
            <h2>Мы находимся тут</h2>
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A475f340d7f780fd08f9ad021041d711c568c8637c61e96d3ba5c8ffb554922bd&amp;width=100%25&amp;height=720&amp;lang=ru_RU&amp;scroll=true"></script>
            
              
        </div>
          </section>
          
          <section class="email-us-section">
            <div class="wrapper p-wrap-left p-wrap-right">
                <div class="footer-lead-form-wrap">
                    <form action="mail.php" method="POST" class="lead-form" >
                        <input name="form" type="hidden" value="call">
                        <input name="resource_id" type="hidden" value="6">
                        <div class="h2 white">Напишите нам</div>
                        <div class="lead-form-descr">
                            Оставьте заявку – мы свяжемся с вами в течение часа                </div>
                        <div class="lead-form-fields">
                            <div class="lead-form-field">
                                <input type="text" name="user_name" id="field_name" class="text-field" placeholder="Имя" required="">
                                <label for="field_name" class="text-field-label">Имя</label>
                            </div>
                            <div class="lead-form-field">
                                <input type="tel" name="user_phone" id="field_phone" class="text-field" placeholder="+7 (___) ___ __ __" required="">
                                <label for="field_phone" class="text-field-label">Телефон</label>
                            </div>
                        </div>
                        <div class="lead-form-fields">
                            <div class="lead-form-field vert-align-bottom">
                                <input type="email" name="user_email" id="field_email" class="text-field" placeholder="Email" required="">
                                <label for="field_email" class="text-field-label">Email</label>
                            </div>
                            <div class="lead-form-field">
                                <textarea name="user_msg" id="field_msg" class="text-field" placeholder="Комментарий" required=""></textarea>
                                <label for="field_msg" class="text-field-label">Комментарий</label>
                            </div>
                        </div>
                        <div class="lead-form-fields">
                            <div class="lead-form-button">
                                <button type="submit" class="btn btn-fill lead-form-submit">Оставить заявку</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </section>
 
	</main>
	<footer class="footer">
        <div class="footer-top-wrap">
            <div class="wrapper p-wrap-left p-wrap-right">
                <div class="footer-top">
                    <div class="footer-col footer-col-1">
                        <div class="footer-logo">
                            <a class="logo" href="/" style="pointer-events: none;">
                                <img src="img/logo.PNG" alt="ОКИЛ-САТО">
                                
                            </a>
                        </div>
                        <div class="footer-contacts">
                            <a href="mailto:spb@okil-sato.ru" class="footer-email">spb@okil-sato.ru</a>
                            
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
                            <a href="produkt.html">Продукция</a></li>
                                <li><a href="onas.html">О нас</a></li>
                                    <li><a href="portfolio.html">Портфолио</a></li>
                                    <li><a href="contact.html">Контакты</a></li>
                                
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
                        <p>©2023 APH-GROUP </p>
                    </div>
    
    
    
                </div>
            </div>
        </div>
    </footer>
</body>
</html>