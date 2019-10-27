<?php
    
namespace config;

class DatabaseConnection {

    /**
     * @var host 
     */
    private $host;

    /**
     * @var username
     */
    private $username;

    /**
     * @var password
     */
    private $password;

    /**
     * @var database
     */
    private $database;

    /**
     * @var port
     */
    private $port = 3306;

    public function __construct()
    {
        
    }
}