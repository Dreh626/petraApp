<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="usuarios form content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Entre com o Login e Senha:') ?></legend>
        <?= $this->Form->control('username') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
    <?= $this->Form->button(__('Login')); ?>
    <?= $this->Form->end() ?>
</div>
