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
                ['action' => 'delete', $inseminadore->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $inseminadore->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Inseminadores'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="inseminadores form large-9 medium-8 columns content">
    <?= $this->Form->create($inseminadore) ?>
    <fieldset>
        <legend><?= __('Edit Inseminadore') ?></legend>
        <?php
            echo $this->Form->control('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
