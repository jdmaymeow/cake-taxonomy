<?php $this->layout = 'CakeBootstrap.default'; ?>
<?php $this->start('subtitle_for_page'); ?>
Cms
<?php $this->end() ?>
<!-- Header -->
<div class="cinema border-bottom-gray bg-amethyst-sl">
    <div class="container">
        <h3><?= h($term->name) ?>
            <div class="pull-right">

                <div class="btn-group">
                    <?= $this->Html->link(__('New Term'), ['action' => 'add'], ['class' => 'btn btn-sm btn-default']) ?>
                    <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-chevron-down"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-left">
                        <li><?= $this->Html->link(__('Edit Term'), ['action' => 'edit', $term->id]) ?> </li>
                        <li><?= $this->Html->link(__('List Terms'), ['action' => 'index']) ?> </li>
                        <li><?= $this->Html->link(__('New Term'), ['action' => 'add']) ?> </li>
                                                <li><?= $this->Html->link(__('List Vocabularies'), ['controller' => 'Vocabularies', 'action' => 'index']) ?> </li>
                        <li><?= $this->Html->link(__('New Vocabulary'), ['controller' => 'Vocabularies', 'action' => 'add']) ?> </li>
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
                     <td style="text-align: right"><?= h($term->name) ?></td>
                 </tr>
                                                                    <tr>
                     <th><?= __('Slug') ?></th>
                     <td style="text-align: right"><?= h($term->slug) ?></td>
                 </tr>
                                                                    <tr>
                     <th><?= __('Vocabulary') ?></th>
                     <td style="text-align: right"><?= $term->has('vocabulary') ? $this->Html->link($term->vocabulary->name, ['controller' => 'Vocabularies', 'action' => 'view', $term->vocabulary->id]) : '' ?></td>
                 </tr>
                                                                                                                       <tr>
                     <th><?= __('Id') ?></th>
                     <td style="text-align: right"><?= $this->Number->format($term->id) ?></td>
                 </tr>
                                                                                     <tr>
                     <th><?= __('Created') ?></th>
                     <td style="text-align: right"><?= h($term->created) ?></td>
                 </tr>
                                  <tr>
                     <th><?= __('Modified') ?></th>
                     <td style="text-align: right"><?= h($term->modified) ?></td>
                 </tr>
                                                                </table>



                                       <div class="">
                 <h4><?= __('Description') ?></h4>
                 <?= $this->Text->autoParagraph(h($term->description)); ?>
             </div>
                                                </div>
         <!-- Content -->

	</main>
<!-- End page Content -->
