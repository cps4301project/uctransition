<?

/* Formatting for a single post entry page */

get_header();

if(have_posts()) :
	while(have_posts()) : the_post(); ?>

	<div class="container content">
		<article class="post">
			<h2 class="text-center"><? the_title(); ?></h2>
			<p><? the_content(); ?></p>
		</article>
	</div>
	
	<? endwhile;

	else :
		echo '<p>No content found</p>';

endif;

get_footer();

?>