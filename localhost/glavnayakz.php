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
    <a href="index.php" class="lang-change-link en">ru</a>                    
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


        <section class="txt-img-2col-fullsize">
            <div class="wrapper p-wrap-left p-wrap-right">
                <div class="txt-half-50">
                                <h2 class="h2">«APH GROUP» баспаханасы</h2>
                    <div class="white-space-txt-wrap">
                        <p>APH GROUP – өздігінен жабысатын жапсырмаларды өндіру бойынша қазақстандық көшбасшы.</p>
                        
                        <p>Тұтынушылардың қажеттіліктеріне, тұрақтылық пен технологиялық жетістіктерге назар аудару бізге үнемі өзгеретін әлемде сенімді және тұрақты серіктестер болуға мүмкіндік берді.</p>
                        
                        <p>Біз тұтынушыға бағытталған инновацияның негізін құрайтын жаңа идеялар мен шығармашылықты құптаймыз.</p>
                    </div>
                            </div>
                            <div class="img-half">
                                <img src="/img/stonok.PNG" alt="">
                                <div class="green-overlay">
                                    <span>Біз ISO 9001 сапа менеджменті жүйесі бойынша жұмыс істейміз.</span>
                                </div>
            </div>
            
            </div>
        </section>


        <section class="main-services-list">
            <div class="wrapper p-wrap-left p-wrap-right">
                <h2 class="h2 white">Мы производим</h2>
                <div class="services-list-wrap">
        
                    <div class="service-list-item"><div class="img-overlay"><img src="/img/Самоклеящаяся_этикетка-removebg-preview.png" width="150px" alt="Самоклеящиеся этикетки"></div>
                    <a class="service-list-item__link" href="проэкт/formshop1.html" ><div class="service-list-item__title" >Өздігінен жабысатын жапсырма</div></a>
                            </div>
        <div class="service-list-item"><div class="img-overlay"><img src="/img/Термоусадочная этикетка.webp" width="50px" alt="Термоусадочная этикетка"></div>
                                <a class="service-list-item__link" href="проэкт — копия/formshop2.html" >
                                    <div class="service-list-item__title">Жапсырманы кішірейту</div></a>
                            </div>
        <div class="service-list-item"><div class="img-overlay"><img src="/img/Вплавляемые_этикетки-removebg-preview.png" width="150px" alt="Вплавляемые этикетки (IML и BML)"></div>
                                <a class="service-list-item__link" href="проэкт — копия (2)/formshop3.html" >
                                    <div class="service-list-item__title">Қалыптағы жапсырмалар</div></a>
                            </div>
        <div class="service-list-item"><div class="img-overlay"><img src="/img/Промо-этикетка-removebg-preview.png" width="150px" alt="Промо-этикетка"></div>
                                <a class="service-list-item__link" href="проэкт — копия (3)/formshop4.html">
                                    <div class="service-list-item__title">жарнамалық белгі</div></a>
                            </div>
        <div class="service-list-item"><div class="img-overlay"><img src="/img/Цифровая_этикетка-removebg-preview.png" width="150px" alt="Цифровая этикетка"></div>
                                <a class="service-list-item__link" href="проэкт — копия (4)/formshop5.html">
                                    <div class="service-list-item__title">сандық белгі</div></a>
                            </div>
        <div class="service-list-item"><div class="img-overlay"><img src="/img/Круговая этикетка.png" width="150px" alt="Круговая этикетка"></div>
                                <a class="service-list-item__link" href="проэкт — копия (5)/formshop6.html" >
                                    <div class="service-list-item__title">дөңгелек белгі</div></a>
                            </div>
        <div class="service-list-item"><div class="img-overlay"><img src="/img/Специальная_этикетка-removebg-preview.png" width="150px" alt="Специальная этикетка"></div>
                                <a class="service-list-item__link" href="проэкт — копия (6)/formshop7.html" >
                                    <div class="service-list-item__title">арнайы белгі</div></a>
                            </div>
        <div class="service-list-item"><div class="img-overlay"><img src="/img/DataMatrix & QR-код.webp" width="150px" alt="Этикетки DataMatrix &amp; QR-код"></div>
                                <a class="service-list-item__link" href="проэкт — копия (7)/formshop8.html">
                                    <div class="service-list-item__title">DataMatrix &amp; QR-код</div></a>
                            </div>
        <div class="service-list-item"><div class="img-overlay"><img src="/img/Гибкая_упаковка-removebg-preview.png" width="150px" alt="Гибкая упаковка"></div>
                                <a class="service-list-item__link" href="проэкт — копия (8)/formshop9.html">
                                    <div class="service-list-item__title">Икемді қаптама</div></a>
                            </div>
                </div>
            </div>
        </section>



        



        <section class="tech-section-home">
            <div class="wrapper p-wrap-left p-wrap-right">
                <h2 class="white h2">Баспа технологиялары</h2>
                <p class="large-p white">
                    Материалдардың, басып шығарудың және әрлеудің бірегей комбинациясы өніміңіздің бірегей көрінісін жасауға көмектеседі.        </p>
                <div class="tech-section-2col">
                    <div class="tech-dection-list">
                        <div class="tech-list-item">
                                <div class="img-overlay"><img src="/img/Флексография.jpg" width="150px" alt="Флексография"></div>
                                <a class="tech-list-item__link" href="technology/flexography.html">
                                    <div class="tech-list-item__title">Флексография</div>
                                </a>
                            </div>
        <div class="tech-list-item">
                                <div class="img-overlay"><img src="/img/Трафаретная печать.jpg" width="150px" alt="Трафаретная печать"></div>
                                <a class="tech-list-item__link" href="technology/screen-printing.html">
                                    <div class="tech-list-item__title">Экранды басып шығару</div>
                                </a>
                            </div>
        <div class="tech-list-item">
                                <div class="img-overlay"><img src="/img/Глубокая печать.jpg" width="150px" alt="Глубокая печать"></div>
                                <a class="tech-list-item__link" href="technology/intaglio.html">
                                    <div class="tech-list-item__title">Гравюр</div>
                                </a>
                            </div>
        <div class="tech-list-item">
                                <div class="img-overlay"><img src="/img/Офсетная печать.jpg" width="150px" alt="Офсетная печать"></div>
                                <a class="tech-list-item__link" href="technology/offset-printing.html">
                                    <div class="tech-list-item__title">Офсетті басып шығару</div>
                                </a>
                            </div>
        <div class="tech-list-item">
                                <div class="img-overlay"><img src="/img/Цифровая печать.jpg" width="150px" alt="Цифровая печать"></div>
                                <a class="tech-list-item__link" href="technology/digital-printing.html">
                                    <div class="tech-list-item__title">Сандық басып шығару</div>
                                </a>
                            </div>
        <div class="tech-list-item">
                                <div class="img-overlay"><img src="/img/Послепечатная обработка.jpg" width="150px" alt="Послепечатная обработка"></div>
                                <a class="tech-list-item__link" href="technology/poslepechatnaya-obrabotka/">
                                    <div class="tech-list-item__title">Баспадан кейінгі өңдеу</div>
                                </a>
                            </div>            </div>
        
                    <div class="lead-form-wrap">
                        <form action="phone.php" method="POST">



                            <input name="form" type="hidden" value="call">
                            <input name="resource_id" type="hidden" value="1">
                            <div class="lead-form-header">Технология туралы сұрақтарыңыз бар ма?</div>
                            <div class="lead-form-descr">
                                Өтінім қалдырыңыз, біз сізге бір күн ішінде қайта қоңырау шалып, басып шығаруға қатысты барлық мәселелер бойынша кеңес береміз                    </div>
                            <div class="lead-form-fields">
                                <div class="lead-form-field">

                                    
                                    <input type="text" name="user_name"  class="text-field" placeholder="Имя" required="">
                                    <label for="field_name" class="text-field-label">Аты</label>
                                </div>
                               
                                <div class="lead-form-field">
                                    <input type="tel" name="user_phone"  class="text-field" placeholder="+7 (___) ___ __ __" required="">
                                    <label for="field_phone" class="text-field-label">Телефон</label>
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
                                    <img src="img/logo.PNG" alt="aph-group.kz"></a></div>
                            <div class="footer-contacts">
                                <a href="mailto:aph-group.kz" class="footer-email">aph-group.kz</a>
                            </div></div>
                        <div class="footer-col footer-col-2">
                            <div class="footer-cities">  
                         <div class="city-item">
            <div class="city-title"></div>
           <div class="footer-section">
                                 <h3>Контактілер</h3>
                                    <p>Адрес: ул. Примерная, 123</p>
                                    <p>Телефон: +7 123-45-67</p>
                                    <p>Email: info@example.com</p>
                                  </div> </div></div></div>
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
                            </div></div></div></div> </div>
            <div class="footer-bottom-wrap">
                <div class="wrapper p-wrap-left p-wrap-right">
                    <div class="footer-bottom">
                        <div class="footer-bottom-left">
                            <p>©2023 APH GROUP </p></div></div></div></div>
        </footer>
	
   <script src="/js/script.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>