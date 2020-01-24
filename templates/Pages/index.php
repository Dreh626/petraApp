<?php

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Petra
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>
        <?= $this->Html->css('bootstrap.min.css') ?>
        <?= $this->Html->css('style.css') ?>
        <?= $this->Html->script('jquery-3.4.1.slim.min.js')?>
        <?= $this->Html->script('popper.min.js')?>
        <?= $this->Html->script('bootstrap.min.js')?>
        <?= $this->Html->script('app.js')?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>
        <header>
            <!-- <div class="container-fluid">
                <div id="menu" class="row" alt="Menu">
                    <div class="col-sm-12">
                        <p>MENU</p>
                    </div>
            </div> -->
            <nav id="menuHeader" class="navbar navbar-expand-lg navbar-light bg-light menu">
                <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                <a class="nav-link" href="#"> <img src="" alt="Imagem Logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="navbar-nav mr-auto itenMenu">
                    
                        <li class="nav-item">
                            <a class="nav-link" href="#sessao1">O que fazemos?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sessao2">O passo-a-passo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sessao3">Projetos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sessao4">Contatos</a>
                        </li>
                </ul>
                <ul class="navbar-nav mr-auto>
                        <li class="nav-item">
                            <a class="nav-link" href=""><img src="https://ftp.mastertech.com.br/Esta%C3%A7%C3%A3o%20Hack/Turma%204/Dia%202/Luan%20Gustavo%20Nikolly%20Lucas%20Camila/login.png" style="height:40px; width:40px;" alt="Login Painel" placeholder="Login"></a>
                        </li>
                </ul>    
                <button class="btn btn-sm btn-outline-secondary">Faça sua simulação</button>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <!-- Carousel -->
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
                <!-- Fim Carousel -->

            <div id="sessao1" class="row" alt="O que fazemos?">
                <div class="row card_fazemos">
                    <!-- <div class="col-sm-1"></div>  verificar porque estava sem uso-->
                    <div class="col-sm-5 textFazemos">
                        <p><h1>O que fazemos?</h1></p>
                        <h6><p>A Petra Solar é auma empresa que realiza projetos e instalação de painéis de energia solar fotovoltaica em sua casa ou empresa.</p>
                        <p>Nós temos a missão de levar uma energia limpa e inesgotável para as casas dos brasileiros, contribuindo com o meio ambiente,
                                 com a economia de cada família e com o desenvolvimento do país.</p></h6>
                    </div>
                    <!-- <div class="col-sm-1"></div> -->
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-faca">Faça uma simulação em sua casa ou empresa</button>
                    </div>
                    <!-- <div class="col-sm-1"></div> -->
                </div> 
            </div>
            <div id="sessao2" class="row" alt="O passo-a-passo da Petra">
                <div class="col-sm-12">
                    <img src="../img/passo-a-passo.jpg" />
                </div>
            </div>
            <div id="sessao3" class="row" alt="Dados Estatisticos">
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                    <p>20 toneladas de CO2 poupados.</p>
                </div>
                <div class="col-sm-2">
                    <p>5.000 kw de energia gerada.</p>
                </div>
                <div class="col-sm-2">
                    <p>2,5 milhões economizados por nossos clientes.</p>
                </div>
                <div class="col-sm-2">
                    <p>60 estudos realizados</p>
                </div>
                    <div class="col-sm-2"></div>
                </div>
                <div id="sessao4" class="row" alt="Projetos realizados">
                    <p>Projetos realizados</p>
                </div>
                <div id="sessao5" class="row" alt="Faça sua simulação">
                    <p>Simulação</p>
                </div>
                <div id="sessao6" class="row" alt="Contato">
                    <p>Contato</p>
                </div>
            </div>
        </main>
    </body>
</html>
