<?php get_header(); ?>

	<?php
		$page_data = get_page_by_path( 'aboutshop');
		$page = get_post( $page_data );
		$content = $page_data -> post_content;
		echo $content;
	?>

</div><!--/.grid-container-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>