<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>

	<?php wp_head(); ?>

	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/royalslider.css">
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory'); ?>/css/rs-minimal-white.css">

	<title><!-- PLACE WEBSITE TITLE HERE--></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/style.css">


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>

</head>
<body>

<div id="container">

   <!-- START HEADER -->

   <div id="header">

   		<div class="row">
          <div class="container">
               <div class="col-md-12">

                  <nav class="navbar navbar-default" role="navigation"> 
                  <!-- Brand and toggle get grouped for better mobile display --> 
                    <div class="navbar-header"> 
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                      </button> 
                      <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
                    </div> 
                    <!-- Collect the nav links, forms, and other content for toggling --> 
                    <div class="collapse navbar-collapse navbar-ex1-collapse"> 
                      <?php /* Primary navigation */
                        wp_nav_menu( array(
                          'menu' => 'primary_navigation',
                          'depth' => 2,
                          'container' => false,
                          'menu_class' => 'nav navbar-nav',
                          //Process nav menu using our custom nav walker
                          'walker' => new wp_bootstrap_navwalker())
                        );
                      ?>
                    </div>
                  </nav>
               
               </div>
          </div>     
	   	</div>

   </div>

   <!-- END HEADER -->