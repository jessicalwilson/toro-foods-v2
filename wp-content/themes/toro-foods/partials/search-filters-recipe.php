<section class="search-filters search-filters--recipe">
    <div class="search__wrapper">
        <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/recipes/' ) ); ?>">
            <label for="search-recipes">
                <a href=""><img class="icon icon--search" src=""></a>
                <input type="search" id="search-recipes" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentytwenty' ); ?>" value="<?php echo get_search_query(); ?>" name="r" />
            </label>
            <!-- <input type="hidden" name="post_type" value="recipe"> -->
            <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'twentytwenty' ); ?>" />
        </form>
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
