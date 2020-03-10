<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProjetosRealizado $projetosRealizado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $projetosRealizado->id],
                ['confirm' => __('Tem certeza que quer deletar # {0}?', $projetosRealizado->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Projetos Realizados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="projetosRealizados form content">
            <!-- parametro ['type' => 'file'] é para passar o arquivo do upload, senão não funciona -->
            <?= $this->Form->create($projetosRealizado,['type' => 'file']) ?>
            <fieldset>
                <legend><?= __('Editar Projetos Realizado') ?></legend>
                <?php
                    echo $this->Form->control('cidade');
                    echo $this->Form->control('uf');
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('foto',['type' => 'file']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
