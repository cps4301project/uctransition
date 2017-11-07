<?

get_header();

if(have_posts()) :
	while(have_posts()) : the_post(); ?>

	<div class="container content">
		<article class="post aniview" data-av-animation="fadeIn">
			<h2 class="text-center"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>
			<div class="row">
				<div class="col-md-4 featured-image post-thumbnail">
					<span class="center-thumbnail"><? the_post_thumbnail(array(225, 225)); ?></span>
				</div>
				<div class="col-md-8 post-excerpt">
					<p><? the_excerpt(); ?></p>
				</div>
				<div class="col-md-8 text-center">
					<a href="<? the_permalink(); ?>"><button id="read-more-btn" class="btn btn-lg btn-default center-block" type="button">Read More</button></a>
				</div>
			</div>
		</article>
	</div>
	
	<? endwhile;

	else :
		echo '<p>No content found</p>';

endif;

get_footer();

?>