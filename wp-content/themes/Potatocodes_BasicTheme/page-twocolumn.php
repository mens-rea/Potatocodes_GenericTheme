<?php
/*
Template Name: Two Column
*/
?>

<?php get_header();?>

<!-- START BODY -->

<div id="body">

		<?php if ( have_posts() ) : while (have_posts()) : the_post();
		$featured_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
		$imagepath = get_field('about_us_image');

		$page_title = get_the_title();
		$page_content = get_the_content();
		$bottomdesc = get_field('about_bottom_description');

		$title1 = get_field('about_section_title');
		$title2 = get_field('about_second_title');
		$title3 = get_field('about_third_title');
		?>

		<?php endwhile; ?>
		<?php endif; ?>

	   	<div class="row odiv">
	   		<div style="overflow: hidden; height: 300px; float: left; z-index: -1; position: relative;">
	   			<img class="img-responsive" src="<?php echo $featured_img; ?>" style="width: 100%;">
	   		</div>
	   		<div class="container">

					<h1 class="page-title">
						<?php echo $page_title; ?>
					</h1>

        	</div>
	   	</div>
	   	<div class="row odiv">
	   		<div class="container">

	   				<div class="col-md-9 odiv">

	   					<div class="row odiv paddivdown">
	   						<div class="col-md-12">
	   							<h3><?php echo $title1; ?></h3>
		   						<div class="row">
		   							<div class="col-md-6"><img class="img-responsive" src="<?php echo $imagepath['url']; ?>"></div>
		   							<div class="col-md-6"><?php echo $page_content; ?></div>
		   						</div>
		   						<div class="row">
		   							<div class="col-md-12">
			   							<div><?php echo $bottomdesc; ?></div>
		   							</div>
		   						</div>
	   						</div>
	   					</div>

	   					<div class="row odiv paddivdown">
	   						<div class="col-md-12">
	   							<h3><?php echo $title2; ?></h3>
	   							<?php query_posts("post_type=Members&posts_per_page=5"); 
									if (have_posts()) : while (have_posts()) : the_post();
								?>
									<div class="col-md-4">
										<?php the_title(); ?>
										<?php the_content(); ?>
									</div>
								<?php 
									endwhile;
									endif;
								?>
	   						</div>
	   					</div>

	   					<div class="row odiv paddivdown">
	   						<div class="col-md-12">
	   							<h3><?php echo $title3; ?></h3>
	   							<?php query_posts("post_type=Features&posts_per_page=5"); 
									if (have_posts()) : while (have_posts()) : the_post();
								?>
									<div class="col-md-4">
										<?php the_title(); ?>
										<?php the_content(); ?>
									</div>
								<?php 
									endwhile;
									endif;
								?>
	   						</div>
	   					</div>

	   				</div>
	   				<div class="col-md-3 odiv">The Sidebar</div>

        	</div>
	   	</div>

	   

		 

</div>
<!-- END BODY -->

<?php get_footer();?>