<div class="partner">
    <?php if(have_rows('encart')): while (have_rows('encart')): the_row(); ?>
        <h2 class="main__title partner__title"><?= get_sub_field('titre'); ?></h2>
        <div class="partner__content">
            <?php if (have_rows('images')): while (have_rows('images')): the_row(); ?>
                <?php $img=get_sub_field('image'); ?>
                <img src="<?= $img["img"]; ?>" alt="<?= $img["alt"]; ?>" class="partner__img">
            <?php endwhile; endif; ?>
        </div>
    <?php endwhile; endif; ?>
</div>