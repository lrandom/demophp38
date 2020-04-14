<?php
class DB
{
    const DB_NAME = 'demo_php38';
    const DB_HOST = 'localhost';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = 'koodinh';

    protected $db;
    public function __construct()
    {
        $this->db = new PDO(
            'mysql:host='
                . self::DB_HOST . ';dbname=' . self::DB_NAME,
            self::DB_USERNAME,
            self::DB_PASSWORD
        ) or die('Cannot connect to db');
        return $this->db;
    }

    function getPDO()
    {
        return $this->db;
    }

    function close()
    {
        $this->db = null;
    }
}