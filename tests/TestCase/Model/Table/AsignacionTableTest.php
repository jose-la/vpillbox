<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AsignacionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AsignacionTable Test Case
 */
class AsignacionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AsignacionTable
     */
    protected $Asignacion;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Asignacion',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Asignacion') ? [] : ['className' => AsignacionTable::class];
        $this->Asignacion = $this->getTableLocator()->get('Asignacion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Asignacion);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AsignacionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
