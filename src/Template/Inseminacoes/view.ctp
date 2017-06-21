<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Inseminaco'), ['action' => 'edit', $inseminaco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Inseminaco'), ['action' => 'delete', $inseminaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inseminaco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Inseminacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inseminaco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bovinos'), ['controller' => 'Bovinos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bovino'), ['controller' => 'Bovinos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="inseminacoes view large-9 medium-8 columns content">
    <h3><?= h($inseminaco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Bovino') ?></th>
            <td><?= $inseminaco->has('bovino') ? $this->Html->link($inseminaco->bovino->id, ['controller' => 'Bovinos', 'action' => 'view', $inseminaco->bovino->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($inseminaco->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inserminador Id') ?></th>
            <td><?= $this->Number->format($inseminaco->inserminador_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($inseminaco->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($inseminaco->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($inseminaco->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('M T') ?></h4>
        <?= $this->Text->autoParagraph(h($inseminaco->m_t)); ?>
    </div>
</div>
