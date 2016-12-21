<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nouveau Article'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aziza index large-9 medium-8 columns content">
     <h1><?= __('Bienvenue') ?></h1>
    <h3><?= __('Aziza Market') ?></h3>
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
            <?php foreach ($aziza as $aziza): ?>
            <tr>
                <td><?= $this->Number->format($aziza->id) ?></td>
                <td><?= h($aziza->categorie) ?></td>
                <td><?= h($aziza->nom) ?></td>
                <td><?= h($aziza->marque) ?></td>
                <td><?= $this->Number->format($aziza->prix) ?></td>
                <td><?= $this->Number->format($aziza->promotion) ?></td>
                <td><?= h($aziza->debut_promotion) ?></td>
                <td><?= h($aziza->fin_promotion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $aziza->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aziza->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aziza->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aziza->id)]) ?>
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
