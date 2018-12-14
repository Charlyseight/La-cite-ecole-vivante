    <footer class="footer">
        <img src="<?= assets("assets/image/logofili.png"); ?>" alt="Logo de l'école secondaire 'La cité, école vivante'" class="footer__logo">
        <h2 class="hidden">
            Navigation secondaire
        </h2>
        <nav class="navSecond">
            <ul class="navSecond__list">
                <?php if(have_rows('nav')): while(have_rows('nav')): the_row(); ?>
                <li class="navSecond__item">
                    <h3 class="navSecond__title">
                        <?= get_sub_field('title'); ?>
                    </h3>
                    <?php if(have_rows('lien')): while(have_rows('lien')): the_row(); ?>
                        <a href="" class="navSecond__link">
                            <?= get_sub_field('link'); ?>
                        </a>
                    <?php endwhile;  endif; ?>
                </li>
                <?php endwhile;  endif; ?>
            </ul>
            <div class="footer_coordonnes">
                <address class="footer__address"><?= get_field('adresse'); ?></address>
                <a href="contact.html" class="footer__link"><?= get_field('lien'); ?></a>
                <a href="mailto:<?= get_field('lien_2'); ?>" class="footer__link"><?= get_field('lien_2'); ?></a>
                <a href="tel:0479294312" class="footer__link"><?= get_field('lien_3'); ?></a>
            </div>
            <div itemscope itemtype="http://schema.org/Organization">
                <meta itemprop="name" content="La cité école vivante">
                <meta itemprop="address" content="<?= get_field('adresse'); ?>">
                <meta itemprop="logo" content="<?= assets("assets/image/logo.png"); ?>">
                <meta itemprop="email" content="<?= get_field('lien_2'); ?>">
                <meta itemprop="foundingLocation" content="Liège, Belgique">
                <meta itemprop="telephone" content="<?= get_field('lien_3'); ?>">
            </div>
        </nav>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
