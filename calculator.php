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
        $titlePage = "Calculadoras";
        $descriptionPage = "Calculadora de Margem, Calculadora Fibonacci, Calculadora de Pontos de Pivô, Calculadora de Lucro, Calculadora Pip e Conversor de Moedas.";
        $urlPage = "-";
        include_once 'includes/head/head.php';
        ?>
    </head>
    <body>
        <?php
        include_once 'includes/header/header.php';
        ?>
        <header class="masthead" style="background-image: url('<?php echo $urlLink?>img/calculator.jpg')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="site-heading">
                            <h1>Calculadoras</h1>
                            <span class="subheading">Calculadora de Margem, Calculadora Fibonacci, Calculadora de Pontos de Pivô, Calculadora de Lucro, Calculadora Pip e Conversor de Moedas.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
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
        <div class="container margin-top-15pixel">
            <div class="row">
                <div class="col-md-5">
                    <iframe frameborder="0" scrolling="no" height="500" width="100%" allowtransparency="true" marginwidth="0" marginheight="0" src="https://ssltools.forexprostools.com/margin-calculator/index.php?force_lang=12&acc=12&pair=1"></iframe>
                </div>
                <div class="col-md-7">
                    <iframe frameborder="0" scrolling="auto" height="500" width="100%" allowtransparency="true" marginwidth="0" marginheight="0" src="https://ssltools.forexprostools.com/fibonacci-calculator/index.php?force_lang=12"></iframe>
                </div>
            </div>
        </div>
        <hr>
        <div class="container margin-top-15pixel">
            <div class="row">
                <div class="col-md-8">
                    <iframe frameborder="0" scrolling="auto" height="600" width="100%" allowtransparency="true" marginwidth="0" marginheight="0" src="https://ssltools.forexprostools.com/pivot-calculator/index.php?force_lang=12"></iframe>
                </div>
                <div class="col-md-4">
                    <iframe frameborder="0" scrolling="no" height="600" width="100%" allowtransparency="true" marginwidth="0" marginheight="0" src="https://ssltools.forexprostools.com/profit-calculator/index.php?force_lang=12&acc=12&pair=1"></iframe>
                </div>
            </div>
        </div>
        <hr>
        <div class="container margin-top-15pixel">
            <div class="row">
                <div class="col-md-3">
                    <iframe frameborder="0" scrolling="auto" height="640" width="100%" allowtransparency="true" marginwidth="0" marginheight="0" src="https://ssltools.forexprostools.com/currency-converter/index.php?from=17&to=12&force_lang=12"></iframe> 
                </div>
                <div class="col-md-7 offset-2">
                    <iframe frameborder="0" scrolling="auto" height="640" width="100%" allowtransparency="true" marginwidth="0" marginheight="0" src="https://ssltools.forexprostools.com/pip-calculator/index.php?force_lang=12&acc=12"></iframe>
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
