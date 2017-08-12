<?php


class HelloTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        codecept_debug('Hello, Im from debug mode');
        $this->assertTrue(true);
    }

    public function testFailedTest(){
        $this->assertFalse(false);
    }
}