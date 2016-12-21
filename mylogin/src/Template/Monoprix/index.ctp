<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nouveau Article'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="monoprix index large-9 medium-8 columns content">
    <h1><?= __('Bienvenue') ?></h1>
    <h3><?= __('Monoprix') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categorie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('marque') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prix') ?></th>
                <th scope="col"><?= $this->Paginator->sort('promotion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('debut_promotion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fin_promotion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($monoprix as $monoprix): ?>
            <tr>
                <td><?= $this->Number->format($monoprix->id) ?></td>
                <td><?= h($monoprix->categorie) ?></td>
                <td><?= h($monoprix->nom) ?></td>
                <td><?= h($monoprix->marque) ?></td>
                <td><?= $this->Number->format($monoprix->prix) ?></td>
                <td><?= $this->Number->format($monoprix->promotion*-1) ?></td>
                <td><?= h($monoprix->debut_promotion) ?></td>
                <td><?= h($monoprix->fin_promotion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $monoprix->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $monoprix->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $monoprix->id], ['confirm' => __('Are you sure you want to delete # {0}?', $monoprix->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
