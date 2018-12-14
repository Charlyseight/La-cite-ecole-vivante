<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- <title>Accueil - La cité école vivante</title>-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page d'accueil du site de l'Ecole 'La cité, école vivante'">
    <meta name="keywords" content="HTML,CSS,PHP,école,liège,vivante,cité,secondaire">
    <link rel="stylesheet" href="<?= assets("assets/css/styles.css"); ?>">
    <?php wp_head(); ?>
</head>
<body>
<header>
    <h1 class="hidden">
        L'équipe de la cité école vivante
    </h1>
    <a href="index.php">
        <img src="<?= assets("assets/image/logo.png"); ?>" alt="Aller sur la page d'accueil" class="header__logo">
    </a>
    <?php
    get_template_part('nav');
    ?>
    <div class="filariane filariane__projet" style="<?= get_field('select'); ?>">
        <p class="cat"><?= get_field('text'); ?></p>
        <p class="page"><?= get_field('text_2'); ?></p>
    </div>
</header>
<div class="single_team">
    <?php $img = get_field('image_team'); ?>
    <img src="<?= $img["img"]; ?>" alt="<?= $img["alt"]; ?>" class="single_img">
    <p class="single_nom">
        <?= get_field('nom'); ?>
    </p>
    <p class="single_text">
        <?= get_field('text'); ?>
    </p>
</div>
<br class="clear">
<?php get_footer(); ?>






