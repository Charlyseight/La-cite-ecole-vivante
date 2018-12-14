<?php if(have_rows('encart')): while(have_rows('encart')): the_row(); ?>
    <div class="vivant">
        <h2 class="main__title vivant__title">
            <?= get_sub_field('titre'); ?>
        </h2>
        <p class="vivant__text">
            <?= get_sub_field('text'); ?>

        </p>
        <?php $img=get_sub_field('image'); ?>
        <img src="<?= $img["img"]; ?>" alt="<?= $img['alt']; ?>" class="vivant__img">
    </div>
<?php endwhile; endif; ?>