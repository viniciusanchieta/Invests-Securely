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
        $titlePage = "Sobre nós";
        $descriptionPage = "I.S - Mundo dos Investimentos.";
        $urlPage = "-";
        include_once 'includes/head/head.php';
        ?>
    </head>
    <body>
        <?php
        include_once 'includes/header/header.php';
        ?>
        <header class="masthead" style="background-image: url('<?php echo $urlLink?>img/about.jpg')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="site-heading">       
                            <h1></h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center title-about">
                    <h2>I.S - Mundo dos Investimentos</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 mx-auto text-center body-about">
                    <p class="margin-top-5pixel">Nossa companhia tem o total entendimento de que sua fonte de renda seja uma das coisas mais importantes para você. </p>
                    <p class="margin-top-10pixel">A única coisa que está entre você e seu objetivo é a história que você continua inventando a si mesmo, o motivo porque você não pode alcançá-lo. Se você diz, “eu posso” ou “eu não posso”, você está certo de qualquer maneira, porque é só você quem tem a total decisão das suas escolhas. Não há nenhuma maneira de ter sucesso nos negócios sem os mais altos padrões éticos! </p>
                    <p class="margin-top-10pixel">Portanto nós da Invests Securely temos como total objetivo lhe fornecer segurança e bons resultados, para que você, novo investidor possa ter nesse mercado uma consultoria em quem possa confiar.</p>
                    <p class="margin-top-10pixel">Não importa o quanto de dinheiro você tem, acreditamos que com bons investimentos podemos colher bons frutos, e com isso te mostrar um modelo de pensamento aberto, com uma nova estrutura emocional e sem dúvidas, alcançando seus objetivos. </p>
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
