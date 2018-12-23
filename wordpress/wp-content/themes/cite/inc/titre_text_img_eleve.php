
    <div class="vivant">
        <h2 class="main__title vivant__title">
            <?= get_sub_field('titre'); ?>
        </h2>
        <p class="vivant__text">
            <?= get_sub_field('text'); ?>

        </p>
        <?php if(have_rows('image')): while (have_rows('image')): the_row(); ?>
            <?php $img = get_sub_field('img'); ?>
            <?= wp_get_attachment_image($img['ID'], 'cite-big',"", ["class" => "vivant__img"]); ?>
        <?php endwhile; endif; ?>
    </div>

