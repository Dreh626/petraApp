<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProjetosRealizado[]|\Cake\Collection\CollectionInterface $projetosRealizados
 */
?>
<div class="projetosRealizados index content">
    <?= $this->Html->link(__('Novo Projeto Realizado'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Projeto Realizado') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('cidade') ?></th>
                    <th><?= $this->Paginator->sort('uf') ?></th>
                    <th><?= $this->Paginator->sort('descricao') ?></th>
                    <th><?= $this->Paginator->sort('banner') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($projetosRealizados as $projetosRealizado): ?>
                <tr>
                    <td><?= $this->Number->format($projetosRealizado->id) ?></td>
                    <td><?= h($projetosRealizado->nome) ?></td>
                    <td><?= h($projetosRealizado->cidade) ?></td>
                    <td><?= h($projetosRealizado->uf) ?></td>
                    <td><?= h($projetosRealizado->descricao) ?></td>
                    <td><?php echo $this->Html->image("/img/projetos/".$projetosRealizado->banner); ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $projetosRealizado->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $projetosRealizado->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $projetosRealizado->id], ['confirm' => __('Tem certeza que quer deletar # {0}?', $projetosRealizado->nome)]) ?>
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
