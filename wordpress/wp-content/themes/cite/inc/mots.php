<div class="mots">
    <h2 class="hidden">Les maître mots de notre école</h2>
    <?php if (have_rows('mot')): while (have_rows('mot')): the_row(); ?>
    <div class="mots__demo">
        <?php $img = get_sub_field('image'); ?>
        <img src="<?= $img['img']; ?>" alt="<?= $img['alt']; ?>" width="300" height="300" class="mots__img">
        <span class="mots-cle">
                <?= get_sub_field('nom'); ?>
            </span>
        <p class="mots__text">
            <?php the_sub_field('text'); ?>
        </p>
    </div>
    <?php endwhile; endif; ?>
</div>