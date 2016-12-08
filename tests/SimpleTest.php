<?php
namespace Grobmeier\PHPUnit;

class SimpleTest extends \PHPUnit_Framework_TestCase
{
	public function testDivide()
	{
		$simple = new Simple(10);
		$result = $simple->divide(2);

		$this->assertEquals(5, $result);
	}

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testDivideWithException()
    {
        $simple = new Simple(10);
        $simple->divide(0);
    }
}
