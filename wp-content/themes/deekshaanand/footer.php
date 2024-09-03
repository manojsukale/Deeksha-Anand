<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<footer>
    <div class="container--responsive">
        <div class="footer--wrap">
            <a href="/" class="logo">
                <img class="logo--img" src="<?php echo get_template_directory_uri(); ?>/src/images/logo.png" alt="logo">
                <div class="logo--text">
                    <span class="text-one">Deeksha Anand</span>
                    <span class="text-two">Mortgage Broker</span>
                </div>
            </a>
            <!-- <div class="footer--content">
                <p class="copyrights">© 2024 Deeksha Anand, The Mortgage Broker in Calgary, Alberta, Canada</p>
                <ul class="footer--menu">
                    <li class="nav-link"><a href="#">About</a></li>
                    <li class="nav-link"><a href="#">Home Purchase</a></li>
                    <li class="nav-link"><a href="#">Refinance</a></li>
                    <li class="nav-link"><a href="#">Mortgage Renewal</a></li>
                    <li class="nav-link"><a href="#">Mortgage Pre-Approval</a></li>
                </ul>

            </div> -->
            <div class="footer--content">
                <p class="copyrights">© <?php echo date('Y'); ?> Deeksha Anand, The Mortgage Broker in Calgary, Alberta, Canada</p>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'container' => 'ul',
                    'menu_class' => 'footer--menu',
                    'item_class' => 'nav-link',
                ));
                ?>
            </div>
            <div class="footer--social">
                <ul>
                    <li>
                        <a href="#" class="icon"><img src="<?php echo get_template_directory_uri(); ?>/src/images/whatsapp-icon.png" alt="whatsapp"></a>
                    </li>
                    <li>
                        <a href="#" class="icon"><img src="<?php echo get_template_directory_uri(); ?>/src/images/tiktok.png" alt="tiktok"></a>
                    </li>
                    <li>
                        <a href="#" class="icon"><img src="<?php echo get_template_directory_uri(); ?>/src/images/youtube-icon.png" alt="youtube"></a>
                    </li>
                    <li>
                        <a href="#" class="icon"><img src="<?php echo get_template_directory_uri(); ?>/src/images/insta-icon.png" alt="insta"></a>
                    </li>
                    <li>
                        <a href="#" class="icon"><img src="<?php echo get_template_directory_uri(); ?>/src/images/x-icon.png" alt="twitter"></a>
                    </li>
                    <li>
                        <a href="#" class="icon"><img src="<?php echo get_template_directory_uri(); ?>/src/images/facebook-icon.png" alt="facebook"></a>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="footer contact--info">
            <li class="contact-link"><a href="8255615003"><span class="phone-icon ds-phone"></span> 825-561-5003</a></li>
            <li class="contact-link"><a href="mailto:info@damortgages.ca">info@damortgages.ca</a></li>
        </ul>
    </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>