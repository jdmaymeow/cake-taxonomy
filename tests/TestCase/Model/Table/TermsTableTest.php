<?php
namespace CakeTaxonomy\Test\TestCase\Model\Table;

use CakeTaxonomy\Model\Table\TermsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * CakeTaxonomy\Model\Table\TermsTable Test Case
 */
class TermsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \CakeTaxonomy\Model\Table\TermsTable
     */
    public $Terms;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.cake_taxonomy.terms',
        'plugin.cake_taxonomy.vocabularies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Terms') ? [] : ['className' => 'CakeTaxonomy\Model\Table\TermsTable'];
        $this->Terms = TableRegistry::get('Terms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Terms);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
