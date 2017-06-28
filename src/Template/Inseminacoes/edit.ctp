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
                ['action' => 'delete', $inseminaco->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $inseminaco->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Inseminacoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bovinos'), ['controller' => 'Bovinos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bovino'), ['controller' => 'Bovinos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="inseminacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($inseminaco) ?>
    <fieldset>
        <legend><?= __('Edit Inseminaco') ?></legend>
        <?php
            echo $this->Form->control('data');
            echo $this->Form->control('m_t');
            echo $this->Form->control('bovino_id', ['options' => $bovinos]);
            echo $this->Form->control('inserminador_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
