<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOL TCG Home</title>
    <meta name="description" content="Trading Cards Game on the theme of League of Legends. You can collect cards, open booster, trade cards and even more.">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
</head>

<body>
    <!-- Menu de navigation restant tout le temps en haute de la page qu'importe le défilement -->
    <nav class="nav">
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="Collection.php">Collection</a></li>
            <li><a href="Booster.php">Booster</a></li>
            <li><a href="Trading.php">Trading</a></li>
            <li><a href="Profil.php">Sign up</a></li>
            <li><a href="Profil.php">Log in</a></li>
            <li><a href="Profil.php">Profil</a></li>
        </ul>
    </nav>

    <!-- Haut de la page, bannière de présentation -->
    <header class="banner">
        <img src="images/League-of-Legends-Logo.png" alt="League of Legends">
        <h1>Trading Cards Game</h1>
        <div class="button">
            <a href="#functionalities" class="banner-button">
                <div>Get Started</div>
                <img src="images/Arrow.png" alt="go to">
            </a>
        </div>
    </header>

    <!-- Swiper présentant les différentes fonctionnalités avec une images et un titre -->
    <section class="functionalities" id="functionalities">
        <h2>Functionalities</h2>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/Collection.png" alt="Collection">
                    <div class="text-overlay">Collection saver</div>
                </div>
                <div class="swiper-slide"><img src="images/TradingCardsBooster.png" alt="Trading Cards Booster">
                    <div class="text-overlay">Open Booster</div>
                </div>
                <div class="swiper-slide"><img src="images/Sorting-and-Favorite.png" alt="Sorting and Favorite">
                    <div class="text-overlay">Sorting Favorite</div>
                </div>
                <div class="swiper-slide"><img src="images/Trading.png" alt="Trading">
                    <div class="text-overlay">Trading</div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Détails des fontionnalités -->
    <section>
        <h2>Details</h2>
        <div class="details">
            <div class="image"><img src="images/Collection.png" alt="Cards Collection"></div>
            <div class="container">
                <h3>Collection saver</h3>
                <p>You can save the progress of your collection in order to try to get all cards.</p>
                <a href="Collection.php">
                    <button class="details-button">
                        <div>Start your collection</div>
                        <img src="images/Arrow.png" alt="go to">
                    </button>
                </a>
            </div>
        </div>
        <div class="details">
            <div class="container">
                <h3>Open booster</h3>
                <p>Open a booster every 24 hours to try to get every cards in your collection.</p>
                <a href="Booster.php">
                    <button class="details-button">
                        <div>Start opening booster</div>
                        <img src="images/Arrow.png" alt="go to">
                    </button>
                </a>
            </div>
            <div class="image"><img src="images/TradingCardsBooster.png" alt="Trading Cards Booster"></div>
        </div>
        <div class="details">
            <div class="image"><img src="images/Sorting-and-Favorite.png" alt="Sorting and Favorite"></div>
            <div class="container">
                <h3>Sorting and Favorite</h3>
                <p>You can sort and put cards in your favorites in order to found faster the card that you search.</p>
                <a href="Collection.php">
                    <button class="details-button">
                        <div>Start your collection</div>
                        <img src="images/Arrow.png" alt="go to">
                    </button>
                </a>
            </div>
        </div>
        <div class="details">
            <div class="container">
                <h3>Trading</h3>
                <p>You can trade cards with others in order to get the few cards that your are missing.</p>
                <a href="Trading.php">
                    <button class="details-button">
                        <div>Start trading cards</div>
                        <img src="images/Arrow.png" alt="go to">
                    </button>
                </a>
            </div>
            <div class="image"><img src="images/Trading.png" alt="Trading"></div>
        </div>
    </section>

    <!-- Déposer un feedback pour améliorer le site web -->
    <section class="feedback">
        <h2>Feedback</h2>
        <p>Please leave a feedback on what you like and what can I improve. It's helping me a lot.</p>
        <button class="feedback-button">
            <div>Leave a feedback</div>
            <img src="images/Arrow.png" alt="go to">
        </button>
    </section>

    <footer>
        <p>About us | Terms & Privacy</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/Swiper.js" type="module"></script>
</body>

</html>