<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AzizaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AzizaTable Test Case
 */
class AzizaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AzizaTable
     */
    public $Aziza;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.aziza'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Aziza') ? [] : ['className' => 'App\Model\Table\AzizaTable'];
        $this->Aziza = TableRegistry::get('Aziza', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Aziza);

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
