<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <?php
    $imagePage = "-";
    $titlePage = "Invests Securely";
    $descriptionPage = "A melhor forma de investir.";
    $urlPage = "-";
    include_once 'includes/head/head.php';
    ?>
</head>
<body>        
    <?php
    include_once 'includes/header/header.php';
    ?>
    <header class="masthead" style="background-image: url('<?php echo $urlLink ?>img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Olá, investidor!</h1>
                        <span class="subheading">Nós da Invests Securely ficámos gratos com sua visita, fique a vontade e um bom investimento.</span>
                        <div class="social-heading">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/invests_securely/" target="_blank">
                                        <span class="fa-stack fa-lg">
                                            <i class="fas fa-circle fa-stack-2x"></i>
                                            <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.facebook.com/InvestsSecurely/" target="_blank">
                                        <span class="fa-stack fa-lg">
                                            <i class="fas fa-circle fa-stack-2x"></i>
                                            <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>   
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="#">
                                <img class="d-block w-100" src="<?php echo $urlLink; ?>img/slide/1.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>O que é day trade?</h5>
                                    <p>Ter bons lucros em um curtíssimo espaço de tempo é a expectativa de quem aposta no day trade.</p>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo $urlLink; ?>img/slide/2.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Fundos de Investimento no Exterior</h5>
                                <p>Como Diversificar Globalmente com Rendimentos Elevados.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo $urlLink; ?>img/slide/3.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Fundos de investimento</h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container-fluid tradingview-meta margin-top-15pixel">
    <div class="row">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://br.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Cotações</span></a></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
                {
                    "symbols": [
                    {
                        "title": "S&P 500",
                        "proName": "OANDA:SPX500USD"
                    },
                    {
                        "title": "Xangai Composto",
                        "proName": "INDEX:XLY0"
                    },
                    {
                        "title": "EUR/USD",
                        "proName": "FX_IDC:EURUSD"
                    },
                    {
                        "title": "BTC/USD",
                        "proName": "BITFINEX:BTCUSD"
                    },
                    {
                        "title": "ETH/USD",
                        "proName": "BITFINEX:ETHUSD"
                    }
                    ],
                    "locale": "br"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->
    </div>
</div>

<div class="container">
    <div class="row margin-top-15pixel">
        <div class="col-md-8">
            <div style="margin-left:0px;">
                <iframe  height=600; width=100%; src="https://br.widgets.investing.com/leading-stocks?theme=darkTheme&pairs=18599,18626,1127939,50509,18621,18605,18606,18616,18604,18620,18617,18633,18642,18639,18651,1128724,18657,18663,18666,18667,18669,18670,18790,18672,18673,1128694,18691,18689,18692,18698,18701,18706,18708,18709,102072,40433,18770,18717,18724,1128730,1127944,18736,18738,18740,18742,18747,1128729,18749,18750,18764,40436,18593,18776,18775,18653,1128725,1128728,18804,18818,18797,18807,18812,18814,986421,18820" width="100%" height="100%" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe>
            </div>
        </div>
        <div class="col-md-4">
            <div style="margin:0 auto;" >                   
                <iframe width="100%" height="400" src="https://ssltsw.forexprostools.com?lang=12&forex=2103,1617,1513,1,3,9,10&commodities=8833,8849,8830,8836,8832,8918,8911&indices=23660,166,172,27,179,170,174&stocks=358,474,446,334,345,346,347&tabs=1,2,3,4" width="100%" height="467"></iframe>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row margin-top-15pixel">
        <div class="col-md-3">             
            <iframe frameborder="0" scrolling="no" height="350" width="100%" allowtransparency="true" marginwidth="0" marginheight="0" src="https://ssltools.forexprostools.com/market_quotes.php?force_lang=12&tabs=1,2,3,5&tab_1=1,2,3,7,9&tab_2=27,170,172,174,175&tab_3=18599,18692,18706,18749,18814&tab_4=8830,8831,8836,8849,8862&tab_5=8907,8906,8905,8895,8899&select_color=000000&default_color=0059b0"></iframe>

        </div>
        <div class="col-md-7 offset-2">
            <div>
                <iframe height="500" width="100%" src="https://ssltvc.forexprostools.com/?pair_ID=941612&height=480&width=650&interval=300&plotStyle=area&domain_ID=30&lang_ID=12&timezone_ID=10"></iframe>
            </div>
        </div>            
    </div>
</div>
<hr>
<div class="container">
    <div class="row margin-top-15pixel">            
        <div class="col-md-7">
            <iframe src="https://br.widgets.investing.com/crypto-currency-rates?theme=darkTheme" width="100%" height="600" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe>
        </div>        
        <div class="col-md-5">           
            <iframe src="https://br.widgets.investing.com/top-cryptocurrencies?theme=darkTheme" width="100%" height="600" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row margin-top-15pixel">                         
        <div class="col-md-5">           
            <iframe width="100%" height="400" src="https://br.widgets.investing.com/live-indices?theme=darkTheme&pairs=166,27,172,177,170" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe>
        </div>
        <div class="col-md-7">
            <iframe width="100%" height="500" src="https://br.widgets.investing.com/ico-calendar?theme=darkTheme&roundedCorners=true" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe>
        </div>   
    </div>
</div>
<hr>
<footer>
    <?php
    include_once 'includes/footer/footer.php';
    ?>
</footer>
<?php
include_once 'includes/footer/footer-js.php';
?>
</body>
</html>
