<?php

namespace Portfolio\Config;

use \PDO;

class Database {

    public $conn;

    public function __construct() {
        try {
            $dsn = 'mysql:host=' . $_ENV['DBHOST'] . ';dbname=' . $_ENV['DBNAME'];
            $this->conn = new PDO($dsn, $_ENV['DBUSER'], $_ENV['DBPASS']);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function DB_Close() {
        $this->conn = null;
    }

    public function DB_Query($sql) {
        try {
            $statement = $this->conn->prepare($sql);
            $statement->execute();
            return $result = $statement->fetchALL(PDO::FETCH_ASSOC);;
        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
            return false;
        }
    }

    public function DB_PrePared_Query($sql, $params = array()) {
        try {
            $statement = $this->conn->prepare($sql);
            $statement->execute($params);
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
            return false;
        }
    }
}

// EOF