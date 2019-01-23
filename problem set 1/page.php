<?php get_header() ?>
<?php // 121
	    
	 $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );

?>

  <?php echo '<div id="hello" style="background-image: url('.$featured_img_url.')">';  ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 centered">
          <h1><?php the_title() ?></h1>
          <h2>Awesome Bootstrap Template</h2>
        </div>
        <!-- /col-lg-8 -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /hello -->

<div id="skills">
    <div class="container">
      <div class="row centered">
        <h3>OUR SKILLS</h3>
		  <div class="col-lg-3 mt">
          <canvas id="javascript" height="130" width="130"></canvas>
          <p>Javascript</p>
          <br>
        </div>
        <div class="col-lg-3 mt">
          <canvas id="bootstrap" height="130" width="130"></canvas>
          <p>Bootstrap</p>
          <br>
        </div>
        <div class="col-lg-3 mt">
          <canvas id="wordpress" height="130" width="130"></canvas>
          <p>Wordpress</p>
          <br>
        </div>
        <div class="col-lg-3 mt">
          <canvas id="photoshop" height="130" width="130"></canvas>
          <p>Photoshop</p>
          <br>
        </div>
      </div>
        
        
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /skills -->
<div id="green">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 centered">
        <img src="<?php bloginfo("template_url") ?>/img/iphone.png" alt="">
      </div>

      <div class="col-lg-7 centered">
        <h3><?php the_title() ?></h3>
        <p><?php the_content(); ?></p>
      </div>
    </div>
  </div>
</div>

  <?php get_footer() ?>