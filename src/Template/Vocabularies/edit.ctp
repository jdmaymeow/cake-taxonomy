<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vocabulary->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vocabulary->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Vocabularies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Terms'), ['controller' => 'Terms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Term'), ['controller' => 'Terms', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vocabularies form large-9 medium-8 columns content">
    <?= $this->Form->create($vocabulary) ?>
    <fieldset>
        <legend><?= __('Edit Vocabulary') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
