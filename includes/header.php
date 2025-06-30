<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keshti Gyllinger | Portfolio</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="dist/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Manrope:wght@200..800&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="./assets/img/favicon.png" type="image/png">
</head>
<body>
    <header class="site-header">
        <div class="site-header__container">
            <a href="index.php" class="site-header__logo"></a>

            <button id="menu-toggle" class="site-header__menu-toggle" aria-label="Toggle menu">
                <?php include "includes/icons/icon_menu.php"; ?>
            </button>

            <nav class="site-header__nav">
                <img src="./assets/img/plant.svg" alt="Plant Illustration" class="nav__plant">

                <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

                <ul class="nav__list">
                    <li class="nav__item <?= $currentPage == 'index.php' ? 'nav__item--active' : '' ?>"><a href="index.php" class="nav__link">Home</a></li>
                    <li class="nav__item <?= $currentPage == 'about.php' ? 'nav__item--active' : '' ?>"><a href="about.php" class="nav__link">About</a></li>
                    <li class="nav__item <?= $currentPage == 'projects.php' ? 'nav__item--active' : '' ?>"><a href="projects.php" class="nav__link">Projects</a></li>
                    <li class="nav__item <?= $currentPage == 'contact.php' ? 'nav__item--active' : '' ?>"><a href="contact.php" class="nav__link">Contact</a></li>
                </ul>

                <div class="theme-toggle" id="theme-toggle">
                    <div class="theme-toggle__background"></div>

                    <div id="toggle-dark" class="theme-toggle__icon-container">
                        <?php include "includes/icons/icon_dark.php"; ?>
                    </div>

                    <div id="toggle-light" class="theme-toggle__icon-container">
                        <?php include "includes/icons/icon_light.php"; ?>
                    </div>
                </div>
            </nav>
        </div>
    </header>
