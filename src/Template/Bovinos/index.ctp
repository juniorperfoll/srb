<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Bovino'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bovinos index large-9 medium-8 columns content">
    <h3><?= __('Bovinos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('raça') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bovinos as $bovino): ?>
            <tr>
                <td><?= $this->Number->format($bovino->id) ?></td>
                <td><?= h($bovino->nome) ?></td>
                <td><?= h($bovino->raca) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visual.'), ['action' => 'view', $bovino->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $bovino->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $bovino->id], ['confirm' => __('Vai mesmo excluir -> {0}?', $bovino->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('prim.')) ?>
            <?= $this->Paginator->prev('< ' . __('ant.')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('prox.') . ' >') ?>
            <?= $this->Paginator->last(__('ant.') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pág. {{page}} de {{pages}}, visual. {{current}} registros(s) de {{count}} total')]) ?></p>
    </div>
</div>
