<?php get_header(); ?>

<?php
$page_for_recipes = get_page_for_post_type('recipe');
$featured_recipe = get_field('featured_recipe', $page_for_recipes);
$featured_recipe->subheading = get_field('subheading', $featured_recipe);
$featured_recipe->like_count = get_field('like_count', $featured_recipe);
$search_term = esc_html($_GET['r']);
$spice_level = esc_html($_GET['spice-level']);
$search_terms = $search_term || $spice_level ? true : false;

$query = new WP_Query ( array(
  'post_status' => 'publish',
  'post__not_in' => [$featured_recipe->ID],
  'post_type' => 'recipe',
  's' => $search_term,
  'meta_query' => !$spice_level ? null : [
    [
      'key' => 'spice_level',
      'value' => $spice_level,
    ],
  ],
));

?>

<main class="main">
<?php if (!$search_terms) :?>
  
  <div class="hero-background">
    <?php get_template_part('partials/hero'); ?>

    <?php if ($featured_recipe) :?>
        <section class="featured-recipe">
            <div class="recipe__image-wrapper">
                <?php the_post_thumbnail($featured_post->ID) ?>
              </div>
              
            <div class="recipe__content">
              <div class="recipe__inner">
                <h2 class="recipe__heading">
                  <?php the_title($featured_post->ID); ?>
                </h2>
                <h3 class="recipe__subheading">
                  <?php echo $featured_recipe->subheading; ?>
                </h3>
                <div class="recipe__chili"></div>
                <div class="recipe__excerpt">
                  <?php the_excerpt($featured_post->ID); ?>
                </div>
                <a class="button button--primary" href="<?php the_permalink($featured_post->ID); ?>">Read More</a>
              </div>
              
              <div class="recipe__meta">
                <div class="recipe__likes">
                  <a class="recipe__likes__link" href="<?php the_permalink($featured_post->ID); ?>"><?php echo $featured_recipe->like_count; ?></a>
                </div>
                <div class="recipe__comments">
                  <a class="recipe__comments__link" href="<?php the_permalink($featured_post->ID); ?>"><?php echo $featured_recipe->comment_count; ?></a>
                </div>
              </div>
            </div>
        </section>
    <?php endif; ?>
  <?php endif; ?>
</div>
    
  <?php get_template_part('partials/search-filters-recipe'); ?>
    
  <?php if ( $query->have_posts() ) : ?>
    <div class="recipe-grid">
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
      <?php $like_count = get_field('like_count', $post_id); ?>
        <article class="recipe">
          <div class="recipe__inner">
            <a class="recipe__link" href="<?php the_permalink($featured_post->ID); ?>">
              <div class="recipe__copy">
                <h4 class="recipe__title"><?php the_title(); ?></h4>
                <div class="recipe__excerpt">
                  <?php the_excerpt(); ?>
                </div>
                <p class="recipe__spice-level spice-level spice-level--<?php echo get_field('spice_level'); ?>" title="<?php echo get_field('spice_level'); ?>">
                  <?php _e('Spice Level', 'toro-foods'); ?> <?php echo get_field('spice_level'); ?>
                </p>
              </div>
            </a>
          </div>
          <div class="recipe__image">
            <a class="recipe__link" href="<?php the_permalink($featured_post->ID); ?>"><?php the_post_thumbnail(); ?></a>
          </div>
          <div class="recipe__meta">
            <div class="recipe__likes">
              <a class="recipe__likes__link" href="<?php the_permalink($featured_post->ID); ?>"><?php echo $like_count ?></a>
            </div>
            <div class="recipe__comments">
              <a class="recipe__comments__link" href="<?php the_permalink($featured_post->ID); ?>"><?php echo $post->comment_count ?></a>
            </div>
          </div>
        </article>
        <?php endwhile; ?>
      </div>
      <div class="recipe__load-more">
        <button class="button button--secondary">Load More Recipes</button>
      </div>
    <?php else : 
        _e( 'Sorry, no posts were found.', 'toro-foods' ); ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
      
    <?php if (!$search_terms) :?>
      <?php get_template_part('partials/instagram-grid'); ?>
      
      <?php get_template_part('partials/newsletter-sign-up'); ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>