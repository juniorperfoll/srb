<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">Ações</li>
        <li><?= $this->Html->link(__('Editar Prenhez'), ['action' => 'edit', $prenhez->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Prenhez'), ['action' => 'delete', $prenhez->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prenhez->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Prenhez'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Adicionar Prenhez'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Bovinos'), ['controller' => 'Bovinos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Adicionar Bovino'), ['controller' => 'Bovinos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="prenhez view large-9 medium-8 columns content">
    <h3><?= h($prenhez->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row">Bovino</th>
            <td><?= $prenhez->has('bovino') ? $this->Html->link($prenhez->bovino->id, ['controller' => 'Bovinos', 'action' => 'view', $prenhez->bovino->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($prenhez->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Inicial') ?></th>
            <td><?= h($prenhez->data_inicial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Provavel') ?></th>
            <td><?= h($prenhez->data_provavel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($prenhez->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($prenhez->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ocorreu') ?></th>
            <td><?= $prenhez->ocorreu ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
