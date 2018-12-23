<div class="direction">
    <h3 class="main__title dir__title">
        La direction
    </h3>
    <div class="pop__people">
        <?php
        $args = array( 'post_type' => 'teamdir' );
        $loop = new WP_Query( $args );
        ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="pop__div">
                <a href="<?php the_permalink(); ?>" class="pop__link">
                    <?php if(have_rows('image_team')): while (have_rows('image_team')): the_row(); ?>
                        <?php $img = get_sub_field('img'); ?>
                        <?= wp_get_attachment_image($img['ID'], 'cite-big',"", ["class" => "pop__img"]); ?>
                    <?php endwhile; endif; ?>
                    <p class="pop__para">
                        <?= get_field('nom'); ?>
                    </p>
                </a>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata();?>
    </div>
</div>
