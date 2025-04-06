<?php

require __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

$apiKey = '9e40f08f3172eb70145355af4f549cdd'; // Ma clé api généré par OpenWeather
$client = new Client();

function getWeatherData($client, $city, $apiKey) { // Fonction pour obtenir les infos météo d'une ville
    try {
        $response = $client->request('GET', "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey&units=metric&lang=fr"); // Appelle de l'api avec la méthode GET
        $weatherJson = $response->getBody()->getContents(); // Récupére un tableau Json
        return json_decode($weatherJson, true); // Renvoie les informations de la ville demandée en un array Php
    }
    catch (RequestException) {
        return null;
    }
}

// Paramètre par défaut
$city = 'Paris';
$weatherData = null;

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['city'])) { // Lorsqu'on clique sur le bouton Rechercher
    $city = ($_POST['city']); // On récupère la ville écrite dans la zone de texte
    $weatherData = getWeatherData($client, $city, $apiKey); // On appelle la fonction de l'api pour avoir les infos météo
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Météo</title>
</head>
<body>
    <h1>Météo pour <?php echo ($city); ?></h1>
    
    <form method="POST"> <!-- Formulaire -->
        <label for="city">Entrez une ville :</label>
        <input type="text" id="city" name="city" value="<?php echo ($city); ?>" required> <!-- Ville dont on va récupérer les données météos -->
        <button type="submit">Rechercher</button>
    </form>
    
    <?php if ($weatherData): ?>
        <div id="weather-result"> <!-- Affichage des données météos -->
            <p><strong>Ville :</strong> <?php echo ($city); ?></p>
            <p><strong>Température :</strong> <?php echo $weatherData['main']['temp']; ?>°C</p>
            <p><strong>Ciel :</strong> <?php echo ($weatherData['weather'][0]['description']); ?></p>
        </div>
    <?php elseif ($_SERVER["REQUEST_METHOD"] == "POST"): ?> <!-- Gérer les erreurs serveurs -->
        <p>Impossible de récupérer les données météo.</p>
    <?php endif; ?>
</body>
</html>
