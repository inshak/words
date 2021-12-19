<?php
/**
 * Template part for displaying section of About Us content
  
 * @subpackage nursing-service
 * @since 1.0 
 */
$health_service_enable_about_us_section = get_theme_mod( 'health_service_enable_about_us_section', true );
$health_service_about_title = get_theme_mod( 'health_service_about_title');
$health_service_about_subtitle = get_theme_mod( 'health_service_about_subtitle');

if($health_service_enable_about_us_section==true ) {
 

$health_service_about_page = get_theme_mod( 'health_service_about_page' );

if( !empty( $health_service_about_page ) ) {
	$page_args['page_id'] = absint( $health_service_about_page );
	$page_query = new WP_Query( $page_args );
	if( $page_query->have_posts() ) {
?>

<section id="about" class="about">
<?php
	while( $page_query->have_posts() ) {
	$page_query->the_post();
?>
      <div class="container-fluid">
        <div class="section-title-5">
        	<?php if($health_service_about_title) { ?>
	          <h2><?php echo esc_html($health_service_about_title); ?></h2>
	          <div class="separator">
              <ul>
               <li><i class="fa fa-medkit"></i></li>
              </ul>
            </div>
          <?php } ?>
	        <?php if($health_service_about_subtitle) { ?>
		       <p><?php echo esc_html($health_service_about_subtitle); ?></p>
	        <?php } ?>
            </div>
            <div class="row">
		      <?php 
		        if(has_post_thumbnail())
		         {
			        $health_service_about_cols ="col-md-6"; 
		         }
		        else
		         {
			        $health_service_about_cols ="col-md-12"; 
		         }
		      ?>	
		      <div class=" <?php echo $health_service_about_cols; ?> p-0">
			      <div class="about-content">
			      	<h3 class="main-title"><?php the_title(); ?></h3>
			         <?php the_content(); ?> 
			     </div>
		      </div>
		      <?php if(has_post_thumbnail()) : ?>
			      <div class="col-lg-6 col-md-12 img-box p-0 data-bg-img" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
				    </div>
		      <?php endif; ?>
	      </div>
      </div>
      <?php
	}
wp_reset_postdata();
?>
</section>
<?php
	}
}
}
if(have_posts()) : 
  while(have_posts()) : the_post();
    if(get_the_content()!= "")
    {
    ?>
      <section class="blog sp-100 mb-pad">
          <div class="container">
            <div class="row">
          <?php the_content(); ?> 
        </div>
        </div> 
      </section>  
    <?php 
    } 
  endwhile;
endif; 
?>