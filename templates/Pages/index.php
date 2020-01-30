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
            <a class="nav-link" href="#">
                <img src="../img/logotipo.png" alt="logotipo"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto itemMenu">
                    <li class="nav-item">
                        <a class="nav-link" href="#o-que-fazemos">O que fazemos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#o-passo-a-passo">O passo-a-passo</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#dados">Dados</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#projetos">Projetos Realizados</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#simulacao">Simulação</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=""><img src="../img/login-icon.png" alt="Login Painel" placeholder="Login"></a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-sm btn-outline-secondary">Faça sua simulação</button>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <!-- Carousel -->
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class=" carousel carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/banner1.svg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../img/banner2.svg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="../img/banner3.svg" class="d-block w-100" alt="...">
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

            <div id="o-que-fazemos" class="row o-que-fazemos" alt="O que fazemos?">
                <div class="col-sm-6">
                    <h1><p>O que fazemos?</p></h1>
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
                    <button class="btn btn-sm btn-outline-secondary">
                            Faça uma simulação<br>
                            em sua casa ou empresa
                    </button>
                </div>
                <div class="col-sm-1 text-center"></div>
            </div>

            <div id="o-passo-a-passo" class="row passo-a-passo" alt="O passo a passo">
                <div class="col-sm-12">
                    <img src="../img/passo-a-passo.jpg" alt="passo-a-passo" />
                </div>
            </div>
            <div id="quero-um-projeto" class="row quero-um-projeto" alt="Quero realizar um projeto">
                <div class="col-sm-3 text-center"></div>
                <div class="col-sm-6 text-center">
                    <button class="btn btn-sm btn-outline-secondary">Quero realizar um projeto.</button>
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
                    <p>estudos realizados</p>
                </div>
                <div class="col-sm-2 text-center"></div>
            </div>

            <div id="projetos" class="row projetos" alt="Projetos realizados">
                <div class="col-sm-12 text-center">
                    <h1><p>Projetos realizados</p></h1>
                </div>
                <!-- Inicio dos cards de projetos -->
                <!-- <div class="album py-5 bg-light"> -->
                <div class="container">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                                </svg>
                            </div>
                            <p class="card-text text-center">Araraquara -SP</p>
                        </div>
                        <!-- São Carlos -->
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                                </svg>
                            </div>
                            <p class="card-text text-center">São Carlos -SP</p>
                        </div>
                        <!-- Sorocaba  -->
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                                </svg>
                            </div>
                            <p class="card-text text-center">Sorocaba -SP</p>
                        </div>
                        <!-- Ribeirão Preto -->
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                                </svg>
                            </div>
                            <p class="card-text text-center">Ribeirão Preto -SP</p>
                        </div>
                        <!-- Campinas -->
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                                </svg>
                            </div>
                            <p class="card-text text-center">Campinas -SP</p>
                        </div>
                        <!-- Matão -->
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                                </svg>
                            </div>
                            <p class="card-text text-center">Matão-SP</p>
                        </div>
                    </div>
                </div>
                <!-- fim dos cards de projetos -->
            </div>
            <!-- fim <div> projetos -->

            <div id="simulacao" class="row simulacao" alt="Faça sua simulação">
                <div class="col-sm-4">
                        <h2>
                            <p>Faça Sua Simulação<br>
                                e econimize até <br>
                                95% em sua conta <br>
                                de energia.
                            </p>
                        </h2>
                </div>
                <div class="col-sm-7">
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
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <!-- final <div> simulacao -->
        </div>
        <!-- final <div> container-fluid -->
    </main>
    <footer>
        <div id="contato" class="row contato" alt="Contato">
            <div class="col-sm-4">
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