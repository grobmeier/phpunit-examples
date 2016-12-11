<?php
namespace Grobmeier\PHPUnit;

class SimpleService
{
    /** @var Simple $simple */
    private $simple;

    public function __construct(Simple $simple)
    {
        $this->simple = $simple;
    }

    public function dividingService($arg)
    {
        return $this->simple->divide($arg);
    }
}
