<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Prenhez'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bovinos'), ['controller' => 'Bovinos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bovino'), ['controller' => 'Bovinos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prenhez index large-9 medium-8 columns content">
    <h3><?= __('Prenhez') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bovino_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_inicial') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_provavel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ocorreu') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prenhez as $prenhez): ?>
            <tr>
                <td><?= $this->Number->format($prenhez->id) ?></td>
                <td><?= $prenhez->has('bovino') ? $this->Html->link($prenhez->bovino->id, ['controller' => 'Bovinos', 'action' => 'view', $prenhez->bovino->id]) : '' ?></td>
                <td><?= h($prenhez->data_inicial) ?></td>
                <td><?= h($prenhez->data_provavel) ?></td>
                <td><?= h($prenhez->ocorreu) ?></td>
                <td><?= h($prenhez->created) ?></td>
                <td><?= h($prenhez->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $prenhez->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prenhez->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prenhez->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prenhez->id)]) ?>
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
