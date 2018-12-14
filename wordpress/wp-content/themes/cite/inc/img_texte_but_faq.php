<?php if(have_rows('encart')): while (have_rows('encart')): the_row(); ?>
    <div class="contactEncart__faq">
        <?php $img=get_sub_field('image'); ?>
        <img src="<?= $img['img']; ?>" alt="<?= $img['alt']; ?>">
        <p class="contactEncart__faq__para">
            <?= get_sub_field('text'); ?>
        </p>
        <?php $but=get_sub_field('button'); ?>
        <a href="<?= $but['url']; ?>" title="<?= $but['title']; ?>" class="button contactEncart__faq__link">
            <?= $but['label']; ?>
        </a>
    </div>
<?php endwhile; endif; ?>