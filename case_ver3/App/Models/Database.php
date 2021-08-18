<?php

namespace App\Model;

class Database
{
    protected string $dsn;
    protected string $username;
    protected string $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=product_manager";
        $this->username = "root";
        $this->password = "aM@!8972tmt";
    }

    public function connect(): \PDO
    {
        try {
            return new \PDO($this->dsn, $this->username, $this->password);

        } catch (\PDOException $exception) {
        }
        echo $exception->getMessage();
        die();
    }
}