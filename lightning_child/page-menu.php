
<!-- 自作固定ページ -->
<?php
	/*
		Template Name: MENU template 
		lightning_get_template_partは、lightningの特別な関数。
		template-parts内のディレクトリを使用する為に採用。
	*/
	lightning_get_template_part( 'header' );
?>


<!-- サイトヘッダー -->
<?php get_template_part( 'template-parts/site-header' ); ?>

<!-- ページヘッダー -->
<?php get_template_part( 'template-parts/page-lp-header' ); ?>

<!-- パンくず -->
<div id="breadcrumb" class="breadcrumb">
	<div class="container">
		<ol class="breadcrumb-list">
			<li class="breadcrumb-list__item breadcrumb-list__item--home" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<a href="http://attend-life.dev-webitch.xyz" itemprop="item">
					<i class="fas fa-fw fa-home"></i>
					<span itemprop="name">HOME</span>
				</a>
			</li>
			<li class="breadcrumb-list__item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<!-- ここのタグは、固定ページの「タイトル」に変更してください。 -->
				<span itemprop="name">生前生理とは</span>
			</li>
		</ol>
	</div>
</div>

<!-- コンテンツエリア -->

<div class="page-body site-body">
	<div class="site-body-container container">
		<div class="main-section" id="main" role="main">
			<div id="post-583" class="entry entry-full post-583 page type-page status-publish hentry">
				<div class="">
				

				</div><!-- [ /page-body ] -->
			</div><!-- [ /#post-583 ] -->
		</div><!-- [ /.main-section ] -->
	</div><!-- [ /.site-body-container ] -->
</div><!-- [ /.site-body ] -->


<!-- //コンテンツエリア -->

<!-- サイトフッター -->
<?php get_template_part( 'template-parts/site-footer' ); ?>
