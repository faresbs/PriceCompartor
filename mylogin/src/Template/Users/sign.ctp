<!--sign template--> 
<!--ctp to say cake template--> 
<br>
<br>
<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
    <div class="panel">
        <h3 class="text-center">Please Register</h3>
        <?= $this->Form->create(); ?>
            <?=$this->Form->input('name'); ?>
            <?=$this->Form->input('email'); ?>
            <?=$this->Form->input('password', array('type' => 'password')); ?>
            <?=$this->Form->submit('Save', array('class' => 'button')); ?>
             <?= $this->Html->link(__('You have already an account ?'), ['action' => 'login']) ?>
        <?= $this->Form->end(); ?>
    </div>
</div>