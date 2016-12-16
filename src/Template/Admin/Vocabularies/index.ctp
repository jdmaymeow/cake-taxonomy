<?php $this->layout = 'CakeBootstrap.default'; ?>
<?php $this->start('subtitle_for_page'); ?>
Cms
<?php $this->end() ?>

<!-- Header -->
<div class="cinema border-bottom-gray bg-amethyst-sl">
    <div class="container">
        <h3><?= __('Vocabularies') ?>
            <div class="pull-right">

                <div class="btn-group">
                    <?= $this->Html->link(__('New Vocabulary'), ['action' => 'add'], ['class' => 'btn btn-sm btn-default']) ?>
                    <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-chevron-down"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-left">
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
             <?php if(count($vocabularies) > 0) : ?>
             <div class="row">
                 <div class="col-md-12">

                     <div class="table-responsive">
                    <table class="table table-hover table-vcenter">
                        <thead>
                        <tr>
                                                        <td><?= $this->Paginator->sort('id') ?></td>
                                                        <td><?= $this->Paginator->sort('name') ?></td>
                                                        <td><?= $this->Paginator->sort('created') ?></td>
                                                        <td><?= $this->Paginator->sort('modified') ?></td>
                                                        <td class="actions text-center"><?= __('Actions') ?></td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($vocabularies as $vocabulary): ?>
                        <tr>
                                                        <td><?= $this->Number->format($vocabulary->id) ?></td>
                                                        <td><?= h($vocabulary->name) ?></td>
                                                        <td><?= h($vocabulary->created) ?></td>
                                                        <td><?= h($vocabulary->modified) ?></td>
                                                        <td class="actions text-center">
                                <div class="btn-group">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $vocabulary->id], ['class' => 'btn btn-xs btn-default']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vocabulary->id], ['class' => 'btn btn-xs btn-default']) ?>
                                        <button class="btn btn-xs btn-danger" type="button" data-toggle="modal" data-target="#modal-delete-<?= $vocabulary->id?>">Delete</button>

                                </div>
                                <?= $this->element('CakeBootstrap.deletemodal', ['id' => $vocabulary->id, 'name' => $vocabulary->id]); ?>
                            </td>
                        </tr>

                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                 </div>
             </div>
             <div class="row">
                    <div class="col-md-12">
                        <ul class="pagination">
                            <?php //echo $this->Paginator->prev('< ' . __('previous')) ?>
                            <?= $this->Paginator->numbers() ?>
                            <?php //echo $this->Paginator->next(__('next') . ' >') ?>
                        </ul>
                    </div>
                </div>

                <?php else : ?>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body text-center">
                                        <h2><i class="fa fa-plus-square-o text-amethyst"></i></h2>
                                        <p><strong>You currently have now vocabularies</strong></p>
                                        <o>To get started, click to button bellow and create new vocabulary</p>
                                        <?= $this->Html->link(__('Add new vocabulary'), ['action' => 'add'], ['class' => 'btn btn-sm btn-primary']); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endif; ?>

         </div>
         <!-- Content -->

	</main>
<!-- End page Content -->
