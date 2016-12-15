<?php $this->layout = 'CakeBootstrap.default'; ?>
<?php $this->start('subtitle_for_page'); ?>
Cms
<?php $this->end(); ?>

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
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <h4 class="panel-title">Form</h4>
                 </div>
                 <div class="panel-body">
                     <?= $this->Form->create($vocabulary, ['align' => [
                     'sm' => [
                     'left' => 6,
                     'middle' => 6,
                     'right' => 12
                     ],
                     'md' => [
                     'left' => 3,
                     'middle' => 9
                     ]
                     ]]) ?>

                     <div class="form-body">
                         <?php
                                                  echo $this->Form->input('name');
                                                  echo $this->Form->input('description');
                                                  ?>
                     </div>
                     <div class="form-action">
                         <div class="row">
                             <div class="col-md-offset-3 col-md-4">
                                 <?= $this->Form->button(__('Submit'), ['class' => 'btn green']) ?>
                             </div>
                         </div>
                     </div>
                     <?= $this->Form->end() ?>
                 </div>
             </div>
         </div>
         <!-- Content -->

	</main>
<!-- End page Content -->
