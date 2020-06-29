<?php 
$id = is_post_type_archive() ? get_page_for_post_type(get_post_type()): null;
$image_1 = get_field('image_1', $id);
$image_2 = get_field('image_2', $id);
$image_3 = get_field('image_3', $id);
$image_4 = get_field('image_4', $id);
$image_5 = get_field('image_5', $id);
$image_6 = get_field('image_6', $id);

$callout_heading = get_field('callout_heading', $id);
$callout_copy = get_field('callout_copy', $id);
?>
<section class="instagram-grid">
    <img class="grid-box grid__image" src="<?php echo $image_1; ?>">
    <img class="grid-box grid__image" src="<?php echo $image_2; ?>">
    <div class="grid-box instagram-grid__callout">
        <h2 class="callout__heading"><?php echo $callout_heading ?></h2>
        <img class="callout__separator" src="">
        <div class="callout__copy"><?php echo $callout_copy; ?></div>
    </div>
    <img class="grid-box grid__image" src="<?php echo $image_3; ?>">
    <img class="grid-box grid__image" src="<?php echo $image_4; ?>">
    <div class="grid-box grid-box--icon">
        <a class="grid__link" href=""><img class="instagram" src="<?php get_template_directory('../dist/images/instagram.svg') ?>"></a>
    </div>
    <img class="grid-box grid__image" src="<?php echo $image_5; ?>">
    <div class="grid-box grid-box--empty"></div>
    <img class="grid-box grid__image" src="<?php echo $image_6; ?>">
</section>