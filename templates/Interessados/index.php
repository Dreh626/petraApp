<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Interessado[]|\Cake\Collection\CollectionInterface $interessados
 */
?>
<div class="interessados index content">
    <?= $this->Html->link(__('Novo Interessado'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Interessados') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('celular') ?></th>
                    <th><?= $this->Paginator->sort('endereco') ?></th>
                    <th><?= $this->Paginator->sort('tipo_instalacao') ?></th>
                    <th><?= $this->Paginator->sort('metragem') ?></th>
                    <th><?= $this->Paginator->sort('conta_atual') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($interessados as $interessado): ?>
                <tr>
                    <td><?= $this->Number->format($interessado->id) ?></td>
                    <td><?= h($interessado->nome) ?></td>
                    <td><?= h($interessado->email) ?></td>
                    <td><?= h($interessado->celular) ?></td>
                    <td><?= h($interessado->endereco) ?></td>
                    <td><?= h($interessado->tipo_instalacao) ?></td>
                    <td><?= $this->Number->format($interessado->metragem) ?></td>
                    <td><?= $this->Number->format($interessado->conta_atual) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $interessado->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $interessado->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $interessado->id], ['confirm' => __('Tem certeza que quer deletar # {0}?', $interessado->id)]) ?>
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
