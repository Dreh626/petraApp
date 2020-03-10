<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DadosEstatistico[]|\Cake\Collection\CollectionInterface $dadosEstatisticos
 */
?>
<div class="dadosEstatisticos index content">
    <?= $this->Html->link(__('Novo Dado Estatistico'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Dados Estatisticos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('descricao') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dadosEstatisticos as $dadosEstatistico): ?>
                <tr>
                    <td><?= $this->Number->format($dadosEstatistico->id) ?></td>
                    <td><?= $this->Number->format($dadosEstatistico->numero) ?></td>
                    <td><?= h($dadosEstatistico->descricao) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $dadosEstatistico->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $dadosEstatistico->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $dadosEstatistico->id], ['confirm' => __('Tem certeza que quer deletar # {0}?', $dadosEstatistico->id)]) ?>
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
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de um total de {{count}}')) ?></p>
    </div>
</div>
