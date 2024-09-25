<?php

/**
 * Template Name: Contact Us Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$contact_number = get_field('contact_number', 'option');
$contact_email = get_field('contact_email', 'option');

get_header(); ?>

<section class="contactUs--main-wraper">
    <div class="container--responsive">
        <div class="contactUs--inner-wraper">
            <div class="contactUs-image">
                <img class="profile-image" src="<?php echo get_template_directory_uri(); ?>/src/images/contact-us.png" alt="contact-us">
            </div>
            <div class="contactUs--form-wrap contact-form-box">
                <?php echo do_shortcode('[contact-form-7 id="dbb746b" title="Contact form 1"]'); ?>
            </div>
        </div>

    </div>
</section>


<?php

get_footer();
