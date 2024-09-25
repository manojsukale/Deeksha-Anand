<?php

/**
 * Template Name: Homepage Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
$contact_number = get_field('contact_number', 'option');
$contact_email = get_field('contact_email', 'option');
$mortgage_answers_heading = get_field('mortgage_answers_heading');
get_header(); ?>

<?php
$home_banner = get_field('home_banner');
if ($home_banner) :
?>
    <section class="homepage--banner-wrap">
        <div class="container">
            <div class="homepage--banner">
                <div class="banner-left">
                    <?php if ($home_banner['banner_heading']) : ?>
                        <h1 class="title-text"><?php echo esc_html($home_banner['banner_heading']); ?></h1>
                    <?php endif; ?>

                    <?php if ($home_banner['service_repeater']) : ?>
                        <ul class="home-services">
                            <?php foreach ($home_banner['service_repeater'] as $service) : ?>
                                <li><a href="<?php echo esc_url($service['service_link']); ?>"><?php echo esc_html($service['service_title']); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <?php if ($home_banner['banner_info_text']) : ?>
                        <p class="note"><?php echo esc_html($home_banner['banner_info_text']); ?></p>
                    <?php endif; ?>

                    <ul class="contact--info">
                        <li class="contact-link"><a href="tel:<?php echo $contact_number ?>"><span class="phone-icon ds-phone"></span> <?php echo $contact_number ?></a></li>
                        <li class="contact-link"><a href="mailto:<?php echo $contact_email ?>"><?php echo $contact_email ?></a></li>
                    </ul>


                </div>
            </div>
        </div>
    </section>
<?php endif; ?>


<?php
$meet_deeksha = get_field('meet_deeksha_anand');
if ($meet_deeksha) :
?>
    <section class="profile--info-wrapper">
        <div class="container--responsive">
            <div class="profile--wrapper">
                <div class="image-wrap">
                    <img class="profile-image" src="<?php echo esc_url($meet_deeksha['insert_image']); ?>" alt="<?php echo esc_attr($meet_deeksha['insert_image']); ?>">
                </div>
                <div class="content-wrap">
                    <h2 class="heading-text"><?php echo esc_html($meet_deeksha['heading_text']); ?></h2>
                    <h3 class="sub-text"><?php echo esc_html($meet_deeksha['sub_heading_text']); ?></h3>
                    <div class="about--content-wrap">
                        <h3 class="about-heading">About <?php echo esc_html($meet_deeksha['about_text']); ?></h3>
                        <p class="note"><?php echo wp_kses_post($meet_deeksha['about_content']); ?></p>
                        <ul class="contact--info">
                            <li class="contact-link"><a href="tel:<?php echo $contact_number ?>"><span class="phone-icon ds-phone"></span> <?php echo $contact_number ?></a></li>
                            <li class="contact-link"><a href="mailto:<?php echo $contact_email ?>"><?php echo $contact_email ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>



<section class="why--choose-section">
    <div class="container--responsive">
        <div class="why--choose-wrapper">
            <div class="why--choose-navigation">
                <?php
                if (have_rows('why_choose_us_slider')):
                    while (have_rows('why_choose_us_slider')): the_row();
                        $heading = get_sub_field('why_choose_us_heading');
                        echo esc_html($heading);
                    endwhile;
                endif;
                ?>
            </div>
            <div class="why--choose-slider">
                <div class="why--choose-inner" id="why-choose-us">
                    <?php
                    // Fetch the slider_content repeater
                    if (have_rows('why_choose_us_slider')):
                        while (have_rows('why_choose_us_slider')): the_row();
                            if (have_rows('slider_content')):
                                while (have_rows('slider_content')): the_row();
                                    $slide_title = get_sub_field('item_heading');
                                    $slide_description = get_sub_field('item_description_text');
                    ?>
                                    <div class="slide--item">
                                        <div class="inner">
                                            <h3><?php echo esc_html($slide_title); ?></h3>
                                            <p><?php echo esc_html($slide_description); ?></p>
                                        </div>
                                    </div>
                    <?php
                                endwhile;
                            endif;
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="mortgage--answers-section">
    <div class="container--responsive">
        <div class="mortgage--answers-wrapper">
            <div class="conent-wrap">
                <h3 class="heading-text"><?php echo $mortgage_answers_heading ?></h3>
                <div class="mortgage--qna-wrap">
                    <div class="accordion">
                        <?php if (have_rows('mortgage_question_answer')): // Check if the repeater field has rows 
                        ?>
                            <?php while (have_rows('mortgage_question_answer')): the_row(); // Loop through the rows of data 
                            ?>
                                <div class="accordion-item">
                                    <div class="accordion-item-header">
                                        <?php the_sub_field('mortgage_question'); // Display the question 
                                        ?>
                                    </div>
                                    <div class="accordion-item-body">
                                        <p class="accordion-item-body-content">
                                            <?php the_sub_field('mortgage_answer'); // Display the answer 
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <ul class="contact--info">
                    <li class="contact-link"><a href="tel:<?php echo $contact_number ?>"><span class="phone-icon ds-phone"></span> <?php echo $contact_number ?></a></li>
                    <li class="contact-link"><a href="mailto:<?php echo $contact_email ?>"><?php echo $contact_email ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php get_template_part('template-parts/location-map'); ?>



<?php

get_footer();
