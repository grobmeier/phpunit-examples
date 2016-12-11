<?php
namespace Grobmeier\PHPUnit;

class AssertionsDemo
{
	public function getNumber()
	{
		return 5;
	}

	public function getNull()
	{
		return null;
	}

	public function getTrue()
	{
		return true;
	}

	public function getFruits()
	{
		return [
			'peach' => 'sweet',
			'melon' => 'watery',
			'apple' => 'sour',
			'banana' => 'amazing'
		];
	}

	public function getJsonFruits() {
		return json_encode($this->getFruits());
	}
}
