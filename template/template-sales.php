<?php
/*
Template Name: sales
*/
?>
<?php get_header(); ?>
		<div class="sas-container">
			<div class="wrap_page_header">
				
				<div class="Grid Grid--gutters flex_middle">
					<div class="Grid-cell fadein">
						
						<div class="page_title flex-row flex-vertical-center">
							
							<img style="margin-right: 25px;" src="https://www.sparrowandsnow.com/wp-content/themes/sparrow/img/support/gettingstarted.svg">
							
							<h1 class="flex-left"><?php the_title(); ?></h1>
							
						</div><!-- .page_title -->
					
					</div> <!-- Grid-cell -->
							
					<div class="Grid-cell fadein">
						<div class="page_description ">
							<p><?php the_field('subtitle'); ?></p>
						</div><!-- .page_description -->
					
					</div> <!-- Grid-cell -->
				</div><!-- .Grid .Grid--gutters -->
				
			</div><!-- .wrap_page_header -->
		</div><!-- .sas-container -->
	
		
	
<!-- ========= CONTENT ======= -->


<div class="page_wrap">
		<div class="sas-container">
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<?php if( get_field('testo_semplice') ): ?>
    	<h2><?php the_field('testo_semplice'); ?></h2>
	<?php endif; ?>


	<br>
	<br>
	<br>
	<br>
		
		<?php

// ACF CAMPO RIPETIZIONE Check rows existexists.
if( have_rows('rip_sales_table') ):

    // Loop through rows.
    while( have_rows('rip_sales_table') ) : the_row();

        // Load sub field value.
        $sub_value = get_sub_field('url_prodotto');
        // Do something...
        
        $sub_nome = get_sub_field('nome_prodotto');

		
		echo "<h2>";
		the_sub_field('url_prodotto');
		echo " <br>"; 
		
		the_sub_field('nome_prodotto');    	
		echo "<h2>";
		
        	      


    // End loop.
    endwhile;

// No value.
else :
    // No data to display
endif;
		
	?>	

	</div><!-- .sas-container -->
</div><!-- .page_wrap -->
	
	
<?php get_footer(); ?>