
    <h2 class="main__title faq__title">
        <?= get_sub_field('titre'); ?>
    </h2>
    <div class="faq">
        <?php if(have_rows('para')): while(have_rows('para')): the_row('para'); ?>
            <span class="faq__question--bold"><?= get_sub_field('text'); ?></span>
            <p class="faq__para">
                <?= get_sub_field('text_2'); ?>
            </p>
        <?php endwhile; endif; ?>
    </div>
