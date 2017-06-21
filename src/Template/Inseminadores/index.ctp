<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Novo Inseminador'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="inseminadores index large-9 medium-8 columns content">
    <h3><?= __('Inseminadores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inseminadores as $inseminadore): ?>
            <tr>
                <td><?= $this->Number->format($inseminadore->id) ?></td>
                <td><?= h($inseminadore->nome) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $inseminadore->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $inseminadore->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $inseminadore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inseminadore->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
