<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubcategoriaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubcategoriaTable Test Case
 */
class SubcategoriaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SubcategoriaTable
     */
    public $Subcategoria;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.subcategoria'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Subcategoria') ? [] : ['className' => SubcategoriaTable::class];
        $this->Subcategoria = TableRegistry::get('Subcategoria', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Subcategoria);

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
