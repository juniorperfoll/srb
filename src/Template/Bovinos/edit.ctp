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
                ['action' => 'delete', $bovino->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bovino->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bovinos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bovinos form large-9 medium-8 columns content">
    <?= $this->Form->create($bovino) ?>
    <fieldset>
        <legend><?= __('Edit Bovino') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('raca');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
