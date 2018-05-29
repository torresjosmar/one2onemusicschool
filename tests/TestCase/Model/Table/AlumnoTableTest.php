<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlumnoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlumnoTable Test Case
 */
class AlumnoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AlumnoTable
     */
    public $Alumno;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.alumno'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Alumno') ? [] : ['className' => AlumnoTable::class];
        $this->Alumno = TableRegistry::get('Alumno', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Alumno);

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
