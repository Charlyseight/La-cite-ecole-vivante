<?php if(have_rows('encart')): while (have_rows('encart')): the_row(); ?>
    <div class="projetEncart__contact">
        <?php if (have_rows('images')): while(have_rows('images')): the_row(); ?>
            <?php $img=get_sub_field('image'); ?>
            <img src="<?= $img['img']; ?>" alt="<?= $img['alt']; ?>" class="projetEncart__contact__img">
        <?php endwhile; endif; ?>
        <p class="projetEncart__contact__para">
            <?= get_sub_field('text'); ?>
        </p>
        <?php $but=get_sub_field('bouton'); ?>
        <a href="<?= $but['url'];?>" title="<?= $but['title']; ?>" class="button projetEncart__contact__link"><?= $but['label']; ?></a>
    </div>
<?php endwhile; endif; ?>