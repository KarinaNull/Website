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
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Услуги</a>
                        <ul>
                            <li><a href="#">Услуга 1</a></li>
                            <li><a href="#">Длинная услуга 2</a></li>
                            <li><a href="#">Услуга 3</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Цены</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>
        </nav>
        <aside>
            <nav>
                <ul class="aside-menu">
                    </li>
                    <li><a href="#">О сайте</a>
                        <ul>
                            <li><a href="#">История</a></li>
                            <li><a href="#">Коллектив</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Карта сайта</a></li>
                    <li><a href="#">Ссылки</a></li>
                </ul>
            </nav>
            <h2>#</h2>
            <p><img src="#" alt="Our offices"></p>
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
                <img src="#" width="320" height="175" alt="">
            </figure>
            <figure>
                <img src="#" width="320" height="175" alt="">
            </figure>
            <h3>Другие товары</h3>
            <div class="others-products">
                <figure>
                    <img src="#" width="96" height="96" alt="">
                    <figcaption>Оружие</figcaption>
                </figure>
                <figure>
                    <img src="#" width="96" height="96" alt="">
                    <figcaption>Оружие</figcaption>
                </figure>
                <figure>
                    <img src="#" width="96" height="96" alt="">
                    <figcaption>Оружие</figcaption>
                </figure>
                <figure>
                    <img src="#" width="96" height="96" alt="">
                    <figcaption>Оружие</figcaption>
                </figure>
                <figure>
                    <img src="#" width="96" height="96" alt="">
                    <figcaption>Оружие</figcaption>
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
                In ultricies pellentesque massa a porta. Aliquam ipsum enim, hendrerit ut porta nec, ullamcorper et
                nulla. In eget mi dui, sit amet scelerisque nunc. Aenean aug
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