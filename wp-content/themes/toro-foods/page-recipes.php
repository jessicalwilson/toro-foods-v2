<?php get_header(); ?>

<?php $heading = get_field('heading'); ?>
<?php $sub_heading = get_field('sub_heading'); ?>
<?php $fatured_recipe = get_field('featured_recipe'); ?>

<main class="main">
    <div class="hero-section">
        <?php if ($heading) :?>
            <h1 class="hero__heading"><?php echo $heading; ?></h1>
        <?php endif; ?>
        
        <?php if ($sub_heading) :?>
            <p class="hero__subheading"><?php echo $sub_heading; ?></p>
        <?php endif; ?>
        
        <div class="featured-recipe"></div>
        <div class="search-filters"></div>
        <div class="recipes-grid"></div>
        <div class="instagram-callout"></div>
        <div class="newsletter-sign-up"></div>
    </div>
</main>

<?php get_footer(); ?>