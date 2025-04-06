<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOL TCG Collection</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Menu de navigation restant tout le temps en haute de la page qu'importe le défilement -->
    <nav class="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="Collection.php" class="active">Collection</a></li>
            <li><a href="Booster.php">Booster</a></li>
            <li><a href="Trading.php">Trading</a></li>
            <li><a href="Profil.php">Sign up</a></li>
            <li><a href="Profil.php">Log in</a></li>
            <li><a href="Profil.php">Profil</a></li>
        </ul>
    </nav>

    <main>

        <!-- Haut de la page, bannière de présentation -->
        <header class="banner">
            <img src="images/League-of-Legends-Logo.png" alt="League of Legends">
            <h1>Trading Cards Game </h1>
            <h1>Collection</h1>
        </header>

        <!-- Bar de filtre pour les cartes -->
        <div class="filter-bar">
            <button class="filter-btn all-role tab-active">All Role</button>
            <button class="filter-btn tank">Tank</button>
            <button class="filter-btn fighter">Fighter</button>
            <button class="filter-btn assassin">Assassin</button>
            <button class="filter-btn mage">Mage</button>
            <button class="filter-btn marksman">Marksman</button>
            <button class="filter-btn support">Support</button>
            <button class="filter-btn favorite">Favorite</button>
            <input type="text" id="championSearch" placeholder="Search...">
        </div>

        <!-- Création de toutes les cartes à collectionner par l'api ddragon-->
        <div class="cards-container" id="cardsContainer">
            
        </div>

        <!-- Pop-up infos de champion -->
        <div id="championInfos" class="infos invisible">
            <div class="infos-content">
                <button class="close-btn" onclick="closeChampionInfos()">×</button>
                <img id="Splash" src="" alt="">
                <div class="infos-text">
                    <h2 id="Name"></h2>
                    <h3 id="Title"></h3>
                    <p id="Lore"></p>
                </div>
            </div>
        </div>

    </main>

    <footer>
        <p>About us | Terms & Privacy</p>
    </footer>

    <script src="js/ClassFilter.js"></script>
    <script src="js/CardCreation.js"></script>
    <script src="js/CardInfo.js"></script>
</body>

</html>