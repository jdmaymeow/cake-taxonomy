<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vocabulary'), ['action' => 'edit', $vocabulary->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vocabulary'), ['action' => 'delete', $vocabulary->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vocabulary->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vocabularies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vocabulary'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Terms'), ['controller' => 'Terms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Term'), ['controller' => 'Terms', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vocabularies view large-9 medium-8 columns content">
    <h3><?= h($vocabulary->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($vocabulary->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($vocabulary->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($vocabulary->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($vocabulary->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($vocabulary->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Terms') ?></h4>
        <?php if (!empty($vocabulary->terms)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Vocabulary Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vocabulary->terms as $terms): ?>
            <tr>
                <td><?= h($terms->id) ?></td>
                <td><?= h($terms->name) ?></td>
                <td><?= h($terms->description) ?></td>
                <td><?= h($terms->slug) ?></td>
                <td><?= h($terms->vocabulary_id) ?></td>
                <td><?= h($terms->created) ?></td>
                <td><?= h($terms->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Terms', 'action' => 'view', $terms->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Terms', 'action' => 'edit', $terms->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Terms', 'action' => 'delete', $terms->id], ['confirm' => __('Are you sure you want to delete # {0}?', $terms->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
