<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class connection{
    private $servername;
    private $password;
    private $username;
    private $dbname;
    private $conn;
    function __construct($params = array()) {
        $this->servername = "localhost";
        $this->dbname = "msq";
        $this->password = "";
        $this->username = "root";
    }
    public function connect() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
         mysqli_set_charset($this->conn, "utf8");
        if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $this->conn;
    }
}

?> 