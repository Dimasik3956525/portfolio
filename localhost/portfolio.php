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
<body class="page-4">
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
    <a href="/portfoliokz.php" class="lang-change-link en">kz</a>                    
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





    <section class="main-services-list">
        <div class="wrapper p-wrap-left p-wrap-right">
            <h2 class="h2 white">Портфолио</h2>
            <div class="services-list-wrap">
    
                <div class="service-list-item"><div class="img-overlay"><img src="/assets/images/media/3d/10.jpg" alt="Самоклеящиеся этикетки"></div>
                            <a class="service-list-item__link" href="label/samokleyashiesya-etiketki/">
                                <div class="service-list-item__title">Самоклеящаяся этикетка</div>
                            </a>
                        </div>
    <div class="service-list-item"><div class="img-overlay"><img src="/assets/images/media/3d/9.jpg" alt="Термоусадочная этикетка"></div>
                            <a class="service-list-item__link" href="label/termousadochnaja-jetiketka/">
                                <div class="service-list-item__title">Термоусадочная этикетка</div>
                            </a>
                        </div>
    <div class="service-list-item"><div class="img-overlay"><img src="/assets/images/media/3d/12.jpg" alt="Вплавляемые этикетки (IML и BML)"></div>
                            <a class="service-list-item__link" href="label/vplavlyaemaya-etiketka/">
                                <div class="service-list-item__title">Вплавляемые этикетки</div>
                            </a>
                        </div>
    <div class="service-list-item"><div class="img-overlay"><img src="/assets/images/media/3d/8.jpg" alt="Промо-этикетка"></div>
                            <a class="service-list-item__link" href="label/promo-etiketka/">
                                <div class="service-list-item__title">Промо-этикетка</div>
                            </a>
                        </div>
    <div class="service-list-item"><div class="img-overlay"><img src="/assets/images/media/3d/13.jpg" alt="Цифровая этикетка"></div>
                            <a class="service-list-item__link" href="label/czifrovaya-etiketka/">
                                <div class="service-list-item__title">Цифровая этикетка</div>
                            </a>
                        </div>
    <div class="service-list-item"><div class="img-overlay"><img src="/assets/images/media/3d/14.jpg" alt="Круговая этикетка"></div>
                            <a class="service-list-item__link" href="label/krugovaya-etiketka/">
                                <div class="service-list-item__title">Круговая этикетка</div>
                            </a>
                        </div>
    <div class="service-list-item"><div class="img-overlay"><img src="/assets/images/media/3d/1.jpg" alt="Специальная этикетка"></div>
                            <a class="service-list-item__link" href="label/specialnaja-jetiketka/">
                                <div class="service-list-item__title">Специальная этикетка</div>
                            </a>
                        </div>
    <div class="service-list-item"><div class="img-overlay"><img src="/assets/images/media/3d/2.jpg" alt="Этикетки DataMatrix &amp; QR-код"></div>
                            <a class="service-list-item__link" href="label/etiketki-datamatrix-and-qr-kod/">
                                <div class="service-list-item__title">DataMatrix &amp; QR-код</div>
                            </a>
                        </div>
    <div class="service-list-item"><div class="img-overlay"><img src="/assets/images/media/3d/3.jpg" alt="Гибкая упаковка"></div>
                            <a class="service-list-item__link" href="label/doj-pak/">
                                <div class="service-list-item__title">Гибкая упаковка</div>
                            </a>
                        </div>
            </div>
        </div>
    </section>


    <div class="content-grid-1x1 txt-inner-2cols m-b-60 m-t-60">
        <div class="grid-cell">
            <h3>При производстве самоклеящихся этикеток используются различные виды материалов:</h3>
            <ul>
                <li>самоклеящаяся бумага в том числе винная;</li>
                <li>самоклеящиеся плёнки из полиэтилена, полипропилена, пета и их металлизированные версии;</li>
                <li>самоклеящиеся винные материалы;</li>
                <li>самоклеящиеся комбинированные плёнки с алюминием и бумагами;</li>
                <li>самоклеящиеся термочувствительные бумаги и плёнки;</li>
                <li>большой выбор клеёв и подложек для разных применений.</li>
            </ul>
        </div>
        <div class="grid-cell">
            <p></p>
        </div>
    </div>
    <div class="content-grid-1x1 txt-inner-2cols m-b-60">
        <div class="grid-cell">
            <h3 class="h3">Этикетки на бутылки</h3>
            <p>Основные требования к этикеткам на бутылки:</p>
            <ul>
                <li>возможность быстрого отклеивания и переклейки в случае дефектов этикетировании;</li>
                <li>защита красочного слоя от истирания и воздействия агрессивных сред;</li>
                <li>считываемость штрих-кодов или куар-кодов, соответствие размеров шрифтов;</li>
                <li>правильно подобранные материалы в зависимости от формы и материала тары;</li>
                <li>оригинальное внешнее исполнение.</li>
            </ul>
        </div>
        <div class="grid-cell">
            <h3 class="h3">Пивные этикетки</h3>

            <ul>
                <li>применение особо тонких плёнок;</li>
                <li>наличие смываемого материала;</li>
                <li>использование технологии глубокой печати для металлизированных красок в комбинации с офсетом или флексографией; </li>
                <li>применение специальных красок, прожигаемых лазером для нанесения даты розлива и другой информации;</li>
                <li>обеспечение бесперебойной работы этикетировщиков на скоростях до 60 тыс. бут/час.</li>
            </ul>
        </div>
    </div>

    <div class="content-grid-1x1 txt-inner-2cols m-b-60">
        <div class="grid-cell">

            <ul>
                <li>максимально экономичные решения для любых тиражей;</li>
                <li>наличие различных способов печати и отделки;</li>
                <li>наличие сертификации производства и стандартов качества.</li>
            </ul>
        </div>
        <div class="grid-cell">
            <h3 class="h3">Этикетки для косметики</h3>
            <ul>
                <li>устойчивость к масло-, спирто- и жиросодержащим веществам;</li>
                <li>влаго или термостойкость;</li>
                <li>эластичность материалов для мягкой тары;</li>
                <li>доступность использования цифровой печати в том числе инкджет, комбинации глубокой печати с офсетом, флексографией и трафаретом;</li>
                <li>доработка дизайнов.</li>
            </ul>
        </div>
    </div>
    <div class="content-grid-1x1 txt-inner-2cols m-b-60">
        <div class="grid-cell">
            <h3 class="h3">Этикетки для бытовой химии и товаров для дома</h3>
            <ul>
                <li>большой опыт работы с крупнейшими производителями;</li>
                <li>специально разработанные материалы и решения.</li>
            </ul>
        </div>
        <div class="grid-cell">
            <h3 class="h3">Этикетки на товары химической продукции</h3>
            <p>Этикетки на товары автохимии:</p>
            <ul>
                <li>собственная металлизация материалов;</li>
                <li>возможность изготовления специальных материалов с усиленными клеями;</li>
                <li>возможность применения решений для защиты от подделок.</li>
            </ul>
        </div>
    </div>
    <div class="content-grid-1x1 txt-inner-2cols m-b-60">
        <div class="grid-cell">
            <h3 class="h3">Этикетки с куар-кодами, штрих-кодами и любой переменной информацией</h3>
            <ul>
                <li>возможность использования цифровой печати;</li>
                <li>использование специальных пет подложек для предотвращения обрывов при этикетировании;</li>
                <li>валидация этикеток «честный знак»;</li>
                <li>подбор материалов и лаков.</li>
            </ul>
        </div>
        <div class="grid-cell">
            <h3 class="h3">Промо-этикетки</h3>
            <ul>
                <li>возможность изготовления многостраничных конструкций;</li>
                <li>нанесение переменной информации;</li>
                <li>использование скретч красок;</li>
                <li>нанесение выборочного клея;</li>
                <li>применение специальных разработок;</li>
                <li>помощь в доработке дизайна.</li>
            </ul>
        </div>
    </div>
    
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
                                <img src="img/logo.PNG" alt="APH GROUP">
                                
                            </a>
                        </div>
                        <div class="footer-contacts">
                            <a href="mailto:APH GROUP" class="footer-email">APH GROUP</a>
                            
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

<script src="/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>