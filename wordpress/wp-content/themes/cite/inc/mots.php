<div class="mots">
    <h2 class="hidden">Les maître mots de notre école</h2>
    <?php if (have_rows('mot')): while (have_rows('mot')): the_row(); ?>
    <div class="mots__demo">
        <?php if(have_rows('image')): while (have_rows('image')): the_row(); ?>
            <?php $img = get_sub_field('img'); ?>
            <?= wp_get_attachment_image($img['ID'], 'cite-big',"", ["class" => "mots__img"]); ?>
        <?php endwhile; endif; ?>
        <span class="mots-cle">
                <?= get_sub_field('nom'); ?>
            </span>
        <p class="mots__text">
            <?php the_sub_field('text'); ?>
        </p>
    </div>
    <?php endwhile; endif; ?>
</div>
