<?php
namespace Grobmeier\PHPUnit;

class Simple 
{
	private $number; 

	public function __construct($number)
	{
		$this->number = $number;
	}

	public function divide($divisor)
	{
		if (empty($divisor)) {
			throw new \Exception("Divisor must be a number");
		}

		return $this->number / $divisor;
	}
}
