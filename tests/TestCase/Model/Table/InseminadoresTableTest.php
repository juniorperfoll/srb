<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InseminadoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InseminadoresTable Test Case
 */
class InseminadoresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InseminadoresTable
     */
    public $Inseminadores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.inseminadores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Inseminadores') ? [] : ['className' => 'App\Model\Table\InseminadoresTable'];
        $this->Inseminadores = TableRegistry::get('Inseminadores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Inseminadores);

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
