<div class="event">
        <h2 class="main__title event__title">
            <?= get_sub_field('titre'); ?>
        </h2>
        <div class="eventEncart__accueil">
            <?php if (have_rows('img_texts')): while (have_rows('img_texts')): the_row(); ?>
                <div class="eventEncart__accueil__content">
                    <?php if(have_rows('image')): while (have_rows('image')): the_row(); ?>
                        <?php $img = get_sub_field('img'); ?>
                        <?= wp_get_attachment_image($img['ID'], 'cite-big',"", ["class" => "eventEncart__accueil__img"]); ?>
                    <?php endwhile; endif; ?>
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
    </div>
