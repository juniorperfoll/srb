<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Inseminaco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bovinos'), ['controller' => 'Bovinos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bovino'), ['controller' => 'Bovinos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="inseminacoes index large-9 medium-8 columns content">
    <h3><?= __('Inseminacoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bovino_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inserminador_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inseminacoes as $inseminaco): ?>
            <tr>
                <td><?= $this->Number->format($inseminaco->id) ?></td>
                <td><?= h($inseminaco->data) ?></td>
                <td><?= $inseminaco->has('bovino') ? $this->Html->link($inseminaco->bovino->id, ['controller' => 'Bovinos', 'action' => 'view', $inseminaco->bovino->id]) : '' ?></td>
                <td><?= $this->Number->format($inseminaco->inserminador_id) ?></td>
                <td><?= h($inseminaco->created) ?></td>
                <td><?= h($inseminaco->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $inseminaco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $inseminaco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $inseminaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inseminaco->id)]) ?>
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
