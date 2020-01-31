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
    $titlePage = "Material";
    $descriptionPage = "-";
    $urlPage = "-";
    include_once 'includes/head/head.php';
    ?>
</head>
<body>
    <?php
    include_once 'includes/header/header.php';
    ?>
    <header class="masthead" style="background-image: url('<?php echo $urlLink ?>img/material.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Material</h1>                            
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row container-cards">
            <div class="card" style="width: 16rem;">
                <img class="card-img-top" src="<?php echo $urlLink ?>img/material3.jpg" alt="Renda Extra Xperience Invests Securely">
                <div class="card-body">
                    <h5 class="card-title">Renda Extra Xperience<br>2019</h5>
                    <hr />
                    <p class="card-text">Vai perder a oportunidade de ter mais renda extra?</p>
                    <hr />
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Saiba mais</button>
                </div>
            </div>
            <div class="card" style="width: 16rem;">
                <img class="card-img-top" src="<?php echo $urlLink ?>img/material2.jpg" alt="Renda Extra Xperience Invests Securely">
                <div class="card-body">
                    <h5 class="card-title">Fórmula Trader<br>Permanente</h5>
                    <hr />
                    <p class="card-text">Liberdade e independência financeira.</p>
                    <hr />
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg2">Saiba mais</button>
                </div>
            </div>
            <div class="card" style="width: 16rem;">
                <img class="card-img-top" src="<?php echo $urlLink ?>img/material5.jpg" alt="Renda Extra Xperience Invests Securely">
                <div class="card-body">
                    <h5 class="card-title">Mente Milionária<br>Intensiva</h5>
                    <hr />
                    <p class="card-text">Ganhos iniciais de 3 a 15 mil reais mensais tendo...</p>
                    <hr />
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg3">Saiba mais</button>
                </div>
            </div>
            <div class="card" style="width: 16rem;">
                <img class="card-img-top" src="<?php echo $urlLink ?>img/descomplica.jpg" alt="Descomplica Trading Invests Securely">
                <div class="card-body">
                    <h5 class="card-title">Descomplica<br>Trading</h5>
                    <hr />
                    <p class="card-text">Saiba como aplicar os conceitos do trading...</p>
                    <hr />
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg4">Saiba mais</button>
                </div>
            </div>
            <div class="card" style="width: 16rem;">
                <img class="card-img-top" src="<?php echo $urlLink ?>img/material7.jpg" alt="Curso de formacao de Day trader Invests Securely">
                <div class="card-body">
                    <h5 class="card-title">Curso de formação de Day<br>trader</h5>
                    <hr />
                    <p class="card-text">Viver do mercado financeiro nunca esteve tão próximo.</p>
                    <hr />
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg5">Saiba mais</button>
                </div>
            </div>
            <div class="card" style="width: 16rem;">
                <img class="card-img-top" src="<?php echo $urlLink ?>img/material6.jpg" alt="GPVTRADER Invests Securely">
                <div class="card-body">
                    <h5 class="card-title">Zero à Trader<br>GPVTRADER</h5>
                    <hr />
                    <p class="card-text">Curso completo "zero a trader" para quem quer fazer... </p>
                    <hr />
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg6">Saiba mais</button>
                </div>
            </div>
            <div class="card" style="width: 16rem;">
                <img class="card-img-top" src="<?php echo $urlLink ?>img/material4.jpg" alt="Aprenda Tesouro Direto 2.0 Invests Securely">
                <div class="card-body">
                    <h5 class="card-title">Aprenda Tesouro Direto<br>2.0</h5>
                    <hr />
                    <p class="card-text">Aprenda investir no Tesouro Direto com o Coach Financeiro.</p>
                    <hr />
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg7">Saiba mais</button>
                </div>
            </div>
           
            <div class="card" style="width: 16rem;">
                <img class="card-img-top" src="<?php echo $urlLink ?>img/material10.jpg" alt="Aprenda Tesouro Direto 2.0 Invests Securely">
                <div class="card-body">
                    <h5 class="card-title">Como investir em Fundos Imobiliários</h5>
                    <hr />
                    <p class="card-text">O e-book ajuda qualquer pessoa a ser um investidor...</p>
                    <hr />
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg10">Saiba mais</button>
                </div>
            </div>
        </div>
    </div>
    <hr />
    <section id="modals">
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe  style="width:100%; height:500px;" src="https://go.hotmart.com/D12858303D" name="iframe_a"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe  style="width:100%; height:500px;" src="https://go.hotmart.com/T12858538V" name="iframe_a"></iframe>
                    </div>
                </div>
            </div>
        </div>  
        <div class="modal fade bd-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe  style="width:100%; height:500px;" src="https://go.hotmart.com/T12858538V" name="iframe_a"></iframe>
                    </div>
                </div>
            </div>
        </div>  
        <div class="modal fade bd-example-modal-lg4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe  style="width:100%; height:500px;" src="https://go.hotmart.com/C12858368K" name="iframe_a"></iframe>
                    </div>
                </div>
            </div>
        </div>  
        <div class="modal fade bd-example-modal-lg5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe  style="width:100%; height:500px;" src="https://go.hotmart.com/E12858370A" name="iframe_a"></iframe>
                    </div>
                </div>
            </div>
        </div>  
        <div class="modal fade bd-example-modal-lg6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe  style="width:100%; height:500px;" src="https://go.hotmart.com/Q12908106B" name="iframe_a"></iframe>
                    </div>
                </div>
            </div>
        </div>        
        <div class="modal fade bd-example-modal-lg7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe  style="width:100%; height:500px;" src="https://go.hotmart.com/G12899451L" name="iframe_a"></iframe>
                    </div>
                </div>
            </div>
        </div>        
       
        <div class="modal fade bd-example-modal-lg10" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe  style="width:100%; height:500px;" src="https://go.hotmart.com/Y13610672K" name="iframe_a"></iframe>
                    </div>
                </div>
            </div>
        </div>      F        
    </section>
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
