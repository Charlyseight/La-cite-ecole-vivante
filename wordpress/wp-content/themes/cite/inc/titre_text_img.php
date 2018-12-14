<?php if(have_rows('encart')): while (have_rows('encart')): the_row(); ?>
    <div class="recruteEncart__sommes">
        <h2 class="recruteEncart__sommes__title"><?= get_sub_field('titre'); ?></h2>
        <p class="recruteEncart__sommes__para">
            <?= get_sub_field('text'); ?>
        </p>
        <?php $img=get_sub_field('image'); ?>
        <img src="<?= $img["img"]; ?>" alt="<?= $img['alt']; ?>" class="recruteEncart__sommes__img">
        <?php $but=get_sub_field('button'); ?>
        <a href="<?= $but["url"]; ?>" class="button recruteEncart__sommes__link"><?= $but["title"]; ?></a>
    </div>
<?php endwhile; endif; ?>