<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= dw_asset('css/reset.css'); ?>">
    <link rel="stylesheet" href="<?= dw_asset('css/style.css'); ?>">
    <title><?= get_the_title() ?></title>
</head>
<body id="contact-body">
<h1 class="hidden-title"><?= get_the_title() ?></h1>
<header class="header">
    <div class="header__icon">
        <a href="http://sef.test">
            <img src="http://sef.test/wp-content/uploads/2024/06/sef-logo-normal.svg"
                 alt="Logo de l'asbl SEF" height="50" width="50">
        </a>
    </div>
    <nav class="mobile-menu">
        <h2 class="hidden-title">navigation principale</h2>
        <input type="checkbox" id="checkbox" class="mobile-menu__checkbox">
        <label for="checkbox" class="mobile-menu__btn">
            <span class="mobile-menu__icon"></span>
        </label>
        <div class="mobile-menu__container">
            <ul class="mobile-menu__list">
                <?php foreach (dw_get_navigation_links('main') as $link): ?>
                    <li class="mobile-menu__item">
                        <a class="mobile-menu__link" href="<?= $link->url ?>"
                           title="Aller vers la page <?= $link->label ?>"><?= $link->label ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>
</header>


