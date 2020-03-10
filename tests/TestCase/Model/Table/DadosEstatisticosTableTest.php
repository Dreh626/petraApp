<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DadosEstatisticosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DadosEstatisticosTable Test Case
 */
class DadosEstatisticosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DadosEstatisticosTable
     */
    protected $DadosEstatisticos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.DadosEstatisticos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DadosEstatisticos') ? [] : ['className' => DadosEstatisticosTable::class];
        $this->DadosEstatisticos = TableRegistry::getTableLocator()->get('DadosEstatisticos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->DadosEstatisticos);

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
