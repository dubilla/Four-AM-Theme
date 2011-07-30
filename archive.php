<?php get_header(); ?>
	
	<?php get_sidebar(); ?>
	
	<div id="content">
		<div id="content-header"></div>
		<div id="content-content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>   
           
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>   
		
			<?php the_content() ?>
		
		<?php endwhile; else: ?>   
		
		    <h2>Woops...</h2>   
       
    <p>Sorry, no posts we're found.</p>   
       
    <?php endif; ?>   

			</div>
		</div>
		
<?php get_footer(); ?>