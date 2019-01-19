<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- <title>Accueil - La cité école vivante</title>-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page d'accueil du site de l'Ecole 'La cité, école vivante'">
    <meta name="keywords" content="HTML,CSS,PHP,école,liège,vivante,cité,secondaire">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <meta>
    <link rel="stylesheet" href="<?= assets("assets/css/styles.css"); ?>">
    <?php wp_head(); ?>
</head>
<body>
<header>
    <?php if (is_front_page()): ?>
        <h1 class="hidden">
            Toute l'actualité de La cité, école vivante
        </h1>
        <a href="index.php">
            <img src="<?= assets("assets/image/logo.png"); ?>" alt="Aller sur la page d'accueil" class="header__logo">
        </a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <div class="resMenu" id="myResMenu">
            <?php foreach (cite_get_nav_items('main-menu') as $item): ?>
                <a href="<?= $item->url; ?>" class="menu-item"><?= $item->label; ?></a>
                <?php foreach ($item->children as $child): ?>
                    <a href="<?= $child->url; ?>" id="sub-item"><?= $child->label; ?></a>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
        <?php get_template_part('nav'); ?>
        <?php if (have_rows('images')): while (have_rows('images')): the_row(); ?>
            <?php $img = get_sub_field('image'); ?>
            <div class="caroussel">
                <img src="<?= $img['img']; ?>" alt="<?= $img['alt']; ?>" class="caroussel__img">
            </div>
        <?php endwhile; endif; ?>
    <?php else: ?>
        <h1 class="hidden">
            Toute l'actualité de La cité, école vivante
        </h1>
        <a href="index.php">
            <img src="<?= assets("assets/image/logo.png"); ?>" alt="Aller sur la page d'accueil" class="header__logo">
        </a>
        <?php
        get_template_part('nav');
        ?>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <div class="resMenu" id="myResMenu">
            <?php foreach (cite_get_nav_items('main-menu') as $item): ?>
                <a href="<?= $item->url; ?>" class="menu-item"><?= $item->label; ?></a>
                <?php foreach ($item->children as $child): ?>
                    <a href="<?= $child->url; ?>" id="sub-item"><?= $child->label; ?></a>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
        <div class="filariane filariane__projet" style="<?= get_field('select'); ?>">
            <p class="cat"><?= get_field('text'); ?></p>
            <p class="page"><?= get_field('text_2'); ?></p>
        </div>
    <?php endif; ?>
</header>

