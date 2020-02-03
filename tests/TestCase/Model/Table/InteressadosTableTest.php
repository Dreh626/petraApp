<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InteressadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InteressadosTable Test Case
 */
class InteressadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InteressadosTable
     */
    protected $Interessados;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Interessados',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Interessados') ? [] : ['className' => InteressadosTable::class];
        $this->Interessados = TableRegistry::getTableLocator()->get('Interessados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Interessados);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
