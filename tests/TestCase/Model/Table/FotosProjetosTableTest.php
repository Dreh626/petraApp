<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FotosProjetosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FotosProjetosTable Test Case
 */
class FotosProjetosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FotosProjetosTable
     */
    protected $FotosProjetos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.FotosProjetos',
        'app.ProjetosRealizados',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FotosProjetos') ? [] : ['className' => FotosProjetosTable::class];
        $this->FotosProjetos = TableRegistry::getTableLocator()->get('FotosProjetos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->FotosProjetos);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
