<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bovinos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bovinos form large-9 medium-8 columns content">
    <?= $this->Form->create($bovino) ?>
    <fieldset>
        <legend><?= __('Add Bovino') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('raca');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
