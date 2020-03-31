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
            <?= $this->Html->link(__('Editar Dado Estatistico'), ['action' => 'edit', $dadosEstatistico->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Dado Estatistico'), ['action' => 'delete', $dadosEstatistico->id], ['confirm' => __('Tem certeza que quer deletar # {0}?', $dadosEstatistico->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Dados Estatisticos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Novo Dado Estatistico'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dadosEstatisticos view content">
            <h3>Dado Estatístico</h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($dadosEstatistico->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($dadosEstatistico->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= $this->Number->format($dadosEstatistico->numero) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
