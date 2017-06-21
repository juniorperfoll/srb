<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ordenha'), ['action' => 'edit', $ordenha->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ordenha'), ['action' => 'delete', $ordenha->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ordenha->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ordenhas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ordenha'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ordenhas view large-9 medium-8 columns content">
    <h3><?= h($ordenha->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ordenha->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($ordenha->data) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($ordenha->descricao)); ?>
    </div>
</div>
