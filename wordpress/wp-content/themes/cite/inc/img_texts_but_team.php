<div class="teamEncart__accueil">
        <?php if(have_rows('image')): while (have_rows('image')): the_row(); ?>
            <?php $img = get_sub_field('img'); ?>
            <?= wp_get_attachment_image($img['ID'], 'cite-big',"", ["class" => "teamEncart__accueil__img"]); ?>
        <?php endwhile; endif; ?>
        <div class="teamEncart__accueil__text">
            <?php if (have_rows('para')): while (have_rows('para')): the_row(); ?>
                <p class="teamEncart__accueil__para"><?= get_sub_field('texts'); ?>
                </p>
            <?php endwhile; endif; ?>
            <?php $but= get_sub_field('but'); ?>
            <a class="button teamEncart__accueil__link" href="<?= $but["url"]; ?>">
                <?= $but["title"]; ?>
            </a>
        </div>
</div>
