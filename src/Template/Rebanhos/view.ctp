<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Rebanho $rebanho
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rebanho'), ['action' => 'edit', $rebanho->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rebanho'), ['action' => 'delete', $rebanho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rebanho->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rebanhos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rebanho'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rebanhos view large-9 medium-8 columns content">
    <h3><?= h($rebanho->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($rebanho->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Bovino') ?></th>
            <td><?= $this->Number->format($rebanho->id_bovino) ?></td>
        </tr>
    </table>
</div>
