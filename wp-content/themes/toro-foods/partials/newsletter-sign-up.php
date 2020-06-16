<?php $sign_up_text = get_field('sign_up_text', 'options') ?>
<section class="newsletter-sign-up">
    <h3 class="newsletter-heading"><?php echo $sign_up_text; ?></h3>
    <?php gravity_form(1, false, false); ?>
</section>