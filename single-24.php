<?php get_header(); ?>
<?php debug('hi'); ?>
<h2 class="title">Home</h2>
<br class="clear" />
<div id="container">

	<div id="left-column" class="left pic-column">
	</div>
	
	<div id="center-column" class="left text-column">
		<h3 class="title">News</h3>
		<br class="clear" />
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>

			<div class="entry">
				<?php the_content('<p class="serif">' . __('Read the rest of this entry &raquo;', 'minimalism') . '</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>' . __('Pages:', 'minimalism') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>' . __('Tags:', 'minimalism') . ' ', ', ', '</p>'); ?>
<iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&layout=standard&show_faces=true&width=450&action=like&colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none;overflow:hidden;width:530px;height:60px;margin-top:30px;"></iframe>
				<p class="postmetadata alt">
					<small>
						<?php /* This is commented, because it requires a little adjusting sometimes.
							You'll need to download this plugin, and follow the instructions:
							http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); $time_since = sprintf(__('%s ago', 'minimalism'), time_since($entry_datetime)); */ ?>
						<?php printf(__('This entry was posted %1$s on %2$s at %3$s and is filed under %4$s.', 'minimalism'), $time_since, get_the_time(__('l, F jS, Y', 'minimalism')), get_the_time(), get_the_category_list(', ')); ?>
						<?php printf(__("You can follow any responses to this entry through the <a href='%s'>RSS 2.0</a> feed.", "kubrick"), get_post_comments_feed_link()); ?>

						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							<?php printf(__('You can <a href="#respond">leave a response</a>, or <a href="%s" rel="trackback">trackback</a> from your own site.', 'minimalism'), trackback_url(false)); ?>

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							<?php printf(__('Responses are currently closed, but you can <a href="%s" rel="trackback">trackback</a> from your own site.', 'minimalism'), trackback_url(false)); ?>

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							<?php _e('You can skip to the end and leave a response. Pinging is currently not allowed.', 'minimalism'); ?>

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							<?php _e('Both comments and pings are currently closed.', 'minimalism'); ?>

						<?php } edit_post_link(__('Edit this entry', 'minimalism'),'','.'); ?>

					</small>
				</p>

			</div>
		</div>
	
	<div id="right-column" class="right text-column">
		<div id="songs" class="latest">
		<h3 class="title">Songs</h3>
		<br class="clear" />
			<?php query_posts('cat=23'); ?><?php echo $query_string; ?>
			<?php if ( have_posts() ) : ?>
				<ul>
				<?php while ( have_posts() ) : the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
				</ul>
			<?php else: ?>
				<p>Sorry, no songs yet.</p>
			<?php endif; ?>
		</div>
		<div id="news" class="latest">
		<h3 class="title">News</h3>
		<br class="clear" />
			<?php query_posts('cat=24'); ?>
			<?php if ( have_posts() ) : ?>
				<ul>
				<?php while ( have_posts() ) : the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
				</ul>
			<?php else: ?>
				<p>Sorry, no news yet.</p>
			<?php endif; ?>
		</div>
	</div>
	<br class="clear" />
</div>  

<?php get_footer(); ?> 