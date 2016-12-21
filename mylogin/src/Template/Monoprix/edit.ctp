<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $monoprix->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $monoprix->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Articles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="monoprix form large-9 medium-8 columns content">
    <?= $this->Form->create($monoprix) ?>
    <fieldset>
        <legend><?= __('Edit Article') ?></legend>
        <?php
            echo $this->Form->input('categorie');
            echo $this->Form->input('nom');
            echo $this->Form->input('marque');
            echo $this->Form->input('prix');
            echo $this->Form->input('promotion');
            echo $this->Form->input('debut_promotion');
            echo $this->Form->input('fin_promotion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
