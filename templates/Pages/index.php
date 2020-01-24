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

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>
        <header>
            <div class="container-fluid">
                <div id="menu" class="row" alt="Menu">
                    <div class="col-sm-12">
                        <p>MENU</p>
                    </div>
            </div>
            <!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">O que fazemos?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">O passo-a-passo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Projetos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contatos</a>
                        </li>
                    </ul>
                    <button class="btn btn-sm btn-outline-secondary">Faça sua simulação</button>
                </div>
            </nav> -->
        </header>
        <main>
            <div class="container-fluid">
                <div id="banner" class="row" alt="Banner">
                    <div class="col-sm-7">
                        <p>Ser Petra é ser inovador</p>
                    </div>
                    <div class="col-sm-5">
                        <p>Você contribui para soluções limpas e eficientes para o planeta terra.</p>
                    </div>
                </div>
                <div id="sessao1" class="row" alt="O que fazemos?">
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-7">
                            <p>O que fazemos?</p>
                            <p>A Petra Solar é auma empresa que realiza projetos e instalação de painéis de energia solar fotovoltaica em sua casa ou empresa.</p>
                            <p>Nós temos a missão de levar uma energia limpa e inesgotável para as casas dos brasileiros, contribuindo com o meio ambiente, com a economia de cada família e com o desenvolvimento do país.</p>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2">
                            <button type="button" class="btn btn-warning">Faça uma simulação em sua casa ou empresa</button>
                        </div>
                        <div class="col-sm-1"></div>
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
