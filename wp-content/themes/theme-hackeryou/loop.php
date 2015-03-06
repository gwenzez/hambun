<?php // If there are no posts to display, such as an empty archive page ?>
<div class="post_post">
<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="postInfo">
			<h2 class="entry-title">
       			<a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(	the_title_attribute()); ?>" re="bookmark"><?php the_title(); ?>
       			</a>
      		</h2>
      		<h3>
      			<img src="<?php bloginfo( 'template_directory' ); ?>/img/iconmonstr-time-icon.svg">
      			<?php echo get_the_date(); ?> / 
      			<img src="<?php bloginfo( 'template_directory' ); ?>/img/iconmonstr-folder-2-icon.svg"> 
      			<?php the_tags(' ', ', ', '<br>'); ?>
      		</h3>
      	</div><!--postInfo-->

		<section class="entry-content">
		<?php echo get_the_post_thumbnail($post_id, 'medium'); ?> 
			<?php //the_content('Continue reading <span class="meta-nav">&rarr;</span>'); ?>
			<?php the_excerpt(); ?>


			
			<?php wp_link_pages( array(
         			'before' => '<div class="page-link"> Pages:',
         			'after' => '</div>'
       		)); ?>
			
			<?php include('social.php'); ?>

		</section><!-- .entry-content -->
		<footer class="resp">
			<p>
				<?php comments_popup_link('Respond to this post', 'View 1 Comment', 'View all % Comments'); ?>
			<p>
       		<p>
       			<?php //edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
       		</p>
		</footer>
	</article><!-- #post-## -->
	<?php comments_template( '', true ); ?>
	<div class="line"></div>

<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>
</div><!--post_post-->
