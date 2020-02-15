<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="usuarios form content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Entre com suas credenciais:') ?></legend>
        <?= $this->Form->control('login') ?>
        <?= $this->Form->control('senha',['type' => 'password']) ?>
    </fieldset>
    <?= $this->Form->button(__('Entrar')); ?>
    <?= $this->Form->end() ?>
</div>
