<div class="pop">
    <h3 class="main__title pop__title">
        Le pouvoir organitionnel puriel
    </h3>
    <div class="pop__people">
        <?php
        $args = array( 'post_type' => 'teampops' );
        $loop = new WP_Query( $args );
        ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="pop__div">
                <a href="<?php the_permalink(); ?>" class="pop__link">
                    <?php $img=get_field('image_team'); ?>
                    <img src="<?= $img["img"]; ?>" alt="<?= $img["alt"]; ?>" class="pop__img">
                    <p class="pop__para">
                        <?= get_field('nom'); ?>
                    </p>
                </a>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata();?>
    </div>
</div>