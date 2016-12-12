<?php
namespace CakeTaxonomy\Test\TestCase\Model\Table;

use CakeTaxonomy\Model\Table\VocabulariesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * CakeTaxonomy\Model\Table\VocabulariesTable Test Case
 */
class VocabulariesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \CakeTaxonomy\Model\Table\VocabulariesTable
     */
    public $Vocabularies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.cake_taxonomy.vocabularies',
        'plugin.cake_taxonomy.terms'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Vocabularies') ? [] : ['className' => 'CakeTaxonomy\Model\Table\VocabulariesTable'];
        $this->Vocabularies = TableRegistry::get('Vocabularies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Vocabularies);

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
