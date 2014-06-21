  <div id="full-width-slider" class="royalSlider heroSlider rsMinW" style="z-index:-999;width: 100%; margin: 0 auto;">

                <?php 
                  query_posts("post_type=Home_Slider&posts_per_page=5"); 
                  if (have_posts()) : while (have_posts()) : the_post();
                  $featured_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                ?>

                  <div class="rsContent">
                    <img class="rsImg" src="<?php echo $featured_img; ?>" alt="" style="height: 200px;">
                  </div>

                <?php 
                  endwhile;
                  endif;
                ?>

  </div>

<?php get_header(); ?>

   <!-- START BODY -->

   <div id="body">

	   	<div class="row odiv nextdowndiv">
        <div class="container odiv">
           <div class="col-md-12 odiv">

            <div class="divcenter unfulldiv conquerdiv odiv">
              <div class="col-md-6 odiv">
                The Organization aims to do stuff and more stuff. 
                We will cater to people, with the stuff we stand for.
                The stuff we do will be related to the stuff you do, 
                that is the reason you are in this page. Either you 
                are interested in the stuff we do or somebody convinced
                you to come here for marketing purposes. Anyway we will
                still type in the stuff we do. The stuff we do is interesting.
              </div>
              <div class="col-md-6 odiv">
                <img class="img-responsive" src="<?php echo bloginfo('template_directory'); ?>/images/default.png">
              </div>
            </div>

           </div>
        </div>
	   	</div>

      <div class="row odiv2 nextdowndiv">
        <div class="container odiv">

          <!-- ANNOUNCEMENTS PART -->
          <div class="col-md-12 odiv2">
            <h1>LATEST EVENTS</h1>
            <div class="col-md-4 odiv">
              <img class="img-responsive" src="<?php echo bloginfo('template_directory'); ?>/images/default.png">
              <div class="col-md-12 odiv2">
                <div class="col-md-3">
                  <h3 class="postdate">09</h3>
                  <h3 class="postmonth">June</h3>
                </div>
                <div class="col-md-9">
                  <h4>POST TITLE</h4>
                  <p>Description...</p>
                </div>
              </div>
            </div>

            <div class="col-md-4 odiv">
              <img class="img-responsive" src="<?php echo bloginfo('template_directory'); ?>/images/default.png">
              <div class="col-md-12 odiv2">
                <div class="col-md-3">
                  <h3 class="postdate">09</h3>
                  <h3 class="postmonth">June</h3>
                </div>
                <div class="col-md-9">
                  <h4>POST TITLE</h4>
                  <p>Description...</p>
                </div>
              </div>
            </div>

            <div class="col-md-4 odiv">
              <img class="img-responsive" src="<?php echo bloginfo('template_directory'); ?>/images/default.png">
              <div class="col-md-12 odiv2">
                <div class="col-md-3">
                  <h3 class="postdate nomargin">09</h3>
                  <h3 class="postmonth">June</h3>
                </div>
                <div class="col-md-9">
                  <h4>POST TITLE</h4>
                  <p>Description...</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="row odiv2 nextdowndiv">
        <div class="container odiv">

           <div class="divcenter unfulldiv">
              <div class="col-md-4">
                <div class="social-circles">
                  <h3>SOCIAL LINK</h3>
                </div>
              </div>
              <div class="col-md-4">
                <div class="social-circles">
                  <h3>SOCIAL LINK</h3>
                </div>
              </div>
              <div class="col-md-4">
                <div class="social-circles">
                  <h3>SOCIAL LINK</h3>
                </div>
              </div>
           </div>

        </div>
      </div>

   </div>
    <!-- END BODY -->

  

<?php get_footer(); ?>