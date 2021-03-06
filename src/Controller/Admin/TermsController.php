<?php
namespace CakeTaxonomy\Controller\Admin;

use Cake\Event\Event;
use CakeTaxonomy\Controller\AbstractTermsController;
use CakeTaxonomy\Controller\AppController;

/**
 * Terms Controller
 *
 * @property \CakeTaxonomy\Model\Table\TermsTable $Terms
 */
class TermsController extends AbstractTermsController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event); // TODO: Change the autogenerated stub
        $this->Auth->deny();
    }
}
