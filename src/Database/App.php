<?php
namespace Grobmeier\PHPUnit\Database;

class App
{
    private $config = ["mysql:host=127.0.0.1:3306;dbname=phpunittest", "ubuntu", ""];

    /**
     * App constructor.
     * @param array $config
     */
    public function __construct(array $config = null)
    {
        if (!empty($dsn)) {
            $this->config = $config;
        }

        list($dsn, $user, $pass) = $this->config;
        \Phormium\DB::configure([
            'databases' => [
                'phpunittest' => [
                    'dsn' => $dsn,
                    'username' => $user,
                    'password' => $pass
                ]
            ]
        ]);
    }

    public function readPersons()
    {
        return Person::objects()->fetch();
    }
}