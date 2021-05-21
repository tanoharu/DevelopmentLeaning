<?php get_header(); ?>

<?php if ( have_posts() ): ?>
<?php while ( have_posts() ): the_post(); ?>
<?php get_template_part( 'content', 'search' ); ?>
<?php endwhile; ?>

<?php else: ?>
	該当なし
<?php endif; ?>

	<div class="l-top--archive">
		<div>
			<div>
				<h1 class="c-headline--lv1"><?php printf( __( 'Search: %s', 'altitude' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</div>
		</div>
	</div>

	<section>
		<div class="l-archive-text">
			<h3 class="c-headline--lv3">小見出しが入ります</h3>
			<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
		</div>
	</section>

	<article>
		<?php
			if (have_posts()):
			while (have_posts()): the_post(); ?>

			<?php
			//サムネイル画像ID取得
			$attach_id = get_post_thumbnail_id($post -> ID );
			$image = wp_get_attachment_image_src( $attach_id, 'full' );
			?>

			<div class="p-article">
				<img src="<?php  echo esc_url( $image[0] ); ?>" alt="">

				<div class="p-article__text">
					<h3 class="c-headline--lv3"><?php the_title(); ?></h3>
					<ul>
						<!---カスタムフィールド取得-->
						<li><?php echo post_custom('フード紹介'); ?></li>
						<li><?php echo post_custom('カロリー'); ?></li>
						<li><?php echo post_custom('サイズ'); ?></li>
						<li><?php echo post_custom('価格'); ?></li>

						<!--パーマリンク取得-->
						<p><a href="<?php the_permalink(); ?>">詳しく見る</a></p>

						<!--'お知らせ'は値の有無で条件分岐-->
						<?php $value = get_post_meta($post->ID, 'お知らせ', true);?>
						<?php if(empty($value)):?>
						<?php else:?>
						<li>
							<?php echo post_custom('お知らせ'); ?>
						</li>
						<?php endif;?>
					</ul>

				</div><!--/.thumbnail-text-->

			</div><!--/.thumbnail-wrap-->

		<?php endwhile; ?>
		<?php else: ?>
			<p>記事がありません。</p>
		<?php endif ?>
	</article>

	<div class="p-pagination">
		<p>Page <?php show_page_number(' '); ?>/<?php max_show_page_number(' ') ?></p>
		<?php the_posts_pagination([
			'prev_text' => '≪<span>前へ</span>',
			'next_text' => '<span>次へ</span>≫',
			'screen_reader_text' => ' ', //「投稿ナビゲーション」を非表示
			'type' => 'list',
		]); ?>
	</div><!--p-pagination-->

</div><!--/.grid-container-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>?