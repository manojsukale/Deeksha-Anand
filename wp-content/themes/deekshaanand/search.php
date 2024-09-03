<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>
<section class="innerpage--top-section">
    <div class="container">
        <div class="innerpage--header-wrap">
            <h1 class="heading-l">
				<?php
				printf(
					/* translators: %s: Search term. */
					esc_html__( 'Results for "%s"', 'twentytwentyone' ),
					'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
				);
				?>
			</h1>
        </div>
    </div>
</section>
<section class="insideBanner2">
        <div class="topSection">
            <div class="container">
                <div class="title">
					<div class="search-result-count default-max-width mt-5">
						<?php
						printf(
							esc_html(
								/* translators: %d: The number of search results. */
								_n(
									'We found %d result for your search.',
									'We found %d results for your search.',
									(int) $wp_query->found_posts,
									'twentytwentyone'
								)
							),
							(int) $wp_query->found_posts
						);
						?>
					</div><!-- .search-result-count -->
                </div>
            </div>
        </div>
    </section> 
    <section class="mt-md-5 mb-5">
    </section>
    <section class="newVideoWrapper | margin-bottom-900">
        <div class="container">
            <div class="row row-gap-5">
				<?php if ( have_posts() ) : 
				// Do we have any posts in the databse that match our query?
				// In the case of the home page, this will call for the most recent posts 
				?>

					<?php while ( have_posts() ) : the_post(); 
					// If we have some posts to show, start a loop that will display each one the same way
					$customField = get_fields();
					
					$image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					if(!$image_url)
					{
						$image_url = get_template_directory_uri()."/src/images/article-02.png";
					}
					//print_r($image_url);
					?>

					<div class="col-md-4">
                    	<div class="itemBox">
                    		<div class="img">
                                <?php //$src = esc_url((wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'post-img')[0])); ?>
                                <img src="<?php echo $image_url; ?>" class="newsphoto" alt="">
                                <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/post-link.png" alt=""></a>
                            </div>						
							<?php //the_post_thumbnail('large'); //Get the thumbnail to this post. ?>
							<!-- <div class="subHeading text-neutral-900 mt-1"><?php the_time('j F Y'); ?></div> -->
                        	<p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>							
						</div>
					</div>

					<?php endwhile; // OK, let's stop the posts loop once we've exhausted our query/number of posts ?>
					
					<!-- pagintation -->
					<div id="pagination" class="clearfix">
						<div class="past-page"><?php previous_posts_link( 'newer' ); // Display a link to  newer posts, if there are any, with the text 'newer' ?></div>
						<div class="next-page"><?php next_posts_link( 'older' ); // Display a link to  older posts, if there are any, with the text 'older' ?></div>
					</div><!-- pagination -->


				<?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
					
					<article class="post error">
						<h1 class="404">Nothing has been posted like that yet</h1>
					</article>

				<?php endif; // OK, I think that takes care of both scenarios (having posts or not having any posts) ?>
			</div>
		</div>
	</section>
<?php
get_footer();
