<?php get_header(); ?>
  <?php if (have_posts()) : ?>
  <div id="main-top">
    <div class="main-top-left">
      <div class="single-comments">
        <a href="#comments"><?php comments_number('', '1', '%'); ?></a>
      </div>
    </div>
    <?php if (is_file(STYLESHEETPATH . '/subscribe.php')) include(STYLESHEETPATH . '/subscribe.php'); else include(TEMPLATEPATH . '/subscribe.php'); ?>
  </div>
  <div id="main" class="clear">
    <div id="content">
      <?php while (have_posts()) : the_post(); ?>
        <h1 class="title"><?php the_title(); ?></h1>
        <div class="entry page">
          <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail('index-thumb', array('class' => 'single-post-thm alignright border') ); ?>
          <?php the_content(__('Read more' . $read_more, 'traction')); ?>
          <?php edit_post_link(__('Edit This','<p>','</p>', 'traction')); ?>
        </div><!--end entry-->
      <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
        <?php comments_template('', true); ?>
      <?php else : ?>
      <?php endif; ?>
    </div><!--end content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>