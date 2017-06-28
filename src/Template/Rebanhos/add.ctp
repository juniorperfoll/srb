<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Rebanhos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="rebanhos form large-9 medium-8 columns content">
    <?= $this->Form->create($rebanho) ?>
    <fieldset>
        <legend><?= __('Add Rebanho') ?></legend>
        <?php
            echo $this->Form->control('id_bovino');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
