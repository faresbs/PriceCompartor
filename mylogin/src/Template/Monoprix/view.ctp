<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $monoprix->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $monoprix->id], ['confirm' => __('Are you sure you want to delete # {0}?', $monoprix->id)]) ?> </li>
        <li><?= $this->Html->link(__('Article'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouveau Article'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="monoprix view large-9 medium-8 columns content">
    <h2><?= h($monoprix->categorie) ?></h2>
    <h3><?= h($monoprix->nom) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Categorie') ?></th>
            <td><?= h($monoprix->categorie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($monoprix->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Marque') ?></th>
            <td><?= h($monoprix->marque) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($monoprix->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prix') ?></th>
            <td><?= $this->Number->format($monoprix->prix) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Promotion') ?></th>
            <!--afficher promotion avec pourcentage si il y a une promotion-->
            <td><?= $this->Number->format((($monoprix->promotion)*100)/$monoprix->prix) ?>%</td>
        </tr>
        <tr>
            <th scope="row"><?= __('Debut Promotion') ?></th>
            <td><?= h($monoprix->debut_promotion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fin Promotion') ?></th>
            <td><?= h($monoprix->fin_promotion) ?></td>
        </tr>
    </table>
</div>
<div></div>
