
<!-- 自作固定ページ -->
<?php
	/*
		Template Name: RECRUIT template 
		lightning_get_template_partは、lightningの特別な関数。
		template-parts内のディレクトリを使用する為に採用。
	*/
	lightning_get_template_part( 'header' );
?>


<!-- サイトヘッダー -->
<?php get_template_part( 'template-parts/site-header' ); ?>

<!-- ページヘッダー -->
<div class="page-lp">
	<div class="page-header">
		<div class="page-header-inner container">
			<h1 class="page-header-title">リクルート</h1>
			<div class="page-header-subtext">Recruit</div>
		</div>
	</div>
</div>

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
				<span itemprop="name">リクルート</span>
			</li>
		</ol>
	</div>
</div>

<!-- コンテンツエリア -->

<div class="page-body site-body">
	<div class="site-body-container container">
		<div class="main-section" id="main" role="main">
			<div id="post-583" class="entry entry-full post-583 page type-page status-publish hentry">
				<section class="recruit-body">
					<h2 class="recruit-body_title">メッセージ</h2>
					<p class="recruit_text">テキストテキストテキストテキストテキスト<br>
					テキストテキストテキストテキストテキスト<br>
					テキストテキストテキストテキストテキスト。
					</p>
				</section><!-- [ /recruit-body ] -->




				<section class="recruit-body">
					<h2 class="recruit-body_title">私たちはこんな会社</h2>
					<div class="recruit-body_inner">




					
						<!-- ステップ1 -->
						<div class="recruit-item">
							<img src="http://attend-life.dev-webitch.xyz/wp-content/uploads/2021/07/df442356f2aaa18661bb72d31c93edf1_w-1.jpg" alt="ステップ1">
							<h3 class="flow-item_title">お電話か公式LINEからお問い合わせ</h3>
							<p>お問い合わせの方は、当ホームページの下部にあります「お問い合わせボタン」からお願いします。お問い合わせには生前整理を熟知した女性スタッフが対応いたします。お客さまの立場になって、親切、ていねいにご相談に応じます。</p>
						</div>
						<!-- ステップ2 -->
						<div class="recruit-item">
							<img src="http://attend-life.dev-webitch.xyz/wp-content/uploads/2021/07/df442356f2aaa18661bb72d31c93edf1_w-1.jpg" alt="ステップ2">
							<h3 class="flow-item_title">現地調査と無料お見積り</h3>
							<p>日時のお約束をいただいて現地を訪問し、ご依頼者さま立ち会いのもとで現状を調査いたします。この際にはお部屋や家財等の状況だけでなく、ご依頼者さまのご希望、ご相談などお聞かせいただきます。</p>
						</div>
						<!-- ステップ3 -->
						<div class="recruit-item">
							<img src="http://attend-life.dev-webitch.xyz/wp-content/uploads/2021/07/df442356f2aaa18661bb72d31c93edf1_w-1.jpg" alt="ステップ3">
							<h3 class="flow-item_title">ご契約とミーティング</h3>
							<p>お見積りを提出したのち、ご依頼者さまにご検討いただき、サービス内容にご納得いただいた場合はご契約となります。その後、ご依頼者さまにも参加していただき、ご依頼者さまと弊社スタッフでミーティングを実施します。これは確実な情報共有を目的としたものです。</p>
						</div>
					</div>

					</div>
					</section><!-- [ /recruit-body ] -->

			</div><!-- [ /#post-583 ] -->
		</div><!-- [ /.main-section ] -->
	</div><!-- [ /.site-body-container ] -->
</div><!-- [ /.site-body ] -->


<!-- //コンテンツエリア -->

<!-- サイトフッター -->
<?php get_template_part( 'template-parts/site-footer' ); ?>
