<?php get_header(); ?>

<?php
$page_for_recipes = get_page_for_post_type('recipe');
$heading = get_field('heading', $page_for_recipes);
$sub_heading = get_field('sub_heading', $page_for_recipes);
$featured_recipe = get_field('featured_recipe', $page_for_recipes);
?>

<main class="main">
    <div class="hero">
        <?php if ($heading) :?>
            <h1 class="hero__heading"><?php echo $heading; ?></h1>
        <?php endif; ?>
        
        <?php if ($sub_heading) :?>
            <p class="hero__subheading"><?php echo $sub_heading; ?></p>
        <?php endif; ?>
    </div>
        
    <?php if ($featured_recipe) :?>
        <section class="featured-recipe">
        <?php $featured_post = get_post(get_field('featured_post')); ?>
            <div class="recipe__image-wrapper">
                <img class="featured-recipe__img" src="">
            </div>
            <div class="recipe__content">
            <div class="recipe__inner">
              <h2 class="recipe__title"></h2>
              <h3 class="recipe__sub-title"></h3>
              <img class="recipe__chili" src ="">
              <p class="recipe__copy"></p>
              <a class="button button--primary" href="">Read More</a>
            </div>
            <div class="recipe__social-media">
              <div class="recipe__likes">
                <a href=""><img class="icon icon-heart-white" src="img/icons/ico_heart-white.svg"></a>
                <p class="recipe__like-count"></p>
              </div>
              <div class="recipe__comments">
                <a href=""><img class=" icon icon-comment-white" src="img/icons/ico_comment-white.svg"></a>
                <p class="recipe__comment-count"></p>
              </div>
            </div>
          </div>
        </section>
    <?php endif; ?>
    
    <?php get_template_part('partials/search-filters-recipe'); ?>
      
        <div class="recipes-grid"></div>
        
        <?php get_template_part('partials/instagram-callout'); ?>
        
        <?php get_template_part('partials/newsletter-sign-up'); ?>
</main>

<?php get_footer(); ?>