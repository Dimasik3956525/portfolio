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
	<link rel="stylesheet" href="style.css">
</head>
<body class="page-2">
	
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
    <a href="/onaskz.php" class="lang-change-link en">kz</a>                    
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
            <section class="about-values over-hidden">
                <div class="wrapper inner-thin">
            
                    <div class="content-grid-1x1">
                        <div class="grid-cell">
                            <h2 class="h2" style="margin-bottom:0">Наша миссия</h2>
            
                            <div class="about-performance">
                                
                                                        <p>Создание новой стоимости для наших клиентов путем предоставления продукции и услуг высшего качества, а также вклад в создание лучшего и более устойчивого мира.</p><p>
            
                                    </p><p>Компания&nbsp;— это общественная организация. <br>
                                    Наша миссия&nbsp;— делать жизнь более насыщенной, так как мы&nbsp;содействуем развитию устойчивого мира.</p>
                                    
                                    <p>Мы прилагаем все усилия для производства продукции и услуг высшего качества, и создаем ценности, которые улучшают бизнес наших клиентов.
                                        Во время принятия решений мы постоянно задаем себе вопрос: является ли то, что мы производим, ценностью для наших клиентов.
                                        <br>
                                        Во время принятия решений мы постоянно задаем себе вопрос: является ли то, что мы производим, ценностью для наших клиентов..</p>
                                                </div>
            
                        </div>
                        <div class="grid-cell grid-cell__img-wrap">
                            <img src="img/photo-1.PNG" class="out-img-overlay" alt="">
                        </div>
            
                    </div>
            
                </div>
            </section>

            <section class="about-vision">
                <div class="wrapper inner-thin">
            
                    <div class="content-grid-1x1">
            
                        <div class="grid-cell">
                            <h2 class="h2">Наше видение</h2>
            
                        </div>
                        <div class="grid-cell">
            
                                                <p>Мы стремимся быть лидером и компанией с наилучшей репутацией в сегменте производства этикеток и решений для автоматической идентификации во всем мире, а также превышать ожидания наших клиентов в постоянно меняющемся мире.</p>
                                <p>Наш основной бизнес — это «прикрепление» эмоций и информации на товары, тем самым мы создаем ценность для наших клиентов (а также для их клиентов), которая обеспечивает точность и устойчивость, экономит трудовые и прочие ресурсы, повышает уверенность и выстраивает эмоциональные связи.</p>
                                <p>Мы стремимся кмаксимальному увеличению стоимости компании (материальной и нематериальной), которая измеряется не размером компании, а степенью доверия к ней со стороны клиентов и акционеров.</p>
                            
            
            
                        </div>
            
                    </div>
                    <div class="fullwidth-img__wrap">
                            <img src="img/photo-2.PNG" alt="Наша миссия">
                        </div>
                </div>
            </section>


            <section class="about-values over-hidden">
                <div class="wrapper inner-thin">
            
                    <div class="content-grid-1x1">
                        <div class="grid-cell">
                            <h2 class="h2" style="margin-bottom:0">1.	Оперативность. Всегда on-line</h2>
            
                            <div class="about-performance">
                                
                                            <p>Типография APH Group — клиентоориентированная компания. Иными словами, вся работа компании построена так, чтобы клиенты типографии получали стабильно качественную продукцию за оптимальную стоимость и в обозначенные договором сроки с учетом индивидуальных требований.</p>

                                           <h2>2.	Продажи. Главное — взаимопонимание.</h2> 
<p>Служба продаж компании APH Group состоит из профессионалов высочайшего уровня, которые оказывают клиентам всестороннюю поддержку: дают консультации, рекомендуют использование тех или иных материалов или технологий, оптимизируют цены за счёт использования полного спектра возможностей оборудования, помогают спланировать схему сотрудничества.</p>
<h2>3.	Персонал. Профессионализм и преданность делу.</h2>
<p>Система оплаты труда в типографии APH Group построена на персональной заинтересованности каждого сотрудника в успехе общего дела. Помимо постоянного обучения сотрудников, практикуется наставничество — принцип, при котором опытные специалисты передают свои знания вновь пришедшим. Правильность выбранного курса доказывает отсутствие текучести кадров — большинство специалистов, пришедших в APH Group много лет назад, работает здесь и сегодня</p>

                                                </div>
            
                        </div>
                       
            
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
                                10:00 - 18:00 по Аламате                       </div>
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
    <script src="/js/script.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>