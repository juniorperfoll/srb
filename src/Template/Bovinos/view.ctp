<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bovino'), ['action' => 'edit', $bovino->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bovino'), ['action' => 'delete', $bovino->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bovino->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bovinos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bovino'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bovinos view large-9 medium-8 columns content">
    <h3><?= h($bovino->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($bovino->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Raca') ?></th>
            <td><?= h($bovino->raca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bovino->id) ?></td>
        </tr>
    </table>
</div>
