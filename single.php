<?php get_header(); ?>

	<?php
		if ( have_posts() ):
		while ( have_posts() ): the_post();
	?>

	<div <?php post_class( 'bg_thumbnails' ); ?> style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">
		<h1><?php the_title();?></h1>
	</div>

	<?php the_content(); ?>
		<!--※記事内ページャー-->
		<div class="page-links">
			<?php wp_link_pages(); ?>
		</div>
	<?php endwhile; endif;?>

</div><!--/.grid-container-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>