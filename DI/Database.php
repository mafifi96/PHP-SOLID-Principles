<?php

namespace solid\DI;
use solid\DI\DatabaseInterface;

class Database{

    private DatabaseInterface $db;
    
    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    public function getConnection()
    {
        return $this->db->connect();
    }

}