<?php
namespace CakeTaxonomy\Test\TestCase\Model\Table;

use CakeTaxonomy\Model\Table\TagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * CakeTaxonomy\Model\Table\TagsTable Test Case
 */
class TagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \CakeTaxonomy\Model\Table\TagsTable
     */
    public $Tags;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.cake_taxonomy.tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tags') ? [] : ['className' => 'CakeTaxonomy\Model\Table\TagsTable'];
        $this->Tags = TableRegistry::get('Tags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tags);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
