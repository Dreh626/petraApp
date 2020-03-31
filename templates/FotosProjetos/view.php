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
            <?= $this->Html->link(__('Editar Foto'), ['action' => 'edit', $fotosProjeto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Foto'), ['action' => 'delete', $fotosProjeto->id], ['confirm' => __('Tem certeza que quer deletar # {0}?', $fotosProjeto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Fotos dos Projetos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nova Foto de Projeto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="fotosProjetos view content">
            <h3>Foto</h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($fotosProjeto->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nome da Foto') ?></th>
                    <td><?= h($fotosProjeto->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($fotosProjeto->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Projeto Realizado') ?></th>
                    <td><?= $fotosProjeto->has('projetos_realizado') ? $this->Html->link($fotosProjeto->projetos_realizado->nome, ['controller' => 'ProjetosRealizados', 'action' => 'view', $fotosProjeto->projetos_realizado->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Foto') ?></th>
                    <td><?php echo $this->Html->image("/img/projetos/fotos/".$fotosProjeto->foto); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
