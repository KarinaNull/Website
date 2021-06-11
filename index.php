<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <header>
            <form name="search" action="#" method="get">
                <input type="text" name="q" placeholder="Search"><button type="submit">GO</button>
            </form>
        </header>
        <nav>
            <div class="top-menu">
                <ul>
                    <li><a href="#">О салоне</a></li>
                    <li><a href="#">Услуги</a>
                        <ul>
                            <li><a href="#">Стрижки</a></li>
                            <li><a href="#">Окрашивания</a></li>
                            <li><a href="#">Уходовые процедуры</a></li>
                            <li><a href="#">Био-завивки</a></li>
                            <li><a href="#">Укладки и прически</a></li>
                            <li><a href="#">Лечение волос</a></li>
                            <li><a href="#">Наращивание волос</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Витрина</a>
                        <ul>
                            <li><a href="#">Кондиционеры</a></li>
                            <li><a href="#">Маски</a></li>
                            <li><a href="#">Красители</a></li>
                            <li><a href="#">Оксиды</a></li>
                            <li><a href="#">Средства укладки</a></li>
                            <li><a href="#">Шампуни</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>
        </nav>
        <aside>
            <nav>
                <ul class="aside-menu">
                    </li>
                    <li><a href="#">Акции</a>
                        <ul>
                            <li><a href="#">Химическая завивка + Стрижка</a></li>
                            <li><a href="#">Окрашивание Lable-Profesional</a></li>
                            <li><a href="#">Счастливые часы</a></li>
                            <li><a href="#">Пенсионерам</a></li>
                            <li><a href="#">Детские стрижки</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Цены</a></li>
                    <li><a href="#">Актуальное</a></li>
                    <li><a href="#">Условия сотрудничества</a></li>
                </ul>
            </nav>
            <h2>Наше местоположение</h2>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.462180532291!2d73.44916371525068!3d4.689459343059468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b400909c55795c9%3A0xbbf9b30ab78c63d8!2sLUX*2A%20North%20Male%20Atoll%20Resort%20%26%20Villas!5e0!3m2!1sru!2sru!4v1623410489140!5m2!1sru!2sru" width="230" height="160" style="border:0;"></iframe></p>
        </aside>
        <section>
            <blockquote>
                <p>
                    <?php
                    $quotes = file('quotes.txt');
                    $randomQuote = $quotes[rand(0, count($quotes) - 1)];
                    echo $randomQuote;
                    ?>
                </p>
                <cite>John Doe, Lorem Ipsum</cite>
            </blockquote>
            <div class="Section-p">
                <p>
                    <?php
                    readfile('description.txt');
                    ?>
                </p>
            </div>
            <figure>
                <img src="images/color-lab.png" width="320" height="175" alt="">
            </figure>
            <figure>
                <img src="images/nails-studio.png" width="320" height="175" alt="">
            </figure>
            <h3>Популярные услуги</h3>
            <div class="others-products">
                <figure>
                    <img src="images/perming.png" width="96" height="96" alt="">
                    <figcaption>Завивки</figcaption>
                </figure>
                <figure>
                    <img src="images/care-procedure.png" width="96" height="96" alt="">
                    <figcaption>Уходы</figcaption>
                </figure>
                <figure>
                    <img src="images/haircut.png" width="96" height="96" alt="">
                    <figcaption>Стрижки</figcaption>
                </figure>
                <figure>
                    <img src="images/perming-real.png" width="96" height="96" alt="">
                    <figcaption>Укладки</figcaption>
                </figure>
                <figure>
                    <img src="images/coloring.png" width="96" height="96" alt="">
                    <figcaption>Окрашивания</figcaption>
                </figure>
            </div>
        </section>
    </div>
    <footer>
        <div class="social">
            <h4>TWITTER FEED</h4>
            <time datetime="2012-10-23">
                <div href="#">23 oct</div>
            </time>
            <p class="twitter-feed">
                Если моя душа требует перемен, я иду в парикмахерскую и как будто заново родился, и сразу жизнь светит на тебя новыми красками
            </p>
        </div>
        <div class="social-icon">
            <h4>SOCIAL NETWORKS</h4>
            <a href="http://twitter.com/"></a>
            <a href="http://facebook.com/"></a>
            <a href="http://youtube.com/"></a>
        </div>
    </footer>
</body>

</html>