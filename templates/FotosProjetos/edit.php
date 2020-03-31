<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FotosProjeto $fotosProjeto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $fotosProjeto->id],
                ['confirm' => __('Tem certeza que quer deletar # {0}?', $fotosProjeto->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Fotos dos Projetos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="fotosProjetos form content">
            <?= $this->Form->create($fotosProjeto,['type' => 'file']) ?>
            <fieldset>
                <legend><?= __('Editar Foto de Projeto') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('foto',['type' => 'file']);
                    echo $this->Form->control('projeto_id', [
                        'options' => $projetosRealizados,
                        'empty' => '(Escolha um Projeto)'
                    ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
