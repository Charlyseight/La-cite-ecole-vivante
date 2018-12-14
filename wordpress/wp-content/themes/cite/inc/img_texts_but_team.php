<div class="teamEncart__accueil">
    <?php if(have_rows('encart')): while(have_rows('encart')): the_row(); ?>
        <?php $img= get_sub_field('image'); ?>
        <img src="<?= $img["img"]; ?>" alt="<?= $img["alt"]; ?>" width="1300" height="" class="teamEncart__accueil__img">
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
    <?php endwhile; endif; ?>
</div>