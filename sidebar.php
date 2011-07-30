<div id="sidebar" class="sidebox">
		<?php if(!function_exists('dynamic_sidebar')
							|| !dynamic_sidebar() ) : ?>
			<h2>About the Author</h2>
			<img src="/wp-content/themes/classic-cars/images/bwProfile.jpg" alt="The Relentless Life" />
			<p>Anthony Phillips is an avid runner, budding philosopher and fitness enthusiast.  Upon beginning his training for the 2008 Boston Marathon, he began chronicling his efforts in these travails.  More recently, his efforts in fitness have began including that of the mind and spirit as well as physical.</p>
			<p>Anthony Phillips currently pursuing his doctoral degree in Physical Therapy at Virginia Commonwealth University.</p>
		<?php endif; ?>
</div>
<div id="calendar" class="sidebox">
		<?php if(!function_exists('dynamic_sidebar')
							|| !dynamic_sidebar() ) : ?>
			<h2>Archives</h2>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
		<?php endif; ?>
</div>
<span id="rss">
  <a href="<?php bloginfo('rss2_url'); ?>">    <img src="/wp-content/themes/classic-cars/images/rss.jpg"></a>
</span>
