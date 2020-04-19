<?php
namespace Core;

use App\Config;

use Exception;
use PDO;
use Pixie\Connection;

class QueryBuilder {

    public function __construct() {
      
        $dotenv = new \Symfony\Component\Dotenv\Dotenv;
        $dotenv->loadEnv(dirname(__DIR__).'/.env');

        $config = [
            'driver'    => $_ENV['DB_DRIVER'], 
            'host'      => $_ENV['DB_HOST'],
            'database'  => $_ENV['DB_NAME'],
            'username'  => $_ENV['DB_USER'],
            'password'  => $_ENV['DB_PASS'],
            'charset'   => $_ENV['DB_CHARSET'], 
            'collation' => $_ENV['DB_COLLATION'], 
            'options'   => [
                PDO::ATTR_TIMEOUT => 5,
                PDO::ATTR_EMULATE_PREPARES => false,
            ],
        ];

        try {
          new Connection('mysql', $config, 'QueryBuilder');
        } catch (PDOException $e) {
          echo "Database Error: The user could not be added.<br>".$e->getMessage();
        } catch (Exception $e) {
          echo "General Error: The user could not be added.<br>".$e->getMessage();
        }
    }
}