<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content">
    
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <h1 class="entry-title"><?php the_title(); ?></h1>
          <h3><img src="<?php bloginfo( 'template_directory' ); ?>/img/iconmonstr-time-icon.svg"><?php echo get_the_date(); ?> / <img src="<?php bloginfo( 'template_directory' ); ?>/img/iconmonstr-folder-2-icon.svg"> <?php the_tags(' ', ', ', '<br>'); ?></h3>
          
          <div class="entry-content">
            <?php the_content(); ?>

            <?php include('social.php'); ?>


            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

        </div><!-- #post-## -->

        

        <?php comments_template( '', true ); ?>

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->
      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>