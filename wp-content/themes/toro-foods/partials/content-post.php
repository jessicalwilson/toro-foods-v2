
<article id="post-<?php the_ID(); ?>" class="article">

    <header class="article__header">
        <?php if ( has_post_thumbnail() ): ?>
            <p class="article__image"><?php the_post_thumbnail(); ?></p>
        <?php endif; ?>
        <div class="article__meta">
            <p class="article__date">
                <time><?php the_date(); ?></time>
            </p>
            <h1 class="article__heading"><?php the_title(); ?></h1>
        </div>
    </header>

    <div class="article__content">
        <?php
        the_content();
        ?>
    </div><!-- .entry-content -->

    <footer class="article__footer"> 
        <p class="author__avatar"><?php echo get_avatar( get_the_author_meta('ID') ); ?></p>
        <p class="author__attribution">
            <span class="author__name">Written by <br><?php the_author(); ?></span>
        </p>
    </footer>

</article><!-- #post-${ID} -->