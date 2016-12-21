<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aziza->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aziza->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="aziza form large-9 medium-8 columns content">
    <?= $this->Form->create($aziza) ?>
    <fieldset>
        <legend><?= __('Edit Article') ?></legend>
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
