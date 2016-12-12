<?php
namespace Grobmeier\PHPUnit\Database;

class AppTest extends \PHPUnit_Framework_TestCase
{
    public function testReadPersons()
    {
        $app = new App();
        $this->assertCount(2, $app->readPersons());
    }
}