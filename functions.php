<?php

	//翻訳--------------------------------------------------------------------------------------------------------------
		load_theme_textdomain( 'wphamburger', get_template_directory() . '/languages' );

	//テーマサポート----------------------------------------------------------------------------------------------------
	function setup_theme() {
		add_theme_support( 'title-tag' ); //head内に<title>タグ不要
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' ); //アイキャッチを有効化
		add_theme_support( 'custom-header' ); //カスタムヘッダーを追加
		add_theme_support( 'custom-background' ); //カスタム背景を追加
		add_editor_style(); //エディタ用スタイルシートを関連付ける(※)
	}
	add_action( 'after_setup_theme', 'setup_theme');

	register_nav_menus([
		'gmenu' => 'グローバルメニュー', //「メニュー」＞「メニューの位置」を追加
	]);

	//ウィジェット----------------------------------------------------------------------------------------------------
	function my_theme_widgets_init() {
		register_sidebar( array(
			'name' => 'main-sidebar',
			'id' => 'home_right_1',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="rounded">',
			'after_title' => '</h2>',
		) );
	}
	add_action( 'widgets_init', 'my_theme_widgets_init' );

	//ファイル読み込み------------------------------------------------------------------------------------------------
	function add_scripts() {
		//font----------------------------------------------------------------------------------------------------------
		wp_enqueue_style( 'MPLUS1p', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap"', array() );
		wp_enqueue_style( 'Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap"', array() );
		wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.6.1/css/all.css', array() );
		//css-----------------------------------------------------------------------------------------------------------
		wp_enqueue_style( 'ress-style', '//unpkg.com/ress/dist/ress.min.css', array() );
		wp_enqueue_style( 'main-style', get_template_directory_uri(). '/css/style.css' );
		//js------------------------------------------------------------------------------------------------------------
		wp_enqueue_script( 'jquery-js', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js' );
		wp_enqueue_script( 'jQuery', get_template_directory_uri(). '/js/jquery.js', array() );
	}
	add_action('wp_enqueue_scripts', 'add_scripts');

	//投稿アーカイブページの作成--------------------------------------------------------------------------------------
	function post_has_archive( $args, $post_type ) {
		if ( 'post' == $post_type ) {
			$args['rewrite'] = true;
			$args['has_archive'] = 'archive'; //任意のスラッグ名
		}
		return $args;
	}
	add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

	//コンテンツの最大幅----------------------------------------------------------------------------------------------------
		if ( ! isset( $content_width ) ) $content_width = 900;

	//ページャー----------------------------------------------------------------------------------------------------

		//現在のページ数の取得
		function show_page_number() {
			global $wp_query;
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$max_page = $wp_query->max_num_pages;
			echo $paged;
		}
		//総ページ数の取得
		function max_show_page_number() {
			global $wp_query;
			$max_page = $wp_query->max_num_pages;
			echo $max_page;
		}
	
	
	//ob_end_flush()エラー対処----------------------------------------------------------------------------------------------------

	/**
	*Proper ob_end_flush() for all levels
	*
	*This replaces the WordPress `wp_ob_end_flush_all()` function
	*with a replacement that doesn't cause PHP notices.
	*/
	remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
	add_action( 'shutdown', function() {
		while ( @ob_end_flush() );
	} );