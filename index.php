<?php get_header(); ?>
<h2 class="title">Home</h2>
<br class="clear" />
<div id="container">

	<div id="left-column" class="left pic-column">
	</div>
	
	<div id="center-column" class="left text-column">
		<h3 class="title">About</h3>
		<br class="clear" />
		<p>This is a culmination of dreams rolling back on themselves to become footnotes, forgotten asides important only to the author and those fervent, wide-eyed types, determined to capture everything and all.  These committed will take in all they can, as they see themselves in the author.  Those not, will go about their lives.</p>
		<p>This page will serve as marked recognition to the author.  A triumph achieved, although truly a mere paragraph in the middle of a memoir.  The tragic fall made slightly easier by a fresh goose-down pillow.</p>
		<p>In the end, our hero will stand for greater truths than those found on these pages.  He will reach greater heights and succeed beyond anything these younger eyes see.  But for now, at this marker that these words are typed, none of that has come to be.  And so we sit waiting, wondering, feeling our way through the dark.</p>
		<p>This site is you and me and all your friends gathered at one party to celebrate everything we have been becoming everything we will be.</p>
	</div>
	
	<div id="right-column" class="right text-column">
		<div id="songs" class="latest">
		<h3 class="title">Songs</h3>
		<br class="clear" />
			<?php query_posts('cat=23'); ?><?php echo $query_string; ?>
			<?php if ( have_posts() ) : ?>
				<ul>
				<?php while ( have_posts() ) : the_post(); ?>
					<li>
					    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					    <p class="post-date clear">Published on <?php the_date('F j, Y'); ?></p>
					    <br class="clear" />
					</li>
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
					<li>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<p class="post-date clear">Published on <?php the_date('F j, Y'); ?></p>
					</li>
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