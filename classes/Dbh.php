<?php

class Dbh {
    private $hostname = '127.0.0.1';
    private $username = 'root'; 
    private $password = '';
    private $dbname = 'zuriphp';
    private $port ='3307';
    

    protected function connect() {
        return mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname,  $this->port);
    }

}