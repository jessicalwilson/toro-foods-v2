<?php get_header(); ?>

<?php $heading = get_field('heading'); ?>
<?php $sub_heading = get_field('sub_heading'); ?>
<?php $featured_recipe = get_field('featured_recipe'); ?>

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
    
    <section class="search-filters search-filters--recipe">
        <div class="search__wrapper">
          <a href=""><img class="icon icon--search" src=""></a>
          <input class="input search__input search__input--recipes" type="text" id="search-recipes" name="search-recipes" placeholder="Search Recipes">
        </div>
        <div class="filter__wrapper">
          <div class="filter__button">
            <a class="filter__text" href="">Filter</a>
            <a class="filter__icon" href=""><img src="img/icons/filter.svg"></a>
          </div>
          <ul class="filter__list">
            <li><a class="filter__link" href="">Filter 1</a></li>
            <li><a class="filter__link" href="">Filter 2</a></li>
            <li><a class="filter__link" href="">Filter 3</a></li>
          </ul>
        </div>
      </section>
      
        <div class="recipes-grid"></div>
        <div class="instagram-callout"></div>
        <div class="newsletter-sign-up"></div>
</main>

<?php get_footer(); ?>