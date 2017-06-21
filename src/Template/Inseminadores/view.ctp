<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Inseminadore'), ['action' => 'edit', $inseminadore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Inseminadore'), ['action' => 'delete', $inseminadore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inseminadore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Inseminadores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inseminadore'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="inseminadores view large-9 medium-8 columns content">
    <h3><?= h($inseminadore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($inseminadore->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($inseminadore->id) ?></td>
        </tr>
    </table>
</div>
