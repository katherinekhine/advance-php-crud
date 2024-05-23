<?php
class Database
{
    private $dbserver = "localhost";
    private $dbuser = "root";
    private $dbname = "advance_php_crud";
    protected $conn;

    // Constructor
    public function __construct()
    {
        try {
            $dsn = "mysql:host={$this->dbserver};dbname={$this->dbname};charset=utf8";
            $this->conn = new PDO($dsn, $this->dbuser);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
            exit; // Exit the script if connection fails
        }
    }
}
