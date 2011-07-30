<?php
if(function_exists('register_sidebar'))
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

remove_action('wp_head', 'wp_generator');

add_filter('single_template', create_function('$t', 'foreach( (array) get_the_category() as $cat ) { if ( file_exists(TEMPLATEPATH . "/single-{$cat->term_id}.php") ) return TEMPLATEPATH . "/single-{$cat->term_id}.php"; } return $t;' ));

function debug($x)
{
	if(is_object($x)) {
		$output = '<pre>';
		foreach($x as $k=>$v) {
			$output.= $k .' => '. $v . '<br />';
		}
		$output.='</pre>';
	} else {
		$output = '<pre>' . $x .'</pre>';
	}
	
	echo $output;
}
?>