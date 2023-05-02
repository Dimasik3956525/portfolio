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
                    <a class="logo" href="glavnayakz.php" >
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
                                <li class="first"><a href="onaskz.php">Біз туралы</a></li>
                                <li><a href="produktkz.php">Өнімдер</a></li>
                                <li><a href="portfoliokz.php">Портфолио</a></li>
                                <li class="last"><a href="contactkz.php">Контактілер</a></li> 
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
    <a href="/portfolio.php" class="lang-change-link en">ru</a>                    
                        </div>
                    </div>
                    <div class="header-phone">
                        <a href="tel:+78005009422" class="top-phone-link tracking">8 (888) 888-88-88</a>
                        <span>Біздің бөлме  </span>
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
                                <div class="service-list-item__title">Өздігінен жабысатын жапсырма</div>
                            </a>
                        </div>
    <div class="service-list-item"><div class="img-overlay"><img src="/assets/images/media/3d/9.jpg" alt="Термоусадочная этикетка"></div>
                            <a class="service-list-item__link" href="label/termousadochnaja-jetiketka/">
                                <div class="service-list-item__title">Жапсырманы кішірейту
                                </div>
                            </a>
                        </div>
    <div class="service-list-item"><div class="img-overlay"><img src="/assets/images/media/3d/12.jpg" alt="Вплавляемые этикетки (IML и BML)"></div>
                            <a class="service-list-item__link" href="label/vplavlyaemaya-etiketka/">
                                <div class="service-list-item__title">Қалыптағы жапсырмалар</div>
                            </a>
                        </div>
    <div class="service-list-item"><div class="img-overlay"><img src="/assets/images/media/3d/8.jpg" alt="Промо-этикетка"></div>
                            <a class="service-list-item__link" href="label/promo-etiketka/">
                                <div class="service-list-item__title">жарнамалық белгі</div>
                            </a>
                        </div>
    <div class="service-list-item"><div class="img-overlay"><img src="/assets/images/media/3d/13.jpg" alt="Цифровая этикетка"></div>
                            <a class="service-list-item__link" href="label/czifrovaya-etiketka/">
                                <div class="service-list-item__title">сандық белгі</div>
                            </a>
                        </div>
    <div class="service-list-item"><div class="img-overlay"><img src="/assets/images/media/3d/14.jpg" alt="Круговая этикетка"></div>
                            <a class="service-list-item__link" href="label/krugovaya-etiketka/">
                                <div class="service-list-item__title">дөңгелек белгі</div>
                            </a>
                        </div>
    <div class="service-list-item"><div class="img-overlay"><img src="/assets/images/media/3d/1.jpg" alt="Специальная этикетка"></div>
                            <a class="service-list-item__link" href="label/specialnaja-jetiketka/">
                                <div class="service-list-item__title">арнайы белгі</div>
                            </a>
                        </div>
    <div class="service-list-item"><div class="img-overlay"><img src="/assets/images/media/3d/2.jpg" alt="Этикетки DataMatrix  QR-код"></div>
                            <a class="service-list-item__link" href="label/etiketki-datamatrix-and-qr-kod/">
                                <div class="service-list-item__title">DataMatrix QR коды</div>
                            </a>
                        </div>
    <div class="service-list-item"><div class="img-overlay"><img src="/assets/images/media/3d/3.jpg" alt="Гибкая упаковка"></div>
                            <a class="service-list-item__link" href="label/doj-pak/">
                                <div class="service-list-item__title">Икемді қаптама</div>
                            </a>
                        </div>
            </div>
        </div>
    </section>


    <div class="content-grid-1x1 txt-inner-2cols m-b-60 m-t-60">
        <div class="grid-cell">
            <h3>Өздігінен жабысатын жапсырмаларды өндіруде әр түрлі материалдар қолданылады.:</h3>
            <ul>
                <li>өздігінен жабысатын қағаз, соның ішінде шарап;</li>
                <li>полиэтиленнен, полипропиленнен, pet пен олардың металданған нұсқаларынан жасалған өздігінен жабысатын пленкалар;</li>
                <li>өздігінен жабысатын шарап материалдары;</li>
                <li>алюминий және қағаздары бар өздігінен жабысатын біріктірілген пленкалар;</li>
                <li>өздігінен жабысатын термосезімтал қағаздар мен пленкалар;</li>
                <li>әртүрлі қолданбаларға арналған желімдер мен субстраттардың үлкен таңдауы.</li>
            </ul>
        </div>
        <div class="grid-cell">
            <p></p>
        </div>
    </div>
    <div class="content-grid-1x1 txt-inner-2cols m-b-60">
        <div class="grid-cell">
            <h3 class="h3">бөтелке жапсырмалары</h3>
            <p>Бөтелке жапсырмаларына қойылатын негізгі талаптар:</p>
            <ul>
                <li>таңбалау ақаулары кезінде тез қабыршақтану және қайта желімдеу мүмкіндігі;</li>
                <li>бояу қабатын тозудан және агрессивті ортаның әсерінен қорғау;</li>
                <li>штрих-кодтардың немесе кваркодтардың оқылу мүмкіндігі, қаріп өлшемдерінің сәйкестігі;</li>
                <li>ыдыстың пішіні мен материалына байланысты дұрыс таңдалған материалдар;</li>
                <li>түпнұсқа сыртқы.</li>
            </ul>
        </div>
        <div class="grid-cell">
            <h3 class="h3">сыра жапсырмалары</h3>

            <ul>
                <li>ерекше жұқа пленкаларды пайдалану;</li>
                <li>жууға болатын материалдың болуы;</li>
                <li>офсеттік немесе флексографиямен үйлестіре отырып, металл бояулар үшін гравюралық басып шығару технологиясын пайдалану; </li>
                <li>құйылған күнін және басқа ақпаратты қолдану үшін лазермен күйдірілген арнайы бояуларды қолдану;</li>
                <li>сағатына 60 мың бөтелкеге ​​дейінгі жылдамдықпен таңбалаушылардың үздіксіз жұмысын қамтамасыз ету.</li>
            </ul>
        </div>
    </div>

    <div class="content-grid-1x1 txt-inner-2cols m-b-60">
        <div class="grid-cell">

            <ul>
                <li>кез келген айналым үшін ең үнемді шешімдер;</li>
                <li>әртүрлі басып шығару және өңдеу әдістерінің болуы;</li>
                <li>өндірісті сертификаттау және сапа стандарттары.</li>
            </ul>
        </div>
        <div class="grid-cell">
            <h3 class="h3">Косметика жапсырмалары</h3>
            <ul>
                <li>майға, алкогольге және құрамында май бар заттарға төзімділік;</li>
                <li>ылғалға немесе ыстыққа төзімділік;</li>
                <li>жұмсақ ыдыстарға арналған материалдардың икемділігі;</li>
                <li>сандық басып шығаруды, оның ішінде сия бүріккішпен, офсеттік, флексографиямен және трафаретпен гравюралық басып шығару комбинацияларын пайдаланудың болуы;</li>
                <li>жобаларды пысықтау.</li>
            </ul>
        </div>
    </div>
    <div class="content-grid-1x1 txt-inner-2cols m-b-60">
        <div class="grid-cell">
            <h3 class="h3">Тұрмыстық химия және тұрмыстық бұйымдарға арналған жапсырмалар</h3>
            <ul>
                <li>ірі өндірушілермен жұмыс істеудің үлкен тәжірибесі;</li>
                <li>арнайы әзірленген материалдар мен шешімдер.</li>
            </ul>
        </div>
        <div class="grid-cell">
            <h3 class="h3">Химиялық тауарларға арналған жапсырмалар</h3>
            <p>Автохимиялық тауарларға арналған белгілер:</p>
            <ul>
                <li>материалдарды меншікті металдандыру;
                </li>
                <li>арматураланған желіммен арнайы материалдарды дайындау мүмкіндігі;</li>
                <li>контрафактілікке қарсы шешімдерді қолдану мүмкіндігі.</li>
            </ul>
        </div>
    </div>
    <div class="content-grid-1x1 txt-inner-2cols m-b-60">
        <div class="grid-cell">
            <h3 class="h3">Qar кодтары, штрих кодтары және кез келген айнымалы ақпараты бар белгілер</h3>
            <ul>
                <li>цифрлық басып шығаруды пайдалану мүмкіндігі;</li>
                <li>таңбалау кезінде үзілістерді болдырмау үшін үй жануарларына арналған арнайы субстраттарды пайдалану;</li>
                <li>«адал белгі» жапсырмаларының валидациясы;</li>
                <li>материалдар мен лактарды таңдау.</li>
            </ul>
        </div>
        <div class="grid-cell">
            <h3 class="h3">жарнамалық белгілер</h3>
            <ul>
                <li>көп беттік құрылымдарды дайындау мүмкіндігі;</li>
                <li>айнымалы ақпаратты қолдану;</li>
                <li>сызат бояуларын қолдану;</li>
                <li>селективті желім жағу;</li>
                <li>арнайы әзірлемелерді қолдану;</li>
                <li>дизайнға көмектесу.</li>
            </ul>
        </div>
    </div>
    
    <section class="email-us-section">
        <div class="wrapper p-wrap-left p-wrap-right">
            <div class="footer-lead-form-wrap">
                <form action="mail.php" method="POST" class="lead-form" >
                    <input name="form" type="hidden" value="call">
                    <input name="resource_id" type="hidden" value="6">
                    <div class="h2 white">Бізге жазыңыз</div>
                    <div class="lead-form-descr">
                        Өтінім қалдырыңыз - біз сізбен бір сағат ішінде хабарласамыз              </div>
                    <div class="lead-form-fields">
                        <div class="lead-form-field">
                            <input type="text" name="user_name" id="field_name" class="text-field" placeholder="Имя" required="">
                            <label for="field_name" class="text-field-label">Аты</label>
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
                            <label for="field_msg" class="text-field-label">Пікір</label>
                        </div>
                    </div>
                    <div class="lead-form-fields">
                        <div class="lead-form-button">
                            <button type="submit" class="btn btn-fill lead-form-submit">Өтінішіңізді жіберіңіз</button>
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
                                <img src="img/logo.PNG" alt="APH-GROUP">
                                
                            </a>
                        </div>
                        <div class="footer-contacts">
                            <a href="mailto:spb@okil-sato.ru" class="footer-email">APH-GROUP</a>
                            
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
                            <a href="produkt.html">Өнімдер</a></li>
                                <li><a href="onas.html">Біз туралы</a></li>
                                    <li><a href="portfolio.html">Портфолио</a></li>
                                    <li><a href="contact.html">Контактілер</a></li>
                                
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