<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GaleriasImgsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GaleriasImgsTable Test Case
 */
class GaleriasImgsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GaleriasImgsTable
     */
    public $GaleriasImgs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.galerias_imgs',
        'app.galerias',
        'app.galerias_img',
        'app.noticias',
        'app.produtos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('GaleriasImgs') ? [] : ['className' => 'App\Model\Table\GaleriasImgsTable'];
        $this->GaleriasImgs = TableRegistry::get('GaleriasImgs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GaleriasImgs);

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
