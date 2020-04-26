<?php

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

use Cake\ORM\Query;
use Cake\Database\Connection;

use \App\Model\Entity\DadosEstatistico;
use \App\Model\Entity\Interessado;

// Importa TableRegistry para query de dados no banco
use Cake\ORM\TableRegistry;

$this->disableAutoLayout();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?= $this->Html->charset() ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Petra
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->script('jquery-3.4.1.slim.min.js') ?>
    <?= $this->Html->script('popper.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('app.js') ?>
    <?= $this->Html->script('whatsapp.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <header>
        <nav id="menuHeader" class="navbar navbar-expand-lg navbar-light bg-light menu menu-edit fixed-top">
            <a class="nav-link img_logo" href="/">
                <img src="../img/logotipo.png" alt="logotipo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto itemMenu">
                    <li class="nav-item">
                        <a class="nav-link"  href="#o-que-fazemos">O que fazemos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#o-passo-a-passo">O passo-a-passo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projetos">Projetos Realizados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link img_login" href="/login">
                            <img src="../img/login-icon.png" alt="Login" />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-sm btn-outline-secondary" href="#simulacao">Quero um Orçamento</a>
                    </li>
                </ul>
            </div>
        </nav><!-- FIM nav menuHeader -->

    </header><!-- FIM HEADER -->
    
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
                <p>A Petra Solar é uma empresa que realiza projetos e instalação de painéis
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
            <!-- Objeto $dadosEstatisticos vindo do HomeController -->
            <!-- é usado para fazer um foreach dos dados -->
            <?php foreach ($dadosEstatisticos as $key => $dadosEstatistico): ?>
            <div class="col-sm-3 text-center">
                <h1><?= $this->Number->format($dadosEstatistico->numero) ?></h1>
                <p><?= h($dadosEstatistico->descricao) ?></p>
            </div>
            <?php endforeach; ?>
        </div>

        <div id="projetos" class="row projetos" alt="Projetos realizados">
            <div class="col-sm-12 text-center">
                <h1>
                    <p>Projetos realizados</p>
                </h1>
            </div>
            <div class="container">
                <div class="row">
                    <!-- Objeto $projetosRealizados vindo do HomeController -->
                    <!-- é usado para fazer um foreach dos projetos -->
                    <?php foreach ($projetosRealizados as $key => $projetosRealizado): ?>

                        <div class="col-md-4">
                            <div class="card shadow-sm">
                                <div class="card" style="width: 100%;" data-toggle="modal" data-target="#Modal<?= h($projetosRealizado->id) ?>">
                                    <img src="../img/projetos/<?= h($projetosRealizado->banner) ?>" 
                                        class="card-img-top" height="220px" alt="<?= h($projetosRealizado->nome) ?>" 
                                    />
                                </div>
                            </div>
                            <div class="card-text text-center"><?= h($projetosRealizado->nome) ?></div>
                            <div class="card-text text-center"><?= h($projetosRealizado->cidade) ?> - <?= h($projetosRealizado->uf) ?></div>
                            <br>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="Modal<?= h($projetosRealizado->id) ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Fotos do Projeto: <?= h($projetosRealizado->nome) ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="col-md-12">
                                            <div class="row">

                                                <?php 
                                                    $fotosProjetos = TableRegistry::getTableLocator()->get('FotosProjetos')->find()
                                                    ->where(['projeto_id' => $projetosRealizado->id]);
                                                ?>
                                                
                                                <?php foreach ($fotosProjetos as $key => $fotosProjeto): ?>

                                                    <figure class="col-md-4">
                                                        <a class="black-text" href="../img/projetos/fotos/<?= h($fotosProjeto->foto) ?>">
                                                            <img alt="picture" src="../img/projetos/fotos/<?= h($fotosProjeto->foto) ?>" class="img-fluid">
                                                            <h4 class="text-center"><?= h($fotosProjeto->nome) ?></h4>
                                                        </a>
                                                    </figure>

                                                <?php endforeach; ?>
                                                
                                            </div><!-- FIM div row -->
                                        </div><!-- FIM div col -->
                                    </div><!-- FIM modal-body -->

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
                                    </div>

                                </div><!-- FIM modal-content -->
                            </div><!-- FIM modal-dialog -->
                        </div><!-- Fim Modal -->
                        
                    <?php endforeach; ?>
                </div><!-- Fim <div> row -->
            </div><!-- Fim <div> container -->
        </div><!-- fim <div> projetos -->
        
        <!-- <div class="container"></div> -->
        
        <div id="simulacao" class="row simulacao" alt="Faça sua simulação">
            <div class="col-sm-4 texto-simulacao">
                <h2>
                    <p>Economize até <br>
                        95% em sua conta <br>
                        de energia.
                    </p>
                </h2>
            </div>
            <div class="col-sm-7 formulario-simulacao">

                <!-- Flash messages da Simulacao -->
                <?= $this->Flash->render() ?>

                <!-- Inicio do formulario -->
                <?php
                    // Instancia nova classe Interessado
                    $interessado = new Interessado();

                    //  Cria form passando o objeto $interessado no submit
                    //e com action apontando para método 'simulado' do controller 'Interessados'
                    echo $this->Form->create($interessado, [
                        'url' => [
                            'controller' => 'Home',
                            'action' => 'simulacao'
                        ]
                    ]);
                ?>
                <div class="form-group">
                    <?php
                    echo $this->Form->label('nome', 'Nome Completo:');
                    echo $this->Form->control('nome', [
                        'label' => false,
                        'type' => 'text',
                        'id' => 'nome',
                        'class' => 'form-control'
                    ]);
                    ?>
                </div>                    
                <div class="form-group">
                    <?php
                        echo $this->Form->label('email','E-mail:');
                        echo $this->Form->control('email', [
                            'label' => false,
                            'type' => 'email',
                            'id' => 'email',
                            'class' => 'form-control'
                        ]);
                    ?>
                </div>
                <div class="form-group">
                    <?php
                        echo $this->Form->label('celular','Celular:');
                        echo $this->Form->control('celular', [
                            'label' => false,
                            'type' => 'tel',
                            'id' => 'celular',
                            'class' => 'form-control'
                        ]);
                    ?>
                </div>
                <div class="form-group">
                    <?php
                        echo $this->Form->label('endereco','Endereço:');
                        echo $this->Form->control('endereco', [
                            'label' => false,
                            'type' => 'text',
                            'id' => 'endereco',
                            'class' => 'form-control'
                        ]);
                    ?>
                </div>
                <div class="form-group tipoMetro">
                    <?php
                        echo $this->Form->label('tipo_instalacao','Tipo de Instalação:');
                        echo $this->Form->control('tipo_instalacao', [
                            'label' => false,
                            'type' => 'text',
                            'id' => 'tipo_instalacao',
                            'class' => 'form-control'
                        ]);
                    ?>
                </div>
                <div class="form-group tipoMetro">
                    <?php
                        echo $this->Form->label('metragem','Metragem da residência/empresa:');
                        echo $this->Form->control('metragem', [
                            'label' => false,
                            'type' => 'number',
                            'id' => 'metragem',
                            'class' => 'form-control'
                        ]);
                    ?>
                </div>
                <div class="form-group">
                    <?php
                        echo $this->Form->label('conta_atual','Quanto paga em média na sua conta atualmente:');
                        echo $this->Form->control('conta_atual', [
                            'label' => false,
                            'type' => 'number',
                            'id' => 'conta_atual',
                            'class' => 'form-control'
                        ]);    
                    ?>
                </div>
                <?php 
                    // Cria o botão Enviar (type padrão dele já é 'submit')
                    // Também fecha o bloco de código do Form
                    echo $this->Form->button(__('Enviar'),['class' => 'btn-envia']); 
                    echo $this->Form->end();    
                ?>
            </div><!-- <div class="col-sm-1"></div> -->
        </div><!-- final <div> simulacao -->

    </main><!-- FIM MAIN -->
    
    <!-- Botão whats -->
    <div id="whatswidget-pre-wrapper" class="">
        <div id="whatswidget-widget-wrapper" class="whatswidget-widget-wrapper" style="all:revert;">
            <div id="whatswidget-conversation" class="whatswidget-conversation">
                <div class="whatswidget-conversation-header" style="all:revert;">
                    <div id="whatswidget-conversation-title" class="whatswidget-conversation-title" 
                        style="all:revert;">Petra Solar
                    </div>
                </div>
                <div id="whatswidget-conversation-message" class="whatswidget-conversation-message " 
                    style="all:revert;">Desejo um orçamento Petra
                </div>
                <div class="whatswidget-conversation-cta" style="all:revert;"> 
                    <a id="whatswidget-phone-desktop" class="whatswidget-cta whatswidget-cta-desktop" style="all:revert;" 
                        href="https://web.whatsapp.com/send?phone=0005  y. o516991393556" target="_blank">Enviar Mensagem
                    </a>
                    <a id="whatswidget-phone-mobile" class="whatswidget-cta whatswidget-cta-mobile" style="all:revert;" 
                        href="https://wa.me/5516991393556" target="_blank">Enviar Mensagem
                    </a>
                </div>
                <a class="whatswidget-link" style="all:revert;" title="Feito no WhatsWidget" 
                    href="https://www.adamante.com.br/code/whatsapp-site/" target="_blank">
                    <img src=" data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfjBhQXLyFLI2siAAABBElEQVQoz33OPSjEcQDG8c/v/ogbkCiFRVJeyiCTl8FmkE0ZlAxkIpRMxCg2STcpUgYpJXd13SJZbUcWkcUgCyXJ8L+TQb7LMzwvPUFMmcaC8gEeYw0g4dCDTwzjFCWajPkqBjZc28eUKsGLFEZ1W4rnJ6yBDscSgiNdYN009DuQQLmMelAnI4lgz2CQd+cNrd49FC43qXCLpBaGpECfFUVW9YJtI7BoHkHmJ5ARsGCBCJfGlchr8+oJPSplDem3XGyUOtGl3SbY0qnDqTK/qJHT4Fwk4Uy9nNrYiAqBd1d2XYg0+zJrzn1shF8rA+Y9C6rtyPqTSTduzPiHtLR/iX5eFfgGDog51TrYD/cAAAAldEVYdGRhdGU6Y3JlYXRlADIwMTktMDYtMjBUMjE6NDc6MzMrMDI6MDDmYSb9AAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE5LTA2LTIwVDIxOjQ3OjMzKzAyOjAwlzyeQQAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAAASUVORK5CYII=" style="all:revert;">
                </a>
            </div>
            <div id="whatswidget-conversation-message-outer" class="whatswidget-conversation-message-outer" style="all:revert;"> 
                <span id="whatswidget-text-header-outer" class="whatswidget-text-header-outer" 
                    style="all:revert;">Petra Solar
                </span>
                <br> 
                <div id="whatswidget-text-message-outer" class="whatswidget-text-message-outer" 
                    style="all:revert;">Desejo um orçamento Petra
                </div>
            </div>
            <div class="whatswidget-button-wrapper" style="all:revert;">
                <div class="whatswidget-button" id="whatswidget-button" style="all:revert;">
                    <div style="margin:0 auto;width:38.5px;all:revert;">
                        <img class="whatswidget-icon" style="all:revert;" 
                            src=" data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAXAAAAFkCAYAAAA5XmCyAAAAhnpUWHRSYXcgcHJvZmlsZSB0eXBlIGV4aWYAAHjaVY7tDcMwCET/M0VHOAPBZpxISaRu0PF7Lk2iPAnz/IVO9s/7kNekAeJLH5ERIJ6eulIGCgOaos3Otfh3azSlbLUX05LI0eH3Q8eTBTHi6M7iF1PdLVj2u+QMwYyQ94B+mj3Pw69MleALmvYrSXthNkAAAAoGaVRYdFhNTDpjb20uYWRvYmUueG1wAAAAAAA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/Pgo8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJYTVAgQ29yZSA0LjQuMC1FeGl2MiI+CiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPgogIDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiCiAgICB4bWxuczpleGlmPSJodHRwOi8vbnMuYWRvYmUuY29tL2V4aWYvMS4wLyIKICAgIHhtbG5zOnRpZmY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vdGlmZi8xLjAvIgogICBleGlmOlBpeGVsWERpbWVuc2lvbj0iMzY4IgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzU2IgogICB0aWZmOkltYWdlV2lkdGg9IjM2OCIKICAgdGlmZjpJbWFnZUhlaWdodD0iMzU2IgogICB0aWZmOk9yaWVudGF0aW9uPSIxIi8+CiA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgCjw/eHBhY2tldCBlbmQ9InciPz7VjmmqAAAABHNCSVQICAgIfAhkiAAAIABJREFUeNrtvX2sntV55vu7Xm1tbVmWZflYHtf1sVyX8VCL8bgMcanrEEoJEMpXgPCVEEgIIZ8lH0Moh0MRhzI5NKIkIQkhJCEhAQIhJAFCwCGEJtShlFKXcT2ux0Nd6jKWj2VtWdbW1tbWvs4fa7lQxsTbe7/vu9bzvPdPskhC4F3Peta6nnvd6/6QbYIgCILm0YkpCIIgCAEPgiAIQsCDIAiCEPAgCIIQ8CAIgqAmhmIKgooZBhYA84G5+c8CYNj2Ukkd4NeBkWyMLHuDNb0ImAPsAsYP8vd3Afvzf/5nYALYY3ufpH22xyXtAfa95k8QFEcRRhgUZK7thZIOiPRy4DdtLwGWSlqYRXvE9oikkSzE/Tw5jgGTWeDHs5jvB162vVPSPwI7gN3AKLDX9l5Jk/F6gxDwoOl0gHnZcp4HHAX8lu1VkhYDC1/z95p8ItxvexTYK2k3sM32f5e0GdiVRX00W/dBEAIeVCnWc23PA46QtMb2myQty9b1YgbTbbcX2Jkt9k3A3wEvZIt9Pwd36wRBCHjQU4ZI/uflwLHA7wJHZut6fkzPr2QC2GF7i6S/BTba3pTdMxPAVExREAIe9ILVwHG23yxpbRbwYPbsB56zvQn4GfBzSXFhGoSABzOmY3uFpOOBtwCnknzWQY+xPSHpBWCD7b+Q9CzpUjUIQsCDN2Su7XWS3gKcavuIHAESYaflGCf5zH8OPEJyueyQFK6WEPBg0K1s0gXjMcCZwAm8Gjsd1GeZT0raa3uzpO8DzwIvEhEuIeDBQIn2EuBo2xdKOgZYSrqUDJrDVA5R3Gr7EUkb8sVoiHkIeNBCFtpeLelC2+uBFZKGY1paY53vkfSC7e9Ketr2yyHmIeBBszf1HEkrbJ8PnCJpDeHPHoT3vpMUyXIfyc2yJ2YlBDxoBh1gvu2TJF1s+zhJc2NaBpIpYCvwMHAXKfU/rPIQ8KBSjrB9haTzSAWeguAAE8BjwNdsbwj3Sgh4UI/FfSrwQeAUolRwcGi2275L0t3AzpiOEPCg/ywELgAuA1aRSrAGwXSZItVqeQi4E3g+piQEPOg9K21fAFwsaTlxKRnMnlHgKeB24BmiyFYIeNB1VgGXA2e/pqlBEHST/VnAb7P9TNRjCQEPZoHtjqQjsnBfRErACYJeMwY8
                            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">
                    </div>
                </div>
            </div>
            <script id="whatswidget-script" type="text/javascript">
                document.getElementById("whatswidget-conversation").style.display="none";
                document.getElementById("whatswidget-conversation").style.opacity="0"; 

                var button=document.getElementById("whatswidget-button");
                button.addEventListener("click",openChat);
                
                var conversationMessageOuter=document.getElementById("whatswidget-conversation-message-outer");
                conversationMessageOuter.addEventListener("click",openChat);
                
                var chatOpen=!1;
                function openChat(){0==chatOpen?(document.getElementById("whatswidget-conversation").style.display="block",document.getElementById("whatswidget-conversation").style.opacity=100,chatOpen=!0,document.getElementById("whatswidget-conversation-message-outer").style.display="none"):(document.getElementById("whatswidget-conversation").style.opacity=0,document.getElementById("whatswidget-conversation").style.display="none",chatOpen=!1)}
            </script>

        </div><!-- FIM whatswidget-widget-wrapper -->

    </div>
    <!-- FIM whatswidget-pre-wrapper -->
    <!-- fim botão whats -->

    <footer>
        <div id="contato" class="row contato" alt="Contato">
            <div class="col-sm-12">
                <ul>
                    <li>
                        <h2>Fale Conosco:<h2>
                    </li>
                    <li><img src="./img/emailIcon.svg" alt="E-mail" /> contato@petrasolar.com.br</li>
                    <!-- <li><img src="./img/telefone-icon.png" alt="Telefone" /> (DDD) xxxx-xxxx</li> -->
                    <li><img src="./img/whatsIcon.svg" alt="Whatsapp" /><a href="https://api.whatsapp.com/send?phone=5516991393556&text=Desejo%20um%20or%C3%A7amento%20Petra" class="icons_social" target="_blank"> (16) 99139-3556</a></li>
                    <li><img src="./img/instaIcon.svg" alt="Instagram" /><a href="https://www.instagram.com/petraesolar/" class="icons_social" target="_blank">@petrasolar</a></i></li>
                    <li><img src="./img/faceIcon.svg" alt="Facebook" /><a href="https://www.facebook.com/petraenergiasolar/" class="icons_social" target="_blank">@petraenergiasolar </a></i></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>