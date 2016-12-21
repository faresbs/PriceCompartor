<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $carefour->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carefour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carefour->id)]) ?> </li>
        <li><?= $this->Html->link(__('Articles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouveau article'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="carefour view large-9 medium-8 columns content">
    <h2><?= h($carefour->categorie) ?></h2>
    <h3><?= h($carefour->nom) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Categorie') ?></th>
            <td><?= h($carefour->categorie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($carefour->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Marque') ?></th>
            <td><?= h($carefour->marque) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($carefour->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prix') ?></th>
            <td><?= $this->Number->format($carefour->prix) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Promotion') ?></th>
             <!--afficher promotion avec pourcentage si il y a une promotion-->
            <td><?= $this->Number->format((($carefour->promotion)*100)/$carefour->prix) ?>%</td>
        </tr>
        <tr>
            <th scope="row"><?= __('Debut Promotion') ?></th>
            <td><?= h($carefour->debut_promotion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fin Promotion') ?></th>
            <td><?= h($carefour->fin_promotion) ?></td>
        </tr>
    </table>
</div>
