<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FormacionacademicaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FormacionacademicaTable Test Case
 */
class FormacionacademicaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FormacionacademicaTable
     */
    public $Formacionacademica;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.formacionacademica'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Formacionacademica') ? [] : ['className' => FormacionacademicaTable::class];
        $this->Formacionacademica = TableRegistry::get('Formacionacademica', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Formacionacademica);

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
