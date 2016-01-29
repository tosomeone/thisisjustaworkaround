<?php
namespace Tdavis\PhantomMagick\Test;

use Exception;
use RuntimeException;
use InvalidArgumentException;
use Tdavis\PhantomMagick\Runner;

class RunnerTest extends \PHPUnit_Framework_TestCase
{
    protected $runner;

    public function setUp()
    {
        $this->runner = new Runner();
    }

    /**
     * Runner tests
     */
    public function testVerifyBinary()
    {
        $this->assertTrue(true);
    }

}
