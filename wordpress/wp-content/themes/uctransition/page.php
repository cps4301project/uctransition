<?

/* Formatting for a Wordpress page - use 'slugname-page.php' for specially formatted pages */

get_header();

if(have_posts()) :
	while(have_posts()) : the_post(); ?>

	<div class="container content">
		<article class="post">
			<h2 class="text-center"><? the_title(); ?></h2>
			<div class="row">
				<div class="col-md-4 featured-image post-thumbnail">
					<span class="center-thumbnail"><? the_post_thumbnail(array(225, 225)); ?></span>
				</div>
			</div>
			<div class="row page-content">
				<p><? the_content(); ?></p>
			</div>
		</article>
	</div>
	
	<? endwhile;

	else :
		echo '<p>No content found</p>';

endif;

get_footer();

?>