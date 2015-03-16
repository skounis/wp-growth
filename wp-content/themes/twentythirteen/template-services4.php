<?php
/**
 * Template Name: Service's 4 Column Layout
 */

get_header(); ?>
<div id="services-page-title"><?php echo get_the_title( $ID ); ?> </div>
<div class="services-container">

			<?php /* The loop */ ?>
			<?php

   $args = array (
      'post_status' => 'publish',
      'orderby' => 'date',
      'order' => 'ASC',
      'post_type' => 'jetpack-portfolio',
      'tax_query' => array (
		  0 => array (
		  'taxonomy' => 'jetpack-portfolio-type',
		  'field' => 'id',
		  'terms' => array (0 => 4,),
		  'operator' => 'IN',
		  'include_children' => false,
		  ),
		  ),
	    );
   $services_posts = new WP_Query($args);

   if($services_posts->have_posts()) : 
      while($services_posts->have_posts()) : 
         $services_posts->the_post();
?>

<div class="services-block4">
         
	 <!--<h2 class=services-author>Posted by <?php //the_author(); ?> | Posted: <?php //the_time('F j, Y'); ?> at <?php //the_time('g:i a'); ?> </h2>
         <div class='services-content'><?php //the_content(); ?></div>-->
	 <div id="services-image"><?php the_post_thumbnail( 'large' ); ?></div>
	 <div id="services-title"><?php the_title(); ?></div>
	 <div id="services-excerpt"><?php the_excerpt(); ?></div>
	 
	 
	 
</div>
<?php
      endwhile;
   else: 
?>

      Oops, there are no posts.

<?php
   endif;
?>
</div>
				

<?php get_sidebar(); ?>
<?php get_footer(); ?>