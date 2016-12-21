<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MonoprixTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MonoprixTable Test Case
 */
class MonoprixTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MonoprixTable
     */
    public $Monoprix;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.monoprix'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Monoprix') ? [] : ['className' => 'App\Model\Table\MonoprixTable'];
        $this->Monoprix = TableRegistry::get('Monoprix', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Monoprix);

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
