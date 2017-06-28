<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BovinosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BovinosTable Test Case
 */
class BovinosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BovinosTable
     */
    public $Bovinos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bovinos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Bovinos') ? [] : ['className' => 'App\Model\Table\BovinosTable'];
        $this->Bovinos = TableRegistry::get('Bovinos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bovinos);

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
