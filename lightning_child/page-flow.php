
<!-- 自作固定ページ -->
<?php
	/*
		Template Name: FLOW template 
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
			<h1 class="page-header-title">ご利用までの流れ</h1>
			<div class="page-header-subtext">Flow</div>
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
				<span itemprop="name">ご利用までの流れ</span>
			</li>
		</ol>
	</div>
</div>

<!-- コンテンツエリア -->

<div class="page-body site-body flow-body">
	<div class="site-body-container container">
		<div class="main-section" id="main" role="main">
			<div id="post-583" class="entry entry-full post-583 page type-page status-publish hentry">
				<section class="flow-body">
					<p class="flow_text">ご依頼者さまにご納得いただける様に<br>
						お問い合わせいただいてから作業完了までを<br>
						分かりやすくご説明いたします。
					</p>
				</section><!-- [ /flow-body ] -->

				<section class="flow-body">

					<h2 class="flow_title">よりそい家事サポート</h2>
					<div class="flow-body_inner">
						<!-- ステップ1 -->
						<div class="flow-item">
							<img src="http://attend-life.dev-webitch.xyz/wp-content/uploads/2021/10/4191330_s.jpg" alt="ステップ1">
							<div class="flow-item_textbox">
								<h3 class="flow-item_title">お申し込み</h3>
								<p>電話・もしくはLINEにて申し込みをお願いします。<br>
								希望の場所・日時をご相談ください。</p>
								<div class="contact-btn" style="text-align: center; padding-bottom: 10px;"><a href="https://lin.ee/8uvKBjK" class="btn btn-primary"><i class="far fa-envelope"></i>LINEでお問い合わせ</a></div>
							</div>
						</div>
						<!-- ステップ2 -->
						<div class="flow-item">
							<img src="https://attend-your-life.com/wp-content/uploads/2021/10/IMGP7452.jpg" alt="ステップ2">
							<div class="flow-item_textbox">
								<h3 class="flow-item_title">家事代行実施</h3>
								<p>当日、申し込み内容通りにサポートをいたします。<br>
								※当日のサポート内容変更希望の場合、担当スタッフ到着時にご相談ください</p>
							</div>
						</div>

					</div>


					<h2 class="flow_title flow_title-b" style="margin-top:50px !important;">晴れやか整理</h2>
					<div class="flow-body_inner">
						<!-- ステップ1 -->
						<div class="flow-item-b">
							<img src="http://attend-life.dev-webitch.xyz/wp-content/uploads/2021/10/4191330_s.jpg" alt="ステップ1">
							<div class="flow-item_textbox">
								<h3 class="flow-item_title">お申し込み</h3>
								<p>電話・もしくはLINEにて申し込みをお願いします。</p>
								<div class="contact-btn" style="text-align: center; padding-bottom: 10px;"><a href="https://lin.ee/8uvKBjK" class="btn btn-primary"><i class="far fa-envelope"></i>LINEでお問い合わせ</a></div>
							</div>
						</div>
						<!-- ステップ2 -->
						<div class="flow-item-b">
							<img src="http://attend-life.dev-webitch.xyz/wp-content/uploads/2021/09/IMGP7465.jpg" alt="ステップ2">
							<div class="flow-item_textbox">
								<h3 class="flow-item_title">無料相談</h3>
								<p>アテンドユアライフの生前整理診断士がご自宅に伺います。<br>
								ご要望・心配などお聞かせください。<br>
								ご相談時間は一時間半程度です。</p>
							</div>
						</div>
						<!-- ステップ3 -->
						<div class="flow-item-b">
							<img src="https://attend-your-life.com/wp-content/uploads/2021/10/IMGP7679.jpg" alt="ステップ3">
							<div class="flow-item_textbox">
								<h3 class="flow-item_title">整理作業日の決定</h3>
								<p>整理作業の予定を決めます。<br>
								部屋の間取りなどにより必要な日数・時間は異なります。</p>
							</div>
						</div>
						<!-- ステップ4 -->
						<div class="flow-item-b">
							<img src="http://attend-life.dev-webitch.xyz/wp-content/uploads/2021/10/IMGP7636.jpg" alt="ステップ4">
							<div class="flow-item_textbox">
								<h3 class="flow-item_title">整理作業実施</h3>
								<p>二人以上の有資格スタッフが伺います。<br>
								※量が多いなどの場合、作業終了時に次の整理作業日を決定</p>
							</div>
						</div>
						<!-- ステップ5 -->
						<div class="flow-item-b">
							<img src="http://attend-life.dev-webitch.xyz/wp-content/uploads/2021/10/IMGP7462.jpg" alt="ステップ5">
							<div class="flow-item_textbox">
								<h3 class="flow-item_title">レポート</h3>
								<p>作業の内容をまとめてお渡しします。</p>
							</div>
						</div>
					</div>

				</section><!-- [ /flow-body ] -->


			</div><!-- [ /#post-583 ] -->
		</div><!-- [ /.main-section ] -->
	</div><!-- [ /.site-body-container ] -->
</div><!-- [ /.site-body ] -->


<!-- 注意書きエリア -->
<section class="caution-body bgc-lightpink" >
	<h2 class="caution-title">ご利用前にお伝えしたいこと</h2>
	<ul class="cantion-items">
		<li class="cantion-item">
			<h3 class="cantion-item__title">プライバシーを守るために</h3>
			<p>お客様の電話・LINE等の連絡はすべて代表電話・会社LINEを通して行います。
			スタッフ個人へ電話番号・LINEアカウントの情報が渡ることはありません。
			サービスを行ってほしくない部屋・物などありましたら、申し込み・相談時にお伝えください。
			当日も、お伺いしたスタッフへ伝えていただければ対応いたします。
			</p>
		</li>
		<li class="cantion-item">
			<h3 class="cantion-item__title">提供サービスについて</h3>
			<p>
				・ハウスクリーニングの技術を必要とする、カビ、水垢、汚れの除去やエアコンクリーニング、<br>&nbsp;&nbsp;レンジフードの分解清掃等<br>
				・高所、重量物の運搬、医療廃棄物の処分等の危険作業<br>
				・配線等の専門資格を要する作業<br>
				・身体介護を伴う支援
			</p>
		</li>
	</ul>
	<p style="text-align:center;">以上につきましてはサービス提供範囲外です。その他、ご利用内容につきましてはご相談ください。</p>
	<ul class="cantion-items">
		<li class="cantion-item">
			<h3 class="cantion-item__title">貴重品の扱いについて</h3>
			<p>金銭、機密書類、高額商品、骨とう品等は、サポート中、他の場所での保管をお願いします。
				大切な家具・貴重品についても同様にお願いいたします。
			</p>
		</li>
		<li class="cantion-item">
			<h3 class="cantion-item__title">ごみの処分について</h3>
			<p>
			晴れやか整理ではごみの処分につきましては原則ご利用者様に行っていただきますことをご了承ください。 リサイクル・委託などは承っておりませんので、ご自身での処分をお願いいたします。リサイクルショップなどの業者のご案内は便宜させていただきますが、ご利用者様の責任により行っていただきます。
			</p>
		</li>
		<li class="cantion-item">
			<h3 class="cantion-item__title">生前整理はお片付けの代行ではございません。</h3>
			<p>ご利用者様ご自身で整えることができるよう一緒に作業し整え方を身につけていただきます。</p>
		</li>
	</ul>
</section><!-- [ /flow-body ] -->


<!-- //コンテンツエリア -->

<!-- サイトフッター -->
<?php get_template_part( 'template-parts/site-footer' ); ?>
