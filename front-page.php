<?php get_header(); ?>

	<div class="l-top">
		<h2>ダミーサイト</h2>
	</div>

	<section>

	<div class="l-contents-wrap">
		<div class="p-contents--takeout">
			<h3><?php echo get_the_title(2474); ?></h3>
			<p class="underline"></p>

			<a href="<?php echo esc_url(home_url('/takeout')); ?>" class="permalink"><!--※記事IDを使用しないでリンク-->
				<div class="inner-text-wrap">
					<?php
							$page_data = get_page_by_path( 'takeout' );
							$page = get_post( $page_data);
							$content = $page -> post_content;
							echo $content;
						?>
				</div><!--/.inner-text-wrap-->
			</a><!--/.permalink takeout-->
		</div><!--/.p-service--takeout-->

		<div class="p-contents--eatin">
			<h3><?php echo get_the_title(2317); ?></h3>
			<p class="underline"></p>
			<a href="<?php echo esc_url(home_url('/eatin')); ?>" class="permalink"><!--※記事IDを使用しないでリンク-->
				<div class="inner-text-wrap">
					<?php
						$page_data = get_page_by_path( 'eatin' );
						$page = get_post( $page_data );
						$content = $page -> post_content;
						echo $content;
					?>
				</div><!--/.inner-text-wrap-->
			</a><!--/.permalink eatin-->
		</div><!--/.p-service--eatin-->
	</div><!--/.l-contents-wrap-->
	
	</section>

	<div class="p-map">
		<div class="map-text">
			<h2>見出しが入ります</h2>
			<span></span>
			<P>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</P>
		</div>
		<div class="map-mask"></div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7978439843787!2d139.7443264!3d35.65735199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd0f176c21%3A0x3fb26af9f96b0058!2z44CSMTA2LTAwNDQg5p2x5Lqs6YO95riv5Yy65p2x6bq75biD77yR5LiB55uu77yZ4oiS77yR77yRIOOCteODnuOCu-ODg-ODiOm6u-W4g-OCpOODvOOCueODiA!5e0!3m2!1sja!2sjp!4v1614488076774!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div><!--/.map-->

</div><!--/.grid-container-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>