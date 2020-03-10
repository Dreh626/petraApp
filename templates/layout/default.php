<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

//Recupera sessao
$session = $this->getRequest()->getSession();
$nome = $session->read('Auth.User.nome');
$login = $session->read('Auth.User.login');

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Petra
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css"> -->

    <?= $this->Html->css('milligram.min.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <nav class="nav-admin">
            <div id="hamburguer" class="hamburguer">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <ul class="nav-links">
                <a href="/"><img src="../../img/logo.png" /></a>
                <?php
                    //Se existe sessão, exibe logout e Bem-vindo
                    if ($session->check("Auth")){ 
                ?>
                        <li>Bem-vindo: <br><u><?php echo $nome ?></u></li>
                        <li><a href="/" class="">Home</a></li>
                        <li><a href="/admin" class="">Admin</a></li>
                        <li><a href="/logout" class="">Logout</a></li>
                <?php 
                    }
                ?>
            </ul>
        </nav>
    </header>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>