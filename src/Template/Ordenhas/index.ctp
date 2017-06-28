<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">Ações</li>
        <li><?= $this->Html->link(__('Nova Ordenha'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ordenhas index large-9 medium-8 columns content">
    <h3><?= __('Ordenhas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col" class="actions">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ordenhas as $ordenha): ?>
            <tr>
                <td><?= $this->Number->format($ordenha->id) ?></td>
                <td><?= h($ordenha->data) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $ordenha->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $ordenha->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $ordenha->id], ['confirm' => __('Você confirma a exclusão do # {0}?', $ordenha->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} resultados de {{count}} no total')]) ?></p>
    </div>
</div>
