<div class="objectifs">
    <?php if(have_rows('encart')): while(have_rows('encart')): the_row(); ?>
        <div class="objectifs__text">
            <span class="objectifs__number"><?= get_sub_field('nbr'); ?></span>
            <p class="objectifs__para">
                <?= get_sub_field('text'); ?>
            </p>
        </div>
    <?php endwhile; endif; ?>
</div>