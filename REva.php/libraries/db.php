<?php
require_once __DIR__ . '/../config/params.php';


function db_connect(): PDO
{
    try {
        /**
         * Data Source Name : chaine de connexion à la base de données
         * Elle permet de renseigner le domaine du serveur de la base de données, le nom de la base de données cible et l'encodage de données pendant leur transport
         * @var string
         */
        $dsn =  'mysql:host=' . HOST . ';dbname=' . DBNAME . ';charset=utf8';

        return new PDO($dsn, USER, PASSWORD, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    } catch (\PDOException $ex) {
        echo sprintf('La demande de connexion à la base de donnée a échouée avec le message %s', $ex->getMessage());
        exit(0);
    }
}

?>