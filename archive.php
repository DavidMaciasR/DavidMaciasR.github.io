<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package piclectic
 */

get_header(); ?>

<section id="page-container" class="default-page-container blog-archive category-archive">
    <div class="grid grid-pad">
    
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        	<div class="col-8-12">
    	<?php else: ?>
    		<div class="col-1-1"> 
    	<?php endif; ?>
        
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
        
                <?php
                if ( have_posts() ) : ?>
        
                    <header class="page-header">
                        <?php
                            the_archive_title( '<h1 class="page-title">', '</h1>' );
                            the_archive_description( '<div class="archive-description">', '</div>' );
                        ?>
                    </header><!-- .page-header -->
        
                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();
        
                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', get_post_format() );
        
                    endwhile;
        
                    the_posts_navigation();
        
                else :
        
                    get_template_part( 'template-parts/content', 'none' );
        
                endif; ?>
        
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
