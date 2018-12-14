<?php if(have_rows('encart')): while(have_rows('encart')): the_row(); ?>
    <div class="action">
        <h2 class="hidden">
            Action collective
        </h2>
        <?php $img=get_sub_field('image'); ?>
        <img src="<?= $img['img']; ?>" alt="<?= $img['alt']; ?>" class="action__img">
        <div class="action__text">
            <?php if(have_rows('para')): while(have_rows('para')): the_row(); ?>
                <p class="action__para">
                <?= get_sub_field('text'); ?>
                </p>
            <?php endwhile; endif; ?>
        </div>
    </div>
    <div class="contactEncart__vivant">
        <p class="contactEncart__vivant__para">
         <?= get_sub_field('text'); ?>
        </p>
        <?php $but=get_sub_field('button'); ?>
        <a href="<?= $but['url']; ?>" title="<?= $but["title"]; ?>" class="button contactEncart__vivant__link"><?= $but['label']; ?></a>
    </div>
<?php endwhile; endif; ?>
