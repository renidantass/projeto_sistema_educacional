<?php

header('Content-Type: text/html; charset=utf-8');

class Connection {
    protected static $instance;
    
    public static function instance () {
        if (!self::$instance) {
            self::$instance = new \PDO("mysql:dbname=aprendendo;host=localhost;charset=utf8", "root", "");
        }
        
        return self::$instance;
    }
}