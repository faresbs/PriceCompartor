<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarefourTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarefourTable Test Case
 */
class CarefourTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CarefourTable
     */
    public $Carefour;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.carefour'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Carefour') ? [] : ['className' => 'App\Model\Table\CarefourTable'];
        $this->Carefour = TableRegistry::get('Carefour', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Carefour);

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
