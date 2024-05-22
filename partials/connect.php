<?php
class Database
{
    private $dbserver = "localhost";
    private $dbuser = "root";
    private $dbname = "advance_php_crud";
    protected $conn;

    //constructor
    public function _construct()
    {
        try {
            $dsn = "mysql:host={$this->dbserver}; dbname={$this->dbname}; charset=utf8";
            // $options = array(PDO::ATTR_PERSISTENT);
            $this->conn = new PDO($dsn, $this->dbuser);
        } catch (PDOException $e) {
            echo "Connection Error" . $e->getMessage();
        }
    }
}
