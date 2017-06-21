<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">Ações</li>
        <li><?= $this->Html->link(__('Listar Prenhez'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Bovinos'), ['controller' => 'Bovinos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Adicionar Bovino'), ['controller' => 'Bovinos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prenhez form large-9 medium-8 columns content">
    <?= $this->Form->create($prenhez) ?>
    <fieldset>
        <legend>Adicionar</legend>
        <?php
            echo $this->Form->control('bovino_id', ['options' => $bovinos]);
            echo $this->Form->control('data_inicial');
            echo $this->Form->control('data_provavel');
            echo $this->Form->control('ocorreu');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
