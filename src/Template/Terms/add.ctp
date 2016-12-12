<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Terms'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Vocabularies'), ['controller' => 'Vocabularies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vocabulary'), ['controller' => 'Vocabularies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="terms form large-9 medium-8 columns content">
    <?= $this->Form->create($term) ?>
    <fieldset>
        <legend><?= __('Add Term') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            //echo $this->Form->input('slug');
            echo $this->Form->input('vocabulary_id', ['options' => $vocabularies]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
