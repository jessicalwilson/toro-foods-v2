
<article id="post-<?php the_ID(); ?>" class="article">

<header class="article__header">
    <?php if ( has_post_thumbnail() ): ?>
        <p class="article__image"><?php the_post_thumbnail(); ?></p>
    <?php endif; ?>
    <div class="article__meta">
        <h1 class="article__heading"><?php the_title(); ?></h1>
    </div>
</header>

<div class="article__content">
    <?php
    the_content();
    ?>
</div><!-- .entry-content -->

</article><!-- #post-${ID} -->