<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package piclectic
 */

get_header(); ?>

<section id="page-container" class="default-page-container single-post">
    <div class="grid grid-pad">
    
       <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        	<div class="col-8-12">
    	<?php else: ?>
    		<div class="col-1-1"> 
    	<?php endif; ?>
        
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
        
                <?php
                while ( have_posts() ) : the_post();
        
                    get_template_part( 'template-parts/content', 'single' );
        
                    the_post_navigation();
        
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
        
                endwhile; // End of the loop.
                ?>
        
                </main><!-- #main -->
            </div><!-- #primary -->
		</div>
        
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?> 
    	<?php get_sidebar(); ?>
    <?php endif; ?>
    
 	</div>
</section>

<?php
get_footer();
