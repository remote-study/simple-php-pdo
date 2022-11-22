<?php

if (!defined('_ROOT_DIR_')) {
    define('_ROOT_DIR_', realpath(dirname(__FILE__) . '/..'));
}

require_once _ROOT_DIR_ . '/config/defines.inc.php';
require_once  _ROOT_DIR_ . '/db/PDODb.php';

if (file_exists(_ROOT_DIR_ . '/config/settings.inc.php')) {
    require_once _ROOT_DIR_ . '/config/settings.inc.php';
} else {
    exit('./config/settings.config.inc.php file does not exists.');
}

class DB
{
    private static $instance;

    public $pdo;

    public function __construct()
    {
        $this->pdo = new PDODb('mysql', _DB_SERVER_, _DB_USER_, _DB_PASSWD_, _DB_NAME_, _DB_PORT_);
        self::$instance = $this;
    }

    public static function getInstance()
    {
        if (self::$instance) {
            return self::$instance;
        }

        return new static();
    }
}
