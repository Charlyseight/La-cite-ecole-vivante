<?php if(have_rows('encart')): while (have_rows('encart')): the_row(); ?>
    <h2 class="main__title sommes__title">
        <?= get_sub_field('titre'); ?>
    </h2>
    <?php if (have_rows('para')): while (have_rows('para')): the_row(); ?>
        <p class="sommes__text">
            <?= get_sub_field('text'); ?>
        </p>
    <?php endwhile; endif; ?>
<?php endwhile; endif; ?>

<?php get_template_part('teacher'); ?>
<?php get_template_part('pop'); ?>
<?php get_template_part('dir'); ?>


