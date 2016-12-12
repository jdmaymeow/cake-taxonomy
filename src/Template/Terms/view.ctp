<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Term'), ['action' => 'edit', $term->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Term'), ['action' => 'delete', $term->id], ['confirm' => __('Are you sure you want to delete # {0}?', $term->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Terms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Term'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vocabularies'), ['controller' => 'Vocabularies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vocabulary'), ['controller' => 'Vocabularies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="terms view large-9 medium-8 columns content">
    <h3><?= h($term->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($term->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($term->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vocabulary') ?></th>
            <td><?= $term->has('vocabulary') ? $this->Html->link($term->vocabulary->name, ['controller' => 'Vocabularies', 'action' => 'view', $term->vocabulary->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($term->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($term->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($term->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($term->description)); ?>
    </div>
</div>
