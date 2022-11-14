<?php
// Paramètres de connexion à la base de données (à adapter en fonction de votre environnement);

define('HOST', 'localhost');
define('USER', 'root');
define('DBNAME', 'links_manager_dev');
define('PASSWORD', ''); // windows (Mamp le mot de passe c'est 'root')

/**
 * Fonction de connexion à la base de données
 *
 * @return \PDO
 */