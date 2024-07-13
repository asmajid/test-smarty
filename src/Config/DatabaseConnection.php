<?php

namespace Majid\TestSmartyPhp\Config;

class DatabaseConnection
{
    private static $instance = null;
    private const HOST = 'localhost';
    private const DB = 'patient_management_db';
    private const USER = 'root';
    private const PASSWORD = '';

    /**
     * Retourne l'instance de la connexion PDO.
     *
     * @return \PDO
     * @throws \PDOException Si la connexion échoue.
     */
    public static function getInstance(): \PDO
    {
        if (self::$instance === null) {
            try {
                self::$instance = new \PDO(
                    "mysql:host=" . self::HOST . ";port=3306;dbname=" . self::DB . ";charset=UTF8",
                    self::USER,
                    self::PASSWORD,
                    [
                        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                        \PDO::ATTR_PERSISTENT => true
                    ]
                );
            } catch (\PDOException $e) {
                throw new \PDOException("Database connection failed: " . $e->getMessage(), (int)$e->getCode());
            }
        }

        return self::$instance;
    }

    // Empêche l'instanciation directe de la classe
    private function __construct()
    {
    }

    // Empêche le clonage de l'instance
    private function __clone()
    {
    }
}
