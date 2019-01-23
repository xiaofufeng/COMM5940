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

<div id="portfolio"></div>
<div class="container">
	<div class="row centered mt grid">
		<h3>OUR LATEST WORK</h3>
		<div class="mt"></div>
		<div class="col-lg-4">
			<a href="#"><img src="img/01.jpg" alt=""></a>
		</div>
		<div class="col-lg-4">
			<a href="#"><img src="img/02.jpg" alt=""></a>
		</div>
		<div class="col-lg-4">
			<a href="#"><img src="img/03.jpg" alt=""></a>
		</div>
	</div>

	<div class="row centered mt grid">
		<div class="mt"></div>
		<div class="col-lg-4">
			<a href="#"><img src="img/04.jpg" alt=""></a>
		</div>
		<div class="col-lg-4">
			<a href="#"><img src="img/05.jpg" alt=""></a>
		</div>
		<div class="col-lg-4">
			<a href="#"><img src="img/06.jpg" alt=""></a>
		</div>
	</div>

	<div class="row mt centered">
		<div class="col-lg-7 col-lg-offset-1 mt">
			<p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
		</div>

		<div class="col-lg-3 mt">
			<p><button type="button" class="btn btn-theme btn-lg">Email Me!</button></p>
		</div>
	</div>
</div>

  <?php get_footer() ?>
