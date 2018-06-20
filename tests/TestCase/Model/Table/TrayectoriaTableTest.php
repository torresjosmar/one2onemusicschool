<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrayectoriaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrayectoriaTable Test Case
 */
class TrayectoriaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TrayectoriaTable
     */
    public $Trayectoria;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.trayectoria'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Trayectoria') ? [] : ['className' => TrayectoriaTable::class];
        $this->Trayectoria = TableRegistry::get('Trayectoria', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Trayectoria);

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
