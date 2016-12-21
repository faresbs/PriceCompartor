<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Articles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="aziza form large-9 medium-8 columns content">
    <?= $this->Form->create($aziza) ?>
    <fieldset>
        <legend><?= __('Ajouter Article') ?></legend>
        <?php
            echo $this->Form->input('categorie');
            echo $this->Form->input('nom');
            echo $this->Form->input('marque');
            echo $this->Form->input('prix');
            echo $this->Form->input('promotion');
            echo $this->Form->input('debut_promotion', ['empty' => true]);
            echo $this->Form->input('fin_promotion', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
