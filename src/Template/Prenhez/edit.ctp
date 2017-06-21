<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $prenhez->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $prenhez->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Prenhez'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bovinos'), ['controller' => 'Bovinos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bovino'), ['controller' => 'Bovinos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prenhez form large-9 medium-8 columns content">
    <?= $this->Form->create($prenhez) ?>
    <fieldset>
        <legend><?= __('Edit Prenhez') ?></legend>
        <?php
            echo $this->Form->control('bovino_id', ['options' => $bovinos]);
            echo $this->Form->control('data_inicial');
            echo $this->Form->control('data_provavel');
            echo $this->Form->control('ocorreu');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
