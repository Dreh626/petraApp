<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Interessado $interessado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Interessado'), ['action' => 'edit', $interessado->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Interessado'), ['action' => 'delete', $interessado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $interessado->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Interessados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Interessado'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="interessados view content">
            <h3><?= h($interessado->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($interessado->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($interessado->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Celular') ?></th>
                    <td><?= h($interessado->celular) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereco') ?></th>
                    <td><?= h($interessado->endereco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Instalacao') ?></th>
                    <td><?= h($interessado->tipo_instalacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($interessado->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Metragem') ?></th>
                    <td><?= $this->Number->format($interessado->metragem) ?></td>
                </tr>
                <tr>
                    <th><?= __('Conta Atual') ?></th>
                    <td><?= $this->Number->format($interessado->conta_atual) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
