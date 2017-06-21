<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ordenhas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ordenhas form large-9 medium-8 columns content">
    <?= $this->Form->create($ordenha) ?>
    <fieldset>
        <legend><?= __('Add Ordenha') ?></legend>
        <?php
            echo $this->Form->control('data');
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
