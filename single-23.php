<?php
/*
Single Post Template: Songs
Description: For songs, cover or original, for the time being
*/
?>

<?php get_header(); ?>

<h2 class="title">Songs</h2>
<br class="clear" />
<div id="container">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="left-columns" class="left pic-column">
		<img id="photo" src="<?php echo get_post_meta($post->ID,'photo','single'); ?>">
	</div>

	<div id="right-column" class="right text-column">
		<h3 class="title"><?php the_title(); ?></h3>
		<div class="post" id="post-<?php the_ID(); ?>">

			<div class="entry">
				<?php the_content('<p class="serif">' . __('Read the rest of this entry &raquo;', 'minimalism') . '</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>' . __('Pages:', 'minimalism') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&layout=standard&show_faces=true&width=450&action=like&colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:530px;height:60px;margin-top:30px;"></iframe>

			</div>
		</div>
	</div>
	<br class="clear" />
<?php endwhile; else : ?>
	<p>Amazingly, you've stumbled upon a post that has yet to exist.  Consider yourself the Magellan of this site.</p>
<?php endif; ?>
</div>

<?php get_footer(); ?> 