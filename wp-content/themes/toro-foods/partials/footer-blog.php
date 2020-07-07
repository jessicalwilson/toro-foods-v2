<div class="footer__blog">
    <h1 class="footer__heading">From The Blog</h1>

    <?php $query = new WP_Query(array(
        'posts_per_page' => 2,
        'post_status' => 'publish',
    )); ?>

    <?php if ($query->have_posts()) : ?>

        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="blog">
                <a class="blog__link" href="<?php echo the_permalink() ;?>">
                    <h2 class="blog__title"><?php the_title(); ?></h2>
                    <div class="blog__excerpt"><?php the_excerpt(); ?></div>
                </a>
            </div>

        <?php endwhile; ?>

    <?php else : ?>
        <?php echo ('Sorry, no posts were found.'); ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</div>