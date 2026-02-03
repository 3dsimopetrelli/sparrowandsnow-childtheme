<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php while (have_posts()) : the_post(); ?>

            <?php if (function_exists('elementor_theme_do_location') && elementor_theme_do_location('single')) : ?>
                <?php the_content(); ?>
            <?php else : ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	                
	                
				<?php if (has_post_thumbnail()) : ?>
					<div class="featured-image">
						<?php the_post_thumbnail('large'); ?>
					</div>
				<?php endif; ?>
	            
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                    
                <footer class="entry-footer">
                        <?php the_tags('<div class="tags">', ', ', '</div>'); ?>
                    </footer>
                </article>
                
                
    <?php
    // Verifica se i commenti sono abilitati per l'articolo.
    if (comments_open() || get_comments_number()) :
        comments_template();
    endif;
    ?>
    

            <?php endif; ?>

        <?php endwhile; ?>

    </main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
