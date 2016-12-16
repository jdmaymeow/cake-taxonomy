<?php $this->layout = 'CakeBootstrap.default'; ?>
<?php $this->start('subtitle_for_page'); ?>
Cms
<?php $this->end() ?>
<!-- Header -->
<div class="cinema border-bottom-gray bg-amethyst-sl">
    <div class="container">
        <h3><?= h($vocabulary->name) ?>
            <div class="pull-right">

                <div class="btn-group">
                    <?= $this->Html->link(__('New Vocabulary'), ['action' => 'add'], ['class' => 'btn btn-sm btn-default']) ?>
                    <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-chevron-down"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-left">
                        <li><?= $this->Html->link(__('Edit Vocabulary'), ['action' => 'edit', $vocabulary->id]) ?> </li>
                        <li><?= $this->Html->link(__('List Vocabularies'), ['action' => 'index']) ?> </li>
                        <li><?= $this->Html->link(__('New Vocabulary'), ['action' => 'add']) ?> </li>
                                                <li><?= $this->Html->link(__('List Terms'), ['controller' => 'Terms', 'action' => 'index']) ?> </li>
                        <li><?= $this->Html->link(__('New Term'), ['controller' => 'Terms', 'action' => 'add']) ?> </li>
                                            </ul>
                </div>
            </div>
        </h3>
    </div>
</div>


<!-- Begin page content -->
    <main id="main-container">

         <!-- Content -->
         <div class="container">

             <table class="table table-hover">
                                                                    <tr>
                     <th><?= __('Name') ?></th>
                     <td style="text-align: right"><?= h($vocabulary->name) ?></td>
                 </tr>
                                                                                                                       <tr>
                     <th><?= __('Id') ?></th>
                     <td style="text-align: right"><?= $this->Number->format($vocabulary->id) ?></td>
                 </tr>
                                                                                     <tr>
                     <th><?= __('Created') ?></th>
                     <td style="text-align: right"><?= h($vocabulary->created) ?></td>
                 </tr>
                                  <tr>
                     <th><?= __('Modified') ?></th>
                     <td style="text-align: right"><?= h($vocabulary->modified) ?></td>
                 </tr>
                                                                </table>



                                       <div class="">
                 <h4><?= __('Description') ?></h4>
                 <?= $this->Text->autoParagraph(h($vocabulary->description)); ?>
             </div>
                                                    <div class="related">
                 <?php if (!empty($vocabulary->terms)): ?>
                 <div class="panel panel-info">
                     <div class="panel-heading">
                         <h4 class="panel-title"><?= __('Related Terms') ?>
                         <?= $this->Html->link(__('CREATE'), ['controller' => 'Terms', 'action' => 'add']) ?>
                         </h4>
                     </div>
                     <table class="table table-hover">
                         <tr>
                                                          <td><?= __('Id') ?></td>
                                                          <td><?= __('Name') ?></td>
                                                          <td><?= __('Description') ?></td>
                                                          <td><?= __('Slug') ?></td>
                                                          <td><?= __('Vocabulary Id') ?></td>
                                                          <td><?= __('Created') ?></td>
                                                          <td><?= __('Modified') ?></td>
                                                          <td class="actions"><?= __('Actions') ?></td>
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
                 </div>
                 <?php endif; ?>
             </div>
                      </div>
         <!-- Content -->

	</main>
<!-- End page Content -->
