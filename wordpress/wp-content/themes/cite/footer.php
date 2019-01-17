    <footer class="footer">
        <!--<img src="<?/*= assets("assets/image/logofili.png"); */?>" alt="Logo de l'école secondaire 'La cité, école vivante'" class="footer__logo">-->
        <h2 class="hidden">
            Navigation secondaire
        </h2>
        <div class="footer_coordonnes">
            <address class="footer__address"><?= get_field('adresse'); ?></address>
            <?php $lien=get_field('lien'); ?>
            <a href="<?= $lien['link']; ?>" class="footer__link"><?= $lien['label']; ?></a>
            <a href="mailto:<?= get_field('lien_2'); ?>" class="footer__link"><?= get_field('lien_2'); ?></a>
            <a href="tel:<?= get_field('lien_3'); ?>" class="footer__link"><?= get_field('lien_3'); ?></a>
        </div>
        <div itemscope itemtype="http://schema.org/Organization">
            <meta itemprop="name" content="La cité école vivante">
            <meta itemprop="address" content="<?= get_field('adresse'); ?>">
            <meta itemprop="logo" content="<?= assets("assets/image/logo.png"); ?>">
            <meta itemprop="email" content="<?= get_field('lien_2'); ?>">
            <meta itemprop="foundingLocation" content="Liège, Belgique">
            <meta itemprop="telephone" content="<?= get_field('lien_3'); ?>">
        </div>
    </footer>
</body>
</html>
