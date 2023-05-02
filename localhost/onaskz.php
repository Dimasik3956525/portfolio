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
    <a href="/onas.php" class="lang-change-link en">ru</a>                    
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
            <section class="about-values over-hidden">
                <div class="wrapper inner-thin">
            
                    <div class="content-grid-1x1">
                        <div class="grid-cell">
                            <h2 class="h2" style="margin-bottom:0">Біздің миссиямыз</h2>
            
                            <div class="about-performance">
                                
                                                        <p>Жоғары сапалы өнімдер мен қызметтерді ұсына отырып және жақсырақ және тұрақты әлемге үлес қосу арқылы тұтынушыларымыз үшін жаңа құндылық жасау.</p><p>
            
                                    </p><p>Компания қоғамдық ұйым болып табылады. <br>
                                        Біздің миссиямыз - тұрақты әлемді алға жылжыту арқылы өмірді байыту.</p>
                                    
                                    <p>Біз ең жоғары сапалы өнімдер мен қызметтерді ұсынуға және клиенттеріміздің бизнесін жақсартатын құнды жасауға ұмтыламыз.
                                        Шешім қабылдау кезінде біз өзімізден өзіміз өндірген өнім тұтынушыларымыз үшін құнды ма деп үнемі сұраймыз.
                                        <br>
                                        Шешім қабылдаған кезде біз өзімізден өзіміз өндірген нәрсенің тұтынушылар үшін құндылығы бар ма деп сұраймыз.</p>
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
                            <h2 class="h2">Біздің көзқарасымыз</h2>
            
                        </div>
                        <div class="grid-cell">
            
                                                <p>Біз бүкіл әлем бойынша жапсырма және авто сәйкестендіру индустриясында көшбасшы және ең беделді компания болуға және үнемі өзгеріп отыратын әлемде тұтынушыларымыздың күткенінен асып түсуге тырысамыз.</p>
                                <p>Біздің негізгі қызметіміз - өнімдерге эмоциялар мен ақпаратты қосу, осылайша тұтынушыларымыз (және олардың тұтынушылары) үшін дәлдік пен дәйектілікті қамтамасыз ететін, еңбекті және басқа ресурстарды үнемдейтін, сенімділікті арттыратын және эмоционалды байланыстарды қалыптастыратын құндылық жасайды.</p>
                                <p>Біз компания құнының (материалдық және материалдық емес) максималды өсуіне ұмтыламыз, ол компанияның көлемімен емес, клиенттер мен акционерлердің оған деген сенімінің дәрежесімен өлшенеді.</p>
                            
            
            
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
                            <h2 class="h2" style="margin-bottom:0">1.	Тиімділік. Әрқашан желіде</h2>
            
                            <div class="about-performance">
                                
                                            <p>APH Group баспаханасы – клиентке бағытталған компания. Басқаша айтқанда, компанияның барлық жұмысы баспахана тұтынушылары жеке талаптарды ескере отырып, келісім-шартта белгіленген мерзімде және ең жақсы бағамен тұрақты жоғары сапалы өнімді алатындай құрылымдалған.</p>

                                           <h2>2. Сату. Ең бастысы - өзара түсіністік.</h2> 
<p>APH Group сату қызметі тұтынушыларға жан-жақты қолдау көрсететін жоғары деңгейдегі кәсіпқойлардан тұрады: олар кеңес береді, белгілі бір материалдарды немесе технологияларды пайдалануды ұсынады, жабдық мүмкіндіктерінің толық спектрін пайдалану арқылы бағаларды оңтайландырады және ынтымақтастық схемасын жоспарлауға көмектеседі.</p>
<h2>3. Қызметкерлер. Кәсібилік пен берілгендік.</h2>
<p>APH Group баспаханасында еңбекақы төлеу жүйесі әрбір қызметкердің ортақ істің табысты болуына жеке мүддесіне құрылған. Қызметкерлерді ұдайы оқытумен қатар тәлімгерлік тәжірибеде – тәжірибелі мамандар өз білімін жаңадан келгендерге беретін принцип. Таңдалған курстың дұрыстығы кадрлардың тұрақсыздығымен дәлелденеді - APH тобына көп жылдар бұрын келген мамандардың көпшілігі осында және бүгінде жұмыс істейді.</p>

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
                                <img src="img/logo.PNG" alt="APH-GROUP">
                                
                            </a>
                        </div>
                        <div class="footer-contacts">
                            <a href="mailto:" class="footer-email">spb@okil-sato.ru</a>
                            
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