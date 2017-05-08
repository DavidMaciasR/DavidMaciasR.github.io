<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package piclectic
 */

get_header(); ?>

<section id="page-container" class="fullwidth-page-container">
    <div class="grid grid-pad">
        <div class="col-1-1">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
        
                    <section class="error-404 not-found">
                        <header class="page-header">
                            <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'piclectic' ); ?></h1>
                        </header><!-- .page-header -->
        
                        <div class="page-content">
                            <p><?php esc_html_e( 'It looks like nothing was found at this location. Try a search below', 'piclectic' ); ?></p>
        
                            <?php
                                get_search_form(); ?>
        
                             
                        </div><!-- .page-content -->
                    </section><!-- .error-404 -->
        
                </main><!-- #main -->
            </div><!-- #primary -->
        </div>  
    </div>    
</section>   
<?php
get_footer();
