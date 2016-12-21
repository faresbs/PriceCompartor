<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aziza'), ['action' => 'edit', $aziza->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aziza'), ['action' => 'delete', $aziza->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aziza->id)]) ?> </li>
        <li><?= $this->Html->link(__('Articles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouveau Article'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="aziza view large-9 medium-8 columns content">
    <h3><?= h($aziza->categorie) ?></h3>
    <h3><?= h($aziza->nom) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Categorie') ?></th>
            <td><?= h($aziza->categorie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($aziza->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Marque') ?></th>
            <td><?= h($aziza->marque) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($aziza->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prix') ?></th>
            <td><?= $this->Number->format($aziza->prix) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Promotion') ?></th>
            <td><?= $this->Number->format($aziza->promotion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Debut Promotion') ?></th>
            <td><?= h($aziza->debut_promotion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fin Promotion') ?></th>
            <td><?= h($aziza->fin_promotion) ?></td>
        </tr>
    </table>
</div>
