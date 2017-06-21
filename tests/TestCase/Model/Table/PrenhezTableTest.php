<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PrenhezTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PrenhezTable Test Case
 */
class PrenhezTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PrenhezTable
     */
    public $Prenhez;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.prenhez',
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
        $config = TableRegistry::exists('Prenhez') ? [] : ['className' => 'App\Model\Table\PrenhezTable'];
        $this->Prenhez = TableRegistry::get('Prenhez', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Prenhez);

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
