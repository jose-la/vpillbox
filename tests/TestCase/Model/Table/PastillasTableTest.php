<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PastillasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PastillasTable Test Case
 */
class PastillasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PastillasTable
     */
    protected $Pastillas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Pastillas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pastillas') ? [] : ['className' => PastillasTable::class];
        $this->Pastillas = $this->getTableLocator()->get('Pastillas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Pastillas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PastillasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
