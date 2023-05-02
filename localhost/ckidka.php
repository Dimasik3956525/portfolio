<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title>Новая страница</title>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body class="ckidka">
    <div class="wrap">
        <div class="container">
            <h1 class="page-title">Заказ #100</h1>
            <div class="br"></div>
            <div class="block">
                <div class="block-content">
                    <div class="product">
                        <div class="prew-value">
                            <span class="title">Товар:</span>
                            <span class="value-holder">Бесценные знания</span>
                        </div>
                    </div>
                    <div class="prew-value">
                        <span class="title">Цена:</span>
                        <span class="value-holder">$<span class="value">20</span></span>
                    </div>
                    <div class="prew-value">
                        <span class="title">НДС:</span>
                        <span class="value-holder">%<span class="value">12</span></span>
                    </div>
                    <div class="prew-value">
                        <span class="title">Скидка:</span>
                        <span class="value-holder">$<span class="value total-reduction">0</span></span>
                    </div>
                    <div class="prew-value">
                        <span class="title">Итог:</span>
                        <span class="value-holder">$<span class="value total-price">22.4</span></span>
                    </div>
                </div>
                <div class="block-content-calculation">

                    <div class="input-block">
                        <label for="" class="title">Количество</label>
                        <input type="number" min="1" max="9999" class="inp" id="inp_quantity" value="1">
                    </div>
                    <div class="input-block">
                        <label for="" class="title">Скидка</span>
                            <input type="number" min="0" max="50" class="inp" id="inp_reduction" value="0">

                    </div>
                    <div class="block-a">
                            <button class="reset" type="submit">Очистить</button>
                            
                    </div>
                </div>
            </div>
            <div class="br up"></div>
            <div class="di">Детальная информация:</div>
            <div class="discount-string">Ваша скидка % <span class="discount-string-span">10</span> не действительна, так как сумма заказа меньше $50</div>
            <div class="cost">Стоимость Вашей покупки с налогом $<span class="total-price-span">22.4</span></div>
            <div class="installment-pric">Вы можете купить товар в рассрочку на 1 год, с ежемесячной выплатой в размере $<span class="installment-price-span">1.77</span></div>
        </div>
    </div>

    
</body>
<script src="js/app.js"></script>
</html>