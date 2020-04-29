<?php get_header(); ?>

<?php
$page_for_recipes = get_page_for_post_type('recipe');
$featured_recipe = get_field('featured_recipe', $page_for_recipes);
$featured_recipe->subheading = get_field('subheading', $featured_recipe);
$featured_recipe->like_count = get_field('like_count', $featured_recipe);
?>

<main class="main">

  <?php get_template_part('partials/hero'); ?>

  <?php if ($featured_recipe) :?>
      <section class="featured-recipe">
          <div class="recipe__image-wrapper">
              <?php the_post_thumbnail($featured_post->ID) ?>
            </div>
            
          <div class="recipe__content">
            <div class="recipe__inner">
              <h2 class="recipe__title">
                <?php the_title($featured_post->ID); ?>
              </h2>
              <h3 class="recipe__subheading">
                <?php echo $featured_recipe->subheading; ?>
              </h3>
              <img class="recipe__chili" src ="">
              <p class="recipe__excerpt">
                <?php the_excerpt($featured_post->ID); ?>
              </p>
              <a class="button button--primary" href="<?php the_permalink($featured_post->ID); ?>">Read More</a>
            </div>
            
            <div class="recipe__social-media">
              <div class="recipe__likes">
                <a href=""><img class="icon icon-heart-white" src=""></a>
                <p class="recipe__like-count">
                  <?php echo $featured_recipe->like_count; ?>
                </p>
              </div>
              <div class="recipe__comments">
                <a href=""><img class=" icon icon-comment-white" src=""></a>
                <p class="recipe__comment-count">
                  <?php echo $featured_recipe->comment_count; ?>
                </p>
              </div>
            </div>
          </div>
      </section>
  <?php endif; ?>
    
  <?php get_template_part('partials/search-filters-recipe'); ?>
    
  <?php if ( have_posts() ) : ?>
    <div class="recipe-grid">
      <?php while ( have_posts() ) : the_post(); ?>
      <?php $like_count = get_field('like_count', $post_id); ?>
        <article class="recipe-single">
          <div class="recipe-single__card">
            <div class="recipe__copy">
              <h4 class="recipe__title"><?php the_title(); ?></h4>
              <p class="recipe__excerpt"><?php the_excerpt(); ?></p>
              <img class="spice-rating" src="" />
            </div>
          </a>
          <img class="recipe__image" src="<?php the_post_thumbnail(); ?>">
          <div class="recipe__social-media">
            <div class="recipe__likes">
              <a href=""><img class="icon icon--heart" src=""><?php echo $like_count ?></a>
            </div>
            <div class="recipe__comments">
              <a href=""><img class="icon icon--comment" src=""><?php echo $post->comment_count ?></a>
            </div>
          </div>
        </article>
        <?php endwhile; ?>
        <div class="recipe__load-more">
          <button class="button button--secondary">Load More Recipes</button>
        </div>
    <?php else : 
        _e( 'Sorry, no posts were found.', 'textdomain' ); ?>
  </div>
    <?php endif; ?>
      
  <?php get_template_part('partials/instagram-callout'); ?>
      
  <?php get_template_part('partials/newsletter-sign-up'); ?>
</main>

<?php get_footer(); ?>