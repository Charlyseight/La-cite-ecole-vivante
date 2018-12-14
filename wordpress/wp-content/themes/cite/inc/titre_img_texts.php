<?php if(have_rows('encart')): while (have_rows("encart")): the_row(); ?>
    <h2 class="main__title projet__title">
        <?= get_sub_field('titre'); ?>
    </h2>
    <p class="projet__text">
        <?= get_sub_field('text'); ?>
    </p>
    <?php $img = get_sub_field('image'); ?>
    <img src="<?= $img["img"]; ?>" alt="<?= $img["alt"]; ?>" class="projet__img">
    <?php if(have_rows('para')): while(have_rows('para')): the_row(); ?>
        <p class="projet__text">
            <?= get_sub_field('texts'); ?>
        </p>
    <?php endwhile; endif; ?>
    <div class="projet__img--duo">
        <?php if(have_rows('images')): while (have_rows('images')): the_row(); ?>
            <?php $toto=get_sub_field('image'); ?>
            <img src="<?= $toto['img']; ?>" alt="<?= $toto['alt']; ?>">
        <?php endwhile; endif; ?>
    </div>
    <?php if(have_rows('para_2')): while(have_rows('para_2')): the_row(); ?>
        <p class="projet__text">
            <?= get_sub_field('texts'); ?>
        </p>
    <?php endwhile; endif; ?>
<?php endwhile; endif; ?>