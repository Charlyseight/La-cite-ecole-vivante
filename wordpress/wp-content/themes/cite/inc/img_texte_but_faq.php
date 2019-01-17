
    <div class="contactEncart__faq">
        <?php if(have_rows('image')): while (have_rows('image')): the_row(); ?>
            <?php $img = get_sub_field('img'); ?>
            <?= wp_get_attachment_image($img['ID'], 'cite-big', "", ["class" => "contactEncart__img"]); ?>
        <?php endwhile; endif; ?>
        <p class="contactEncart__faq__para">
            <?= get_sub_field('text'); ?>
        </p>
        <?php $but=get_sub_field('button'); ?>
        <a href="<?= $but['url']; ?>" title="<?= $but['title']; ?>" class="button contactEncart__faq__link">
            <?= $but['label']; ?>
        </a>
    </div>
