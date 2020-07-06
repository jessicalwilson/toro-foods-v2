<section class="recipe-search-filters">
    <form role="search" method="get" class="recipe-search" action="<?php echo esc_url( home_url( '/recipes/' ) ); ?>">
        <div class="recipe-search__keyword">
            <label class="recipe-search__label" for="search-recipes__input--recipes">
                <?php _e('Search Recipes', 'toro-foods'); ?>
            </label>
            <input type="search" id="search-recipes__input--recipes" class="recipe-search__input" placeholder="Search Recipes" value="<?php echo get_search_query(); ?>" name="r" />
            <!-- <input type="hidden" name="post_type" value="recipe"> -->
            <input type="submit" class="recipe-search__submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'toro-foods' ); ?>" />
        </div>
        <div class="filters">
            <div class="filters__button">
                <a class="filters__button-text" href="">Filter</a>
            </div>
            <ul class="filters__list">
                <li><a class="filters__link" href="">Breakfast</a></li>
                <li><a class="filters__link" href="">Lunch</a></li>
                <li><a class="filters__link" href="">Dinner</a></li>
            </ul>
        </div>
    </form>
</section>
