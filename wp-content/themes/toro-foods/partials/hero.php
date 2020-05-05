<?php
$id = is_post_type_archive() ? get_page_for_post_type(get_post_type()): null;
$heading = get_field('heading', $id) ?: get_the_title();
$sub_heading = get_field('sub_heading', $id);
?>

<section class="hero">
    <div class="hero__text">
        <?php if ($heading) :?>
            <h1 class="hero__heading"><?php echo $heading; ?></h1>
        <?php endif; ?>
        
        <?php if ($sub_heading) :?>
            <div class="hero__subheading"><?php echo $sub_heading; ?></div>
        <?php endif; ?>
    </div>
</section>