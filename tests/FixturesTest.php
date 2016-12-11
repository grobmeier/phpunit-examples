<?php
namespace Grobmeier\PHPUnit;

class FixturesTest extends \PHPUnit_Framework_TestCase
{
    private $names;

    private $resource = false;

    public function setUp()
    {
        $this->names = [
            'Christian',
            'Nicole',
            'Ben'
        ];

        if (!$this->resource) {
            $this->resource = true;
            // Do not write output in test cases
            // print_r("Resource opened" . PHP_EOL);
        }
    }

    public function tearDown()
    {
        if ($this->resource) {
            $this->resource = false;
            // Do not write output in test cases
            // print_r("Resource closed" . PHP_EOL);
        }
    }

	public function testMethod1()
	{
        $this->assertCount(3, $this->names);
		$this->names[] = 'Surprise!';
        $this->assertCount(4, $this->names);
	}

    public function testMethod2()
    {
        $this->assertCount(3, $this->names);
        array_splice($this->names, 1, 1);
        $this->assertCount(2, $this->names);   
    }
}
