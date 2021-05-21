<!--ウィジェット出力-->
<?php if ( is_active_sidebar('main-sidebar') ) : ?>
  <ul class="menu">
    <?php dynamic_sidebar('main-sidebar'); ?>
  </ul>
<?php endif; ?>

<div class="l-aside-wrap grid-aside">
	<div class="g-menu">
		<div class="menu">Menu</div>

		<div class=menu-list>
			<button class="c-toggle"></button>

			<?php wp_nav_menu(array (
				'menu' => 'gmenu',
				'theme_location' => 'gmenu',
				));
			?>

		</div><!--/.menu-list-->
	</div><!--/.g-menu-->
</div><!-- /.l-aside-wrap -->