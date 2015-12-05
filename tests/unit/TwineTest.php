<?php

use RadHam\Twine;

class TwineTest extends \Codeception\TestCase\Test
{
    use Codeception\Specify;

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
    public function testTwine()
    {
        $twine = new Twine('Test Me');
        verify_that($twine->remove('Me')->trim() == 'Test');
    }
}
