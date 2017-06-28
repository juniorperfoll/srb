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
                ['action' => 'delete', $rebanho->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rebanho->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Rebanhos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="rebanhos form large-9 medium-8 columns content">
    <?= $this->Form->create($rebanho) ?>
    <fieldset>
        <legend><?= __('Edit Rebanho') ?></legend>
        <?php
            echo $this->Form->control('id_bovino');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
