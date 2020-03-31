<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FotosProjeto[]|\Cake\Collection\CollectionInterface $fotosProjetos
 */
?>
<div class="fotosProjetos index content">
    <?= $this->Html->link(__('Nova Foto de Projeto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Fotos dos Projetos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('descricao') ?></th>
                    <th><?= $this->Paginator->sort('foto') ?></th>
                    <th><?= $this->Paginator->sort('projeto_id') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fotosProjetos as $fotosProjeto): ?>
                <tr>
                    <td><?= $this->Number->format($fotosProjeto->id) ?></td>
                    <td><?= h($fotosProjeto->nome) ?></td>
                    <td><?= h($fotosProjeto->descricao) ?></td>
                    <td><?php echo $this->Html->image("/img/projetos/fotos/".$fotosProjeto->foto); ?></td>
                    <td><?= $fotosProjeto->has('projetos_realizado') ? $this->Html->link($fotosProjeto->projetos_realizado->nome, ['controller' => 'ProjetosRealizados', 'action' => 'view', $fotosProjeto->projetos_realizado->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $fotosProjeto->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $fotosProjeto->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $fotosProjeto->id], ['confirm' => __('Tem certeza que quer deletar # {0}?', $fotosProjeto->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('proximo') . ' >') ?>
            <?= $this->Paginator->last(__('ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de um total de {{count}}')) ?></p>
    </div>
</div>
