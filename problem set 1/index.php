<?php get_header() ?>

  <div id="hello" style="background-image: url('<?php bloginfo("template_url") ?>/img/home-bg.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 centered">
          <h1><?php bloginfo('name'); ?></h1>
          <h2><?php bloginfo('description'); ?></h2>
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
              <?php the_excerpt(); ?>
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
