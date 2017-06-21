<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrdenhasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrdenhasTable Test Case
 */
class OrdenhasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrdenhasTable
     */
    public $Ordenhas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ordenhas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Ordenhas') ? [] : ['className' => 'App\Model\Table\OrdenhasTable'];
        $this->Ordenhas = TableRegistry::get('Ordenhas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ordenhas);

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
