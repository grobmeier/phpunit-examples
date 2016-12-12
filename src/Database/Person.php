<?php
namespace Grobmeier\PHPUnit\Database;

class Person extends \Phormium\Model
{
    protected static $_meta = array(
        'database' => 'phpunittest',
        'table' => 'persons',
        'pk' => 'id'
    );

    public $id;
    public $nick;
    public $email;
}