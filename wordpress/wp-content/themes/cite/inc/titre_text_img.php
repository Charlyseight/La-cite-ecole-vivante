
    <div class="recruteEncart__sommes">
        <h2 class="recruteEncart__sommes__title">
            <?= get_post_meta( 13, 'page_1_encart_0_titre', true ); ?>
           <?/*= get_sub_field('titre'); */?>
        </h2>
        <p class="recruteEncart__sommes__para">
            <?= get_post_meta( 13, 'page_1_encart_0_text', true ); ?>
            <?/*= get_sub_field('text'); */?>
        </p>
        <?php if(have_rows('image')): while (have_rows('image')): the_row(); ?>
            <?php $img = get_sub_field('img'); ?>
            <?= wp_get_attachment_image($img['ID'], 'cite-big',"", ["class" => "recruteEncart__sommes__img"]); ?>
        <?php endwhile; endif; ?>
        <?php $but=get_sub_field('button'); ?>
        <a href="<?= $but["url"]; ?>" class="button recruteEncart__sommes__link"><?= $but["title"]; ?></a>
    </div>

