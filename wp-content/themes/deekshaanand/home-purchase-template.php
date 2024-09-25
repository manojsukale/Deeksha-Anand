<?php

/**
 * Template Name: Home Purchase Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$contact_number = get_field('contact_number', 'option');
$contact_email = get_field('contact_email', 'option');
$internal_top_heading = get_field('top_heading');
$internal_sub_heading = get_field('sub_heading');
$internal_content_text = get_field('content_text');
$home_purchase_heading = get_field('home_purchase_heading');
$home_purchase_profile_image = get_field('purchase_profile_image');

get_header(); ?>

<section class="purchase--banner-wrapper">
    <div class="container--responsive">
        <div class="content--wraper">
            <div class="content--inner">
                <h1><?php echo $internal_top_heading ?></h1>
                <p><?php echo $internal_sub_heading ?></p>
            </div>
            <ul class="contact--info">
                <li class="contact-link"><a href="tel:<?php echo $contact_number ?>"><span class="phone-icon ds-phone"></span> <?php echo $contact_number ?></a></li>
                <li class="contact-link"><a href="mailto:<?php echo $contact_email ?>"><?php echo $contact_email ?></a></li>
            </ul>
        </div>
    </div>
</section>

<section class="purchase--content-wrapper">
    <div class="container--responsive">
        <div class="textcontent--wrap">
            <p><?php echo $internal_content_text ?></p>
        </div>
    </div>
</section>

<section class="whychoose--info-wrapper">
    <div class="container--responsive">
        <div class="whychoose--wrapper">
            <div class="content-wrap">
                <h3 class="title-text"><?php echo $home_purchase_heading ?></h3>


                <ul class="whychoose--features">
                    <?php
                    // Fetch the Why Choose repeater
                    if (have_rows('home_purchase_repeater')):
                        while (have_rows('home_purchase_repeater')): the_row();
                            $home_purchase_que = get_sub_field('home_purchase_que');
                            $home_purchase_ans = get_sub_field('home_purchase_ans');
                    ?>
                            <li>
                                <h4><?php echo $home_purchase_que ?></h4>
                                <p><?php echo $home_purchase_ans ?></p>
                            </li>

                    <?php
                        endwhile;
                    endif;
                    ?>
                </ul>
                <ul class="contact--info">
                    <li class="contact-link"><a href="tel:<?php echo $contact_number ?>"><span class="phone-icon ds-phone"></span> <?php echo $contact_number ?></a></li>
                    <li class="contact-link"><a href="mailto:<?php echo $contact_email ?>"><?php echo $contact_email ?></a></li>
                </ul>

            </div>
            <div class="image-wrap"><img class="profile-image" src="<?php echo $home_purchase_profile_image ?>" alt="deeksha-anand-xl"></div>
        </div>

    </div>
</section>

<?php get_template_part('template-parts/location-map'); ?>


<?php

get_footer();
