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
            <?= $this->Html->link(__('Editar Projeto Realizado'), ['action' => 'edit', $projetosRealizado->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Projeto Realizado'), ['action' => 'delete', $projetosRealizado->id], ['confirm' => __('Tem certeza que quer deletar # {0}?', $projetosRealizado->nome), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Projetos Realizados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Novo Projeto Realizado'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="projetosRealizados view content">
            <h3>Projeto</h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($projetosRealizado->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($projetosRealizado->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cidade') ?></th>
                    <td><?= h($projetosRealizado->cidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Uf') ?></th>
                    <td><?= h($projetosRealizado->uf) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($projetosRealizado->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Banner') ?></th>
                    <td><?php echo $this->Html->image("/img/projetos/".$projetosRealizado->banner); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
