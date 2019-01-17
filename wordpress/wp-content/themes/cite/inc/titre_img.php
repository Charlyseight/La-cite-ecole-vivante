<div class="partner">
        <h2 class="partner__title"><?= get_sub_field('titre'); ?></h2>
        <div class="partner__content">
            <?php if (have_rows('images')): while (have_rows('images')): the_row(); ?>
            <div>
                <?php if(have_rows('image')): while (have_rows('image')): the_row(); ?>
                    <?php $img = get_sub_field('img'); ?>
                    <?= wp_get_attachment_image($img['ID'], 'cite-big',"", ["class" => "partner__img"]); ?>
                <?php endwhile; endif; ?>
                <div class="partner__info">
                    <p class="partner__name"><?= get_sub_field('name'); ?></p>
                    <a href="<?= get_sub_field('link'); ?>" class="button partner__link">Aller sur le site
                        <span class="hidden">
                            "<?= get_sub_field('name'); ?>"
                        </span>
                    </a>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
</div>
