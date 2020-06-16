<section class="search-filters search-filters--recipe">
    <div class="search__wrapper">
        <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/recipes/' ) ); ?>">
            <label for="search-recipes">
                <input type="search" id="search-recipes" class="search__input--recipes" placeholder="Search Recipes" value="<?php echo get_search_query(); ?>" name="r" />
            </label>
            <!-- <input type="hidden" name="post_type" value="recipe"> -->
            <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'twentytwenty' ); ?>" />
        </form>
    </div>
    <div class="filter__wrapper">
        <div class="filter__button">
            <a class="filter__text" href="">Filter</a>
        </div>
        <ul class="filter__list">
            <li><a class="filter__link" href="">Filter 1</a></li>
            <li><a class="filter__link" href="">Filter 2</a></li>
            <li><a class="filter__link" href="">Filter 3</a></li>
        </ul>
    </div>
</section>
