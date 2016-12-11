<?php
namespace Grobmeier\PHPUnit;

class AssertionsDemoTest extends \PHPUnit_Framework_TestCase
{
	public function testAssertions()
	{
		$assertions = new AssertionsDemo();

        // Scalar assertions
		$this->assertEquals(5, $assertions->getNumber());
        $this->assertNull($assertions->getNull());
        $this->assertTrue($assertions->getTrue());

        // Array assertions
        $this->assertArrayHasKey('apple', $assertions->getFruits());
        $this->assertArraySubset( [
            'melon' => 'watery',
            'apple' => 'sour'
        ], $assertions->getFruits());
        $this->assertCount(4, $assertions->getFruits());

        // Other useful
        $this->assertJson('{"peach":"sweet","melon":"watery","apple":"sour","banana":"amazing"}', $assertions->getJsonFruits());

        $this->assertEquals( [
            'apple' => 'sour',
            'peach' => 'sweet',
            'melon' => 'watery',
            'banana' => 'amazing'
        ], $assertions->getFruits());
	}
}
