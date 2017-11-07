<? get_header(); ?>

<!-- Formatting for landing page -->

	<div class="container-fluid">
		<section class="showcase">
			<div class="row showcase-text">
				<h1>Union County Partnership for Transition</h1>
				<h2>Helping prepare citizens for transition to independent adulthood</h2>
				<a href="what-is-ccd" class="btn btn-info btn-lg" id="more-info-btn" role="button">More About What We Do</a>
			</div>
			<div class="row showcase-boxes aniview" data-av-animation="fadeInUp">
				<div class="box col-md-4">
					<i class="fa fa-newspaper-o" aria-hidden="true"></i>
					<h2>News</h2>
					<? $catquery = new WP_Query( array( 'category_name' => 'ccd-podcast', 'posts_per_page' => 1 ) ); ?>
					<ul>
					<? while($catquery->have_posts()) : $catquery->the_post(); ?>
					<li>
						<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
						<div class="col-md-4 featured-image post-thumbnail">
							<span class="center-thumbnail"><? the_post_thumbnail(array(125, 125)); ?></span>
						</div>
						<ul>
							<li><? the_excerpt(); ?></li>
						</ul>
					</li>
					<? endwhile;
					    wp_reset_postdata();
					?>
				</div>
				<div class="box col-md-4">
					<i class="fa fa-calendar" aria-hidden="true"></i>
					<h2>Events</h2>
					[tribe_mini_calendar]
				</div>
				<div class="box col-md-4">
					<i class="fa fa-handshake-o" aria-hidden="true"></i>
					<h2>Resources</h2>
					<? $catquery = new WP_Query( array( 'category_name' => 'jacked-kirby-podcast', 'posts_per_page' => 1 ) ); ?>
					<ul>
					<? while($catquery->have_posts()) : $catquery->the_post(); ?>
					<li>
						<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
						<div class="col-md-4 featured-image post-thumbnail">
							<span class="center-thumbnail"><? the_post_thumbnail(array(125, 125)); ?></span>
						</div>
						<ul>
							<li><? the_excerpt(); ?></li>
						</ul>
					</li>
					<? endwhile;
					    wp_reset_postdata();
					?>
				</div>
			</div>
		</section>
		<? get_footer(); ?>
	</div>