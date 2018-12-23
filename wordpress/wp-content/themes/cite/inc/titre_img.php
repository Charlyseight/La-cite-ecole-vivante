<div class="partner">
        <h2 class="main__title partner__title"><?= get_sub_field('titre'); ?></h2>
        <div class="partner__content">
            <?php if (have_rows('images')): while (have_rows('images')): the_row(); ?>
                <?php if(have_rows('image')): while (have_rows('image')): the_row(); ?>
                    <?php $img = get_sub_field('img'); ?>
                    <?= wp_get_attachment_image($img['ID'], 'cite-big',"", ["class" => "partner__img"]); ?>
                <?php endwhile; endif; ?>
            <?php endwhile; endif; ?>
        </div>
</div>
