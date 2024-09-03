<?php

/**
 * Template Name: Homepage Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<!-- <section class="homepage--banner-wrap">
    <div class="container">
        <div class="homepage--banner">
            <div class="banner-left">
                <h1 class="title-text">Are you looking to</h1>
                <ul class="home-services">
                    <li><a href="#">Purchase a home</a></li>
                    <li><a href="#">Renew a Mortgage</a></li>
                    <li><a href="#">Refinance your mortgage</a></li>
                </ul>
                <p class="note">Look no further. Deeksha Anand, a dedicated and experienced mortgage broker, is here to guide you through every step of the process.</p>
                <ul class="contact--info">
                    <li class="contact-link"><a href="8255615003"><span class="phone-icon ds-phone"></span> 825-561-5003</a></li>
                    <li class="contact-link"><a href="mailto:info@damortgages.ca">info@damortgages.ca</a></li>
                </ul>
            </div>

        </div>
    </div>
</section> -->


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

                    <!-- <ul class="contact--info">
                        <li class="contact-link"><a href="tel:8255615003"><span class="phone-icon ds-phone"></span> 825-561-5003</a></li>
                        <li class="contact-link"><a href="mailto:info@damortgages.ca">info@damortgages.ca</a></li>
                    </ul> -->

                    <?php display_contact_info(); ?>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>


<section class="profile--info-wrapper">
    <div class="container--responsive">
        <div class="profile--wrapper">
            <div class="image-wrap"><img class="profile-image" src="<?php echo get_template_directory_uri(); ?>/src/images/deeksha-anand-xl.png" alt="deeksha-anand-xl"></div>
            <div class="content-wrap">
                <h2 class="heading-text">Meet Deeksha Anand</h2>
                <h3 class="sub-text">Your Trusted Mortgage Broker in Calgary</h3>
                <div class="about--content-wrap">
                    <h3 class="about-heading">About Deeksha Anand</h3>
                    <p class="note">Deeksha Anand is a seasoned mortgage broker based in Calgary, Alberta, Canada with a passion for helping individuals and families achieve their homeownership dreams.<br><br>With strong experience in the mortgage industry, Deeksha offers a variety of mortgage solutions to fit your needs and requirements, she ensures to provide you with the best tailor made solution that leads you to your success.</p>
                    <ul class="contact--info">
                        <li class="contact-link"><a href="8255615003"><span class="phone-icon ds-phone"></span> 825-561-5003</a></li>
                        <li class="contact-link"><a href="mailto:info@damortgages.ca">info@damortgages.ca</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="why--choose-section">
    <div class="container--responsive">
        <div class="why--choose-wrapper">
            <div class="why--choose-navigation">Why Choose Us?</div>
            <div class="why--choose-slider">
                <div class="why--choose-inner" id="why-choose-us">
                    <div class="slide--item">
                        <div class="inner">
                            <h3>Personalized Service</h3>
                            <p>We will find the right tailored solutions based on your financial goals. Working with you from origination of application till the funding of the loan, we will ensure a seamless process and help facilitate in making the experience as smooth as possible.</p>
                        </div>
                    </div>
                    <div class="slide--item">
                        <div class="inner">
                            <h3>Trusted Partnerships</h3>
                            <p>Access to a vast network of over 45 lenders from A lenders, Monolines to B lenders, will help to cater the best solution to your financing journey. We have lots of options available to find the right product for you.</p>
                        </div>
                    </div>
                    <div class="slide--item">
                        <div class="inner">
                            <h3>Local Expertise</h3>
                            <p>We have strong knowledge of Alberta's local housing market and can help guide you through the specifics of your property’s geographical market trends, neighbourhoods, valuation through our strong referral partners.</p>
                        </div>
                    </div>
                    <div class="slide--item">
                        <div class="inner">
                            <h3>Trusted Partnerships</h3>
                            <p>Access to a vast network of over 45 lenders from A lenders, Monolines to B lenders, will help to cater the best solution to your financing journey. We have lots of options available to find the right product for you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="mortgage--answers-section">
    <div class="container--responsive">
        <div class="mortgage--answers-wrapper">
            <div class="conent-wrap">
                <h3 class="heading-text">We Will Help You To Find<br>
                    All Necessary Mortgage Answers</h3>
                <div class="mortgage--qna-wrap">
                    <div class="accordion">
                        <div class="accordion-item">
                            <div class="accordion-item-header">How much is a mortgage in Canada?</div>
                            <div class="accordion-item-body">
                                <p class="accordion-item-body-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi impedit sunt ab accusamus odit repudiandae rerum ut consequatur, vero cum odio magnam labore voluptates suscipit, id necessitatibus sequi dolor molestias!</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-item-header">What is a typical mortgage in Canada?</div>
                            <div class="accordion-item-body">
                                <p class="accordion-item-body-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat fuga quibusdam rerum asperiores voluptatem error earum, sequi libero tenetur vitae quisquam velit inventore. Fugiat et blanditiis, autem sit labore aliquam?</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-item-header">Do they do 30 year mortgages in Canada?</div>
                            <div class="accordion-item-body">
                                <p class="accordion-item-body-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat fuga quibusdam rerum asperiores voluptatem error earum, sequi libero tenetur vitae quisquam velit inventore. Fugiat et blanditiis, autem sit labore aliquam?</p>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <div class="accordion-item-header">How much mortgage can I get with $70,000 salary in Canada?</div>
                            <div class="accordion-item-body">
                                <p class="accordion-item-body-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat fuga quibusdam rerum asperiores voluptatem error earum, sequi libero tenetur vitae quisquam velit inventore. Fugiat et blanditiis, autem sit labore aliquam?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="contact--info">
                    <li class="contact-link"><a href="8255615003"><span class="phone-icon ds-phone"></span> 825-561-5003</a></li>
                    <li class="contact-link"><a href="mailto:info@damortgages.ca">info@damortgages.ca</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="location--map-section">
    <div class="container--responsive">
        <div class="location--map-wrap">
            <div class="location--map-image">
                <img class="map-location" src="<?php echo get_template_directory_uri(); ?>/src/images/map-location.jpg" alt="map-location">
            </div>
            <div class="location--map-wrapper">
                <ul class="location--map-content">
                    <li class="map-profile">
                        <h3 class="title-text">Deeksha Anand</h3>
                        <h5 class="sub-text">The mortgage Expert in Calgary, Alberta, Canada</h5>
                    </li>
                    <li class="map-address">
                        <h3 class="title-text">Come say hi</h3>
                        <h5 class="sub-text">1121 Centre St NW, Calgary, AB T2E 7K6, Canada</h5>
                    </li>
                    <li class="map-contact">
                        <h3 class="title-text">Get in touch</h3>
                        <div class="sub-text">
                            <ul class="contact--info">
                                <li class="contact-link"><a href="8255615003">825-561-5003</a></li>
                                <li class="contact-link"><a href="mailto:info@damortgages.ca">info@damortgages.ca</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php

get_footer();
