
    <h2 class="main__title projet__title">
        <?/*= get_sub_field('titre'); */?>
        <?= get_post_meta( 10, 'page_0_titre', true) ;?>
    </h2>
    <?php if(have_rows('image')): while (have_rows('image')): the_row(); ?>
        <?php $img = get_sub_field('img'); ?>
        <?= wp_get_attachment_image($img['ID'], 'cite-big',"", ["class" => "projet__img"]); ?>
    <?php endwhile; endif; ?>
    <p class="projet__text">
        <?/*= get_sub_field('text'); */?>
        <?= get_post_meta( 10, 'page_0_text', true) ;?>
    </p>
    <?php if(have_rows('para')): while(have_rows('para')): the_row(); ?>
        <p class="projet__text">
            <?= get_sub_field('texts'); ?>
        </p>
    <?php endwhile; endif; ?>
    <div class="projet__img--duo">
        <?php if(have_rows('images')): while (have_rows('images')): the_row(); ?>
            <?php if(have_rows('image')): while (have_rows('image')): the_row(); ?>
                <?php $toto = get_sub_field('img'); ?>
                <?= wp_get_attachment_image($toto['ID'], 'cite-big', "", ["class" => "projectDuoSingle"]); ?>
            <?php endwhile; endif; ?>
        <?php endwhile; endif; ?>
    </div>
    <?php if(have_rows('para_2')): while(have_rows('para_2')): the_row(); ?>
        <p class="projet__text">
            <?= get_sub_field('texts'); ?>
        </p>
    <?php endwhile; endif; ?>
