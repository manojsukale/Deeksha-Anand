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
$contact_number = get_field('contact_number', 'option');
$contact_email = get_field('contact_email', 'option');
$footer_text = get_field('footer_text', 'option');

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

            <div class="footer--content">
                <p class="copyrights">© <?php echo date('Y'); ?> <?php echo $footer_text ?></p>
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
                    <?php if (have_rows('social_media', 'option')): // 'option' to make it global 
                    ?>
                        <?php while (have_rows('social_media', 'option')): the_row(); ?>
                            <li>
                                <a href="<?php the_sub_field('social_link'); ?>" class="icon">
                                    <img src="<?php the_sub_field('social_icon'); ?>" alt="<?php echo ('social_icon') ?>">
                                </a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>

        </div>
    </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA33qlIMuw9VjZrVAy7tBxTvqvk0oVgisU&callback=console.debug&libraries=maps,marker&v=beta" async defer></script>


</body>

</html>