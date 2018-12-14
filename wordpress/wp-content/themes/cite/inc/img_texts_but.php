<div class="event">
    <?php if (have_rows('encart')): while (have_rows('encart')): the_row(); ?>
        <h2 class="main__title event__title">
            <?= get_sub_field('titre'); ?>
        </h2>
        <div class="eventEncart__accueil">
            <?php if (have_rows('img_texts')): while (have_rows('img_texts')): the_row(); ?>
                <div class="eventEncart__accueil__content">
                    <?php $img = get_sub_field('image'); ?>
                    <img src="<?= $img["img"]; ?>" alt="<?= $img["alt"]; ?>" class="eventEncart__accueil__img">
                    <span class="eventEncart__accueil__date"><time
                                datetime="2019-04-22"><?= get_sub_field("text"); ?></time></span>
                    <span class="eventEncart__accueil__endroit"><?= get_sub_field("text_2"); ?></span>
                    <?php if (have_rows('para')): while (have_rows('para')): the_row(); ?>
                        <p class="eventEncart__accueil__para"><?= get_sub_field('texts'); ?></p>
                    <?php endwhile; endif; ?>
                </div>
            <?php endwhile; endif; ?>
        </div>
        <div class="eventEncart__accueil__contact">
            <p class="eventEncart__accueil__para--contact">
                <?= get_sub_field("text_3"); ?>
            </p>
            <p class="eventEncart__accueil__para--contact">
                <?= get_sub_field("text_4"); ?>
            </p>
            <?php $but = get_sub_field('but'); ?>
            <a class="button eventEncart__accueil__link" href="<?= $but['url']; ?>">
                <?= $but["title"]; ?>
            </a>
        </div>
    <?php endwhile; endif; ?>
    </div>
