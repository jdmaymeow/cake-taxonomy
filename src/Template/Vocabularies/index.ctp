<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Vocabulary'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Terms'), ['controller' => 'Terms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Term'), ['controller' => 'Terms', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vocabularies index large-9 medium-8 columns content">
    <h3><?= __('Vocabularies') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vocabularies as $vocabulary): ?>
            <tr>
                <td><?= $this->Number->format($vocabulary->id) ?></td>
                <td><?= h($vocabulary->name) ?></td>
                <td><?= h($vocabulary->created) ?></td>
                <td><?= h($vocabulary->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $vocabulary->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vocabulary->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vocabulary->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vocabulary->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
