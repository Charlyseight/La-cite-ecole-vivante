<?php if (have_rows('encart')): while (have_rows('encart')): the_row(); ?>
    <div class="encart<?=get_sub_field('select'); ?> ">
        <h2 class="hidden">Découvrir nos projets</h2>

        <?php $img = get_sub_field('image'); ?>
        <img src="<?= $img['img']; ?>" alt="<?= $img["alt"]; ?>" class="encartImg<?=get_sub_field('select'); ?>">
        <p class="encartText<?=get_sub_field('select'); ?>">
            <?php the_sub_field("text"); ?>
        </p>
        <?php $but=get_sub_field('but'); ?>
        <a class="button encartLink<?=get_sub_field('select'); ?>" href="<?= $but["url"]; ?>"><?= $but["title"]; ?></a>
    </div>
<?php endwhile; endif; ?>
