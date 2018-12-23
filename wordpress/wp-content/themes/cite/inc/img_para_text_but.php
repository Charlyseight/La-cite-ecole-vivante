     <div class="action">
        <h2 class="hidden">
            Action collective
        </h2>
        <?php if(have_rows('image')): while (have_rows('image')): the_row(); ?>
        <?php $img=get_sub_field('img'); ?>
        <?= wp_get_attachment_image($img['ID'], 'cite-big'); ?>
        <?php endwhile; endif; ?>
        <!--<img src="<?/*= $img['img']; */?>" alt="<?/*= $img['alt']; */?>" class="action__img">-->
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

