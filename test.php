<?php
// api_key.php
$clientApiKey = $_GET['api_key']; // Assurez-vous d'utiliser une méthode sécurisée pour obtenir la clé API côté serveur

// Charger la clé API depuis le fichier Lua côté serveur
$serverApiKey = file_get_contents('lua/serveur/api_key.lua');

if ($clientApiKey === $serverApiKey) {
    // Créer le fichier PZfile.lua dans le répertoire zomboid/lua
    $filePath = '../../lua/PZfile.lua';
    $fileContent = "-- Contenu de votre fichier PZfile.lua\n";
    file_put_contents($filePath, $fileContent);

    echo "Clé API valide. Fichier PZfile.lua créé.";
} else {
    echo "Clé API invalide. Accès refusé.";
}
?>
