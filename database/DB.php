<?php

class DB
{
    public $conn;

    function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=" . HOSTNAME . ";dbname=" . DBNAME . "", USERNAME, PASSWORD);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    function getData($sql)
    {
        $result =  $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_CLASS);
    }

    function getDataOne($sql)
    {
        $result =  $this->conn->query($sql);
        return $result->fetchColumn(PDO::FETCH_CLASS);
    }

    function setData($sql)
    {
        if ($this->conn->query($sql)) {
            return true;
        } else {
            return false;
        }
    }
}
