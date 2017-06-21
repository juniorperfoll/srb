<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Bovino'), ['action' => 'edit', $bovino->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Bovino'), ['action' => 'delete', $bovino->id], ['confirm' => __('Vai mesmo excluir # {0}?', $bovino->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Bovinos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Bovino'), ['action' => 'add']) ?> </li>
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
            <th scope="row"><?= __('Raça') ?></th>
            <td><?= h($bovino->raca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bovino->id) ?></td>
        </tr>
    </table>
</div>
