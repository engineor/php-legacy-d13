<?php

/**
 * Connexion à la base de données
 */

try {
    if (!isset($_ENV['DB_HOST']) || empty($_ENV['DB_HOST'])) {
        throw new Exception('DB host is not configured as an environment variable.');
    }
    if (!isset($_ENV['DB_USER']) || empty($_ENV['DB_USER'])) {
        throw new Exception('DB user is not configured as an environment variable.');
    }
    if (!isset($_ENV['DB_PASS']) || empty($_ENV['DB_PASS'])) {
        throw new Exception('DB pass is not configured as an environment variable.');
    }
    if (!isset($_ENV['DB_NAME']) || empty($_ENV['DB_NAME'])) {
        throw new Exception('DB name is not configured as an environment variable.');
    }

    $host     = $_ENV['DB_HOST'];
    $user     = $_ENV['DB_USER'];
    $password = $_ENV['DB_PASS'];
    $dbname   = $_ENV['DB_NAME'];

    $oConnexion = new PDO(
        'mysql:host=' . $host . ';dbname=' . $dbname,
        $user,
        $password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
    );
    $oConnexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
    die('Connection failed or database cannot be selected : ' . $e->getMessage());
}
