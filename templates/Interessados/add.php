<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Interessado $interessado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Lista de Interessados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="interessados form content">
            <?= $this->Form->create($interessado) ?>
            <fieldset>
                <legend><?= __('Adicionar Interessado') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('email');
                    echo $this->Form->control('celular');
                    echo $this->Form->control('endereco');
                    echo $this->Form->control('tipo_instalacao');
                    echo $this->Form->control('metragem');
                    echo $this->Form->control('conta_atual');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
