<?php
try {
    // Spécifiez les informations de votre base de données
    $host = "localhost"; // Nom de l'hôte (généralement localhost pour un serveur local)
    $dbname = "gestion_CF"; // Nom de la base de données
    $user = "root"; // Nom d'utilisateur de la base de données
    $password = ""; // Mot de passe de la base de données

    // Créez une nouvelle instance de PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);

    // Configurez PDO pour générer des exceptions en cas d'erreurs SQL
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vous êtes maintenant connecté à la base de données, vous pouvez commencer à effectuer des requêtes ici

    
    $query = "INSERT INTO Filiere (nomFiliere, coordonateur") VALUES ("Anglais", "Jack");
    $stmt = $pdo->query($query);

    // Fermez la connexion à la base de données lorsque vous avez terminé
    $pdo = null;
} catch (PDOException $e) {
    // En cas d'erreur de connexion, affichez un message d'erreur
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>