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
<html lang="pt-br">

<head>
    <?= $this->Html->charset() ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Petra
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->script('jquery-3.4.1.slim.min.js') ?>
    <?= $this->Html->script('popper.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('app.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <header>
        <nav id="menuHeader" class="navbar navbar-expand-lg navbar-light bg-light menu menu-edit fixed-top">
            <a class="nav-link img_logo" href="#">
                <img src="../img/logotipo.png" alt="logotipo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto itemMenu">
                    <li class="nav-item">
                        <a class="nav-link texto-menu" href="#o-que-fazemos">O que fazemos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link texto-menu" href="#o-passo-a-passo">O passo-a-passo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link texto-menu" href="#projetos">Projetos Realizados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link texto-menu contato" href="#contato">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link img_login texto-menu" href=""><img src="../img/login-icon.png" alt="Login Painel" placeholder="Login"></a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-sm btn-outline-secondary" href="#simulacao">Faça sua simulação</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- analisar divs com padding -->
    <main>
        <!-- Carousel -->
        <section class="section_carousel">
            <div class="">
                <div class="">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Primeira Imagem -->
                            <div class="carousel-item active banner1">
                                <div class="row">
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-5 texto-1">
                                        <span class="sublinhado">Ser Petra</span> é ser<strong> inovador.</strong>
                                    </div>

                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-4 texto-2">
                                        Você contribui para <strong>soluções limpas</br> e eficientes</strong> para o planeta.
                                    </div>

                                </div>
                            </div>
                            <!-- Fim primeira Imagem -->
                            <!-- Segunda imagem -->
                            <div class="carousel-item banner2">
                                <div class="row">
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-5 texto-1">
                                        <span class="sublinhado">Ser Petra</span> é ser<strong> consciente.</strong>
                                    </div>

                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-4 texto-2">
                                        Você<strong> poupa a emissão</strong> de</br> toneladas de CO&#8322; para a atmosfera.
                                    </div>

                                </div>
                            </div>
                            <!-- Fim segunda imagem -->
                            <!-- Terceira imagem -->
                            <div class="carousel-item banner3">
                                <div class="row">
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-5 texto-1">
                                        <span class="sublinhado">Ser Petra</span> é ser <strong>econômico.</strong>
                                    </div>

                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-4 texto-2">
                                        Você <strong>economiza até 95% no valor</strong></br>da conta de energia da sua casa.
                                    </div>

                                </div>
                            </div>
                            <!-- Fim terceira imagem -->
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fim Carousel -->

        <div id="o-que-fazemos" class="row o-que-fazemos" alt="O que fazemos?">
            <div class="col-sm-6">
                <h1>
                    <p>O que fazemos?</p>
                </h1>
                <p>A Petra Solar é auma empresa que realiza projetos e instalação de painéis
                    de energia solar fotovoltaica em sua casa ou empresa.
                    <br><br>
                    Nós temos a missão de levar uma energia limpa e inesgotável para as casas
                    dos brasileiros, contribuindo com o meio ambiente, com a economia de cada
                    família e com o desenvolvimento do país.
                </p>
            </div>
            <div class="col-sm-2 text-center"></div>
            <div class="col-sm-3 text-center">
                <a class="btn btn-sm btn-outline-secondary button" href="#simulacao">Faça uma simulação<br>
                    em sua casa ou empresa</a>
                <!-- <button class="btn btn-sm btn-outline-secondary">
                        Faça uma simulação<br>
                        em sua casa ou empresa
                    </button> -->
            </div>
            <div class="col-sm-1 text-center"></div>
        </div>

        <div id="o-passo-a-passo" class="passo-a-passo" alt="O passo a passo">
            <div class="">
                <img src="../img/passo-a-passo.jpg" alt="passo-a-passo" />
            </div>
        </div>
        <div id="quero-um-projeto" class="row quero-um-projeto" alt="Quero realizar um projeto">
            <div class="col-sm-3 text-center"></div>
            <div class="col-sm-6 text-center">
                <a class="btn btn-sm btn-outline-secondary btn-projeto" href="#simulacao">Quero realizar um projeto.</a>
                <!-- <button class="btn btn-sm btn-outline-secondary">Quero realizar um projeto.</button> -->
            </div>
            <div class="col-sm-3 text-center"></div>
        </div>

        <div id="dados" class="row dados" alt="Dados Estatisticos">
            <div class="col-sm-2 text-center"></div>
            <div class="col-sm-2 text-center">
                <h1>20</h1>
                <p> toneladas de CO2 poupados.</p>
            </div>
            <div class="col-sm-2 text-center">
                <h1>5.000</h1>
                <p>kw de energia gerada.</p>
            </div>
            <div class="col-sm-2 text-center">
                <h1>2,5</h1>
                <p>milhões economizados por nossos clientes.</p>
            </div>
            <div class="col-sm-2 text-center">
                <h1>60</h1>
                <p>Estudos realizados</p>
            </div>
            <div class="col-sm-2 text-center"></div>
        </div>

        <div id="projetos" class="row projetos" alt="Projetos realizados">
            <div class="col-sm-12 text-center">
                <h1>
                    <p>Projetos realizados</p>
                </h1>
            </div>
            <!-- Inicio dos cards de projetos -->
            <!-- <div class="album py-5 bg-light"> -->
            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                            <div class="card" style="width: 100%;">
                                <img src="../img/araraquara.jpg" class="card-img-top" alt="..." height="220px">
                            </div>
                        </div>
                        <p class="card-text text-center">Araraquara -SP</p>
                    </div>
                    <!-- São Carlos -->
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                        <div class="card" style="width: 100%;">
                                <img src="../img/saocarlos.jpg" class="card-img-top" alt="..." height="220px">
                            </div>
                        </div>
                        <p class="card-text text-center">São Carlos -SP</p>
                    </div>
                    <!-- Sorocaba  -->
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                        <div class="card" style="width: 100%; height:220px;">
                                <img src="../img/sorocaba.gif" class="card-img-top" alt="..." height="220px">
                            </div>
                        </div>
                        <p class="card-text text-center">Sorocaba -SP</p>
                    </div>
                    <!-- Ribeirão Preto -->
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                        <div class="card" style="width: 100%; height:220px;">
                                <img src="../img/ribeiraopreto.jpg" class="card-img-top" alt="..." height="220px">
                            </div>
                        </div>
                        <p class="card-text text-center">Ribeirão Preto -SP</p>
                    </div>
                    <!-- Campinas -->
                    <div class="col-md-4">
                        <div class="cardshadow-sm">
                        <div class="card" style="width: 100%;height:220px;">
                                <img src="../img/campinas.jpg" class="card-img-top" alt="..." height="220px">
                            </div>
                        </div>
                        <p class="card-text text-center">Campinas -SP</p>
                    </div>
                    <!-- Matão -->
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                        <div class="card" style="width: 100%; height:220px;">
                                <img src="../img/matao.jpg" class="card-img-top" alt="..." height="220px">
                            </div>
                        </div>
                        <p class="card-text text-center">Matão-SP</p>
                    </div>
                </div>
            </div>
            <!-- fim dos cards de projetos -->
        </div>
        <!-- fim <div> projetos -->
        <div class="container"></div>
        <div id="simulacao" class="row simulacao" alt="Faça sua simulação">
            <div class="col-sm-4 texto-simulacao">
                <h2>
                    <p>Faça Sua Simulação<br>
                        e econimize até <br>
                        95% em sua conta <br>
                        de energia.
                    </p>
                </h2>
            </div>
            <div class="col-sm-7 formulario-simulacao">
                <!-- Inicio do formulario -->
                <form>
                    <div class="form-group">
                        <label for="inputAddress">Nome</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Seu nome">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">E-mail</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Seu E-mail">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Celular</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Seu celular">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Endereço</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Seu endereço">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Tipo de Instalação</label>
                        <input type="text" class="form-control" id="inputTipoInstalacao" placeholder="O tipo de instalação desejada">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Metragem da residência/empresa:</label>
                        <input type="text" class="form-control" id="inputArea" placeholder="Metragem do projeto">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Quanta paga em média na sua conta atualmente</label>
                        <input type="text" class="form-control" id="inputMediaConta" placeholder="Valor da conta atual">
                    </div>
                    <button type="submit" class="btn btn-envia btn-primary">Enviar</button>
                </form>
            </div>
            <!-- <div class="col-sm-1"></div> -->
        </div>
        <!-- final <div> simulacao -->
        </div>
        <!-- final <div> container-fluid -->
    </main>
    <footer>
        <div id="contato" class="row contato" alt="Contato">
            <div class="col-sm-12">
                <ul>
                    <li>
                        <h2>Fale Conosco:<h2>
                    </li>
                    <li><img src="./img/email-icon.png" alt="E-mail" /> contato@petrasolar.com.br</li>
                    <li><img src="./img/telefone-icon.png" alt="Telefone" /> (DD) xxxx-xxxx</li>
                    <li><img src="./img/whatsapp-icon.png" alt="Whatsapp" /> (16) 99139-3556</li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>