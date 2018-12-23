
    <div class="projetEncart__contact">
        <?php if (have_rows('images')): while(have_rows('images')): the_row(); ?>
            <?php if(have_rows('image')): while (have_rows('image')): the_row(); ?>
                <?php $img = get_sub_field('img'); ?>
                <?= wp_get_attachment_image($img['ID'], 'cite-big',"", ["class" => "projetEncart__contact__img"]); ?>
            <?php endwhile; endif; ?>
        <?php endwhile; endif; ?>
        <p class="projetEncart__contact__para">
            <?= get_post_meta( 17, 'page_1_encart_0_text', true); ?>
            <?/*= get_sub_field('text'); */?>
        </p>
        <?php $but=get_sub_field('bouton'); ?>
        <a href="<?= $but['url'];?>" title="<?= $but['title']; ?>" class="button projetEncart__contact__link"><?= $but['label']; ?></a>
    </div>
