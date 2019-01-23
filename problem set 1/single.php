<?php get_header() ?>

     
<?php 
		if ( have_posts() ) : while ( have_posts() ) : the_post(); 
           if ( has_post_thumbnail() ) {
				$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
				echo '<header class="intro-header" style="background-image:url('.$feat_image_url.');">'; 
           }
           endwhile;
         endif;
         ?>

  <div id="hello">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 centered">
          <h1><?php the_title(); ?></h1>
          <h2>Awesome Bootstrap Template</h2>
        </div>
        <!-- /col-lg-8 -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /hello -->

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
		  <?php if (have_posts()):
			while (have_posts()):
			the_post(); ?>
        <div class="post-preview">
          <a href="<?php the_permalink(); ?>">
            <h2 class="post-title">
              <?php the_title(); ?>
            </h2>
            <h3 class="post-subtitle">
              <?php the_content(); ?>
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
            <?php the_date(); ?></p>
        </div>
        <hr>
        <?php endwhile;
			endif; ?>
        <!-- Pager -->

      </div>
    </div>
  </div>


  <?php get_footer() ?>
