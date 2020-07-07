<?php
$search_term = esc_html($_GET['r']);
$spice_level = esc_html($_GET['spice-level']);
?>

<section class="recipe-search-filters">
    <form role="search" method="get" class="recipe-search" action="<?php echo esc_url( home_url( '/recipes/' ) ); ?>">
        <div class="recipe-search__keyword">
            <label class="recipe-search__label" for="search-recipes__input--recipes">
                <?php _e('Search Recipes', 'toro-foods'); ?>
            </label>
            <input type="search" id="search-recipes__input--recipes" class="recipe-search__input" placeholder="Search Recipes" value="<?php echo 
            $search_term; ?>" name="r" />
            <!-- <input type="hidden" name="post_type" value="recipe"> -->
            <input type="submit" class="recipe-search__submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'toro-foods' ); ?>" />
        </div>
        <div class="filters">
            <div class="filters__button">
                <a class="filters__button-text" href="">Filter</a>
            </div>
            <ul class="filters__list">
                <li><input type="radio" name="spice-level" id="spice-level--1" value="1" class="filters__input"> <label for="spice-level--1">Spice Level 1</label></input></li>
                <li><input type="radio" name="spice-level" id="spice-level--2" value="2" class="filters__input"> <label for="spice-level--2">Spice Level 2</label></input></li>
                <li><input type="radio" name="spice-level" id="spice-level--3" value="3" class="filters__input"> <label for="spice-level--3">Spice Level 3</label></input></li>
                <li><input type="radio" name="spice-level" id="spice-level--4" value="4" class="filters__input"> <label for="spice-level--4">Spice Level 4</label></input></li>
                <li><input type="radio" name="spice-level" id="spice-level--5" value="5" class="filters__input"> <label for="spice-level--5">Spice Level 5</label></input></li>
            </ul>
        </div>
    </form>
</section>
