<?php

define("DB_HOST", "mysql:host=localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "dbname=gestion_CF");
define("DIR_SEPARATOR", "\\");
define("BACKEND_PATH", __DIR__.DIR_SEPARATOR."backend".DIR_SEPARATOR);
define("APP_PATH", __DIR__.DIR_SEPARATOR);



// Informations de connexion à la base de données
$host = DB_HOST;
$username = DB_USER;
$password = DB_PASSWORD;
$database = DB_NAME;

try{
// Tentative de connexion à la base de données
$pdo = new PDO("$host; $database; charset=utf8","$username", "$password",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


}catch(Exception $e)
{
 // En cas d'erreur, on affiche un message et on arrête tout
     die('Erreur : '.$e->getMessage());
}




function check($data)
{
    if(!empty($data)){

        $data = trim($data);
        // Suppression des les antislashs pour éviter les attaques par injection SQL
        $data = addslashes($data);
        // Convertion  les caractères spéciaux en entités HTML pour prévenir les attaques XSS
        $data = htmlentities($data);
        
        
        return $data;
    }
    else {
        return false;
    }
}

function date_formattage($date){
    $date =  date_create($date);
    return date_format($date, 'Y/m/d');
}

?>