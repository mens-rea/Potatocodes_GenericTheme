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
		?>

	   	<div class="row odiv">
	   		<div style="overflow: hidden; height: 300px; float: left; z-index: -1; position: relative;">
	   			<img class="img-responsive" src="<?php echo $featured_img; ?>" style="width: 100%;">
	   		</div>
	   		<div class="container">

					<h1 class="page-title">
						<?php the_title();?>
					</h1>

        	</div>
	   	</div>
	   	<?php endwhile; ?>
		<?php endif; ?>
	   	<div class="row odiv">
	   		<div class="container">
	   			<?php if ( have_posts() ) : while (have_posts()) : the_post();
	   			$imagepath = get_field('about_us_image');
	   			?>


	   				<div class="col-md-9 odiv">
	   					<div class="row odiv">
	   						<div class="col-md-12">
	   							<h3>Who we are</h3>
		   						<div class="row">
		   							<div class="col-md-6"><img class="img-responsive" src="<?php echo $imagepath['url']; ?>"></div>
		   							<div class="col-md-6"><?php the_content();?></div>
		   						</div>
		   						<div class="row">
		   							<div class="col-md-12">
			   							<div><?php the_field('about_bottom_description'); ?></div>
		   							</div>
		   						</div>
	   						</div>
	   					</div>
	   					<div class="row odiv">
	   					</div>
	   					<div class="row odiv">
	   					</div>

	   				</div>
	   				<div class="col-md-3 odiv">The Sidebar</div>


				<?php endwhile; ?>
				<?php endif; ?>

        	</div>
	   	</div>

</div>
<!-- END BODY -->

<?php get_footer();?>