<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DadosEstatistico $dadosEstatistico
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $dadosEstatistico->id],
                ['confirm' => __('Tem certeza que quer deletar # {0}?', $dadosEstatistico->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Dados Estatisticos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dadosEstatisticos form content">
            <?= $this->Form->create($dadosEstatistico) ?>
            <fieldset>
                <legend><?= __('Editar Dados Estatistico') ?></legend>
                <?php
                    echo $this->Form->control('numero');
                    echo $this->Form->control('descricao');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
