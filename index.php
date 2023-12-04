<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<meta charset="utf-8" />
<meta name="format-detection" content="telephone=no">
<title>Front-end Engineer A</title>
<meta name="description" content="Front-end Engineer A のポートフォリオサイトです。">
<meta name="keywords" content="フロントエンド,エンジニア,コーダー,WEBデザイナー">
<link rel="stylesheet" href="css/style.css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
	var topBtn = $('.pagetop');
	topBtn.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 200) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
	topBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 1000);
		return false;
	});
	// #で始まるアンカーをクリックした場合に処理
	$('a[href^=#]').click(function() {
	// スクロールの速度
		var speed = 400; // ミリ秒
		// アンカーの値取得
		var href= $(this).attr("href");
		// 移動先を取得
		var target = $(href == "#" || href == "" ? 'html' : href);
		// 移動先を数値で取得
		var position = target.offset().top;
		// スムーススクロール
		$('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
	});
});
</script>

<!-- loading -->
<script>
$(function() {
  var h = $(window).height();
  $('#mainImg').css('display','none');
  $('#loader-bg ,#loader').height(h).css('display','block');
});
$(window).load(function () { //全ての読み込みが完了したら実行
  $('#loader-bg').delay(900).fadeOut(800);
  $('#loader').delay(600).fadeOut(300);
  $('#mainImg').css('display', 'block');
});
//10秒たったら強制的にロード画面を非表示
$(function(){
  setTimeout('stopload()',10000);
});
function stopload(){
  $('#mainImg').css('display','block');
  $('#loader-bg').delay(900).fadeOut(800);
  $('#loader').delay(600).fadeOut(300);
}
</script>

<!-- parallax -->
<script>
jQuery( window ).bind( 'scroll', function() {
	scrolled = jQuery( window ).scrollTop();
	weight2 = -0.3;
	weight3 = 0.1;
	if( scrolled > 800 ) {
    jQuery( '.menu_btn > .line' ).css( 'background-color', '#333' );
    jQuery( '#mainImg' ).css( 'display', 'none' );
  }else{
    jQuery( '.menu_btn > .line' ).css( 'background-color', '#FFF' );
    jQuery( '#mainImg' ).css( 'display', 'block' );
  }
	if( scrolled > 300 ) {
    jQuery( '#mainImg' ).addClass("scroll");
  }else{
    jQuery( '#mainImg' ).removeClass("scroll");
  }
	if( scrolled > 100 ) {
    jQuery( '#bg01' ).addClass("scroll");
  }else{
    jQuery( '#bg01' ).removeClass("scroll");
  }
	jQuery( '#bg02' ).css( 'top', 50 - scrolled * weight2 + 'vh' );
	jQuery( '#bg03' ).css( 'top', 100 - scrolled * weight3 + 'vh' );
});
</script>

<!-- スクロールアニメーション -->
<script>
$(function(){
$(window).scroll(function (){
	//フェードイン
	$('.fadein').each(function(){
		var elemPos = $(this).offset().top;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll > elemPos - windowHeight + 50){
			$(this).addClass('scrollin');
		}
	});
	//バウンド
	$('.bound').each(function(){
		var elemPos = $(this).offset().top;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll > elemPos - windowHeight + 50){
			$(this).addClass('boundin');
		}else{
			$(this).removeClass('boundin');
		}
	});
  //サイドイン
  $('.lBox').each(function(){
    var elemPos = $(this).offset().top;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll > elemPos - windowHeight + 50){
      $(this).addClass('onBox');
    }else{
			$(this).removeClass('onBox');
		}
  });
  $('.rBox').each(function(){
    var elemPos = $(this).offset().top;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll > elemPos - windowHeight + 50){
      $(this).addClass('onBox');
    }else{
			$(this).removeClass('onBox');
		}
  });
});
});
</script>

<!-- spNavi -->
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/main.js"></script>

<!-- WEBフォント google -->
<link rel="stylesheet" href="https://use.typekit.net/juf2bkd.css">

</head>
<body>

<!-- loading -->
<?php
  if(isset($_SESSION['count'])){$count = $_SESSION['count'];}
  else{$count = 0;}
  if($count == 0):
?>
<div id="loader-bg">
  <div id="loader">
    <img src="images/top/a_loading.png" alt="loading">
  </div>
</div>
<?php
  endif;
  $count++;
  $_SESSION['count'] = $count;
?>
<!-- /loading -->

<header>
	<!-- Navi -->
	<div class="btn_wrapper clearfix">
		<div class="menu_btn">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
	</div>
	<nav>
		<ul>
			<li><a href="#"><span class="fs140">TOP</span>　ページトップ</a></li>
			<li><a href="#profile"><span class="fs140">Profile</span>　自己紹介</a></li>
			<li><a href="#history"><span class="fs140">History</span>　経歴</a></li>
			<li><a href="#skill"><span class="fs140">Skill</span>　スキル</a></li>
			<li><a href="#responsive"><span class="fs140">Responsive</span>　レスポンシブ</a></li>
		</ul>
		<div class="menu_overlay"></div>
	</nav>
</header>
<article>

<!-- mainContents -->
<section class="box">
	<div id="mainImg">
		<div class="home">
			<h1><img src="images/top/a_logo.png" alt="Front-end Engineer A"></h1>
		</div>
		<div class="scroll">
			<img src="images/top/a_scroll.png" alt="scroll">
		</div>
	</div>
	<div id="bg01"></div>
	<div id="bg02"></div>
	<div id="bg03"></div>
</section>

<?php
date_default_timezone_set('Asia/Tokyo');
$toY = date('Y');
$num = ($toY - 2016);
?>
<section id="profile" class="box padh80">
	<div class="case">
		<h3 class="fadein">Profile</h3>
		<h5 class="fadein">自己紹介</h5>
		<p class="tac mt40">
			デザイナーからコーダーになり、<span class="dib">現在はフロントエンドエンジニア。</span><br>
			コーディング実務歴は約<?php echo $num; ?>年。
		</p>
	</div>
</section>

<section id="history" class="box bg01 padh80 mt20">
	<div class="case w02">
		<h3 class="fadein">History</h3>
		<h5 class="fadein">経歴</h5>
		<dl class="dlList mt40">
			<dt>高等学校</dt>
				<dd>授業でプログラミングの基礎（COBOL）を３年間学ぶ。<br>
				事務職を目指して簿記やExcelなどの検定を取得するが、デザイナーに憧れて専門学校へ進学。</dd>
			<dt>専門学校</dt>
				<dd>グラフィックデザインについて２年間学ぶ。<br>
				実務経験を積むため学校からの紹介されたデザイン事務所でアルバイトを始める。</dd>
			<dt>デザイナー</dt>
				<dd>アルバイト先から卒業後も働かないかと声をいただきデザイナーとして入社。<br>
				しかしWEB管理を担当していた先輩が突然辞めてしまい、急遽HTMLを覚えることに。</dd>
			<dt>コーダー</dt>
				<dd>COBOLの下地があったため３日ほどで簡単なコードなら組めるようになり、<span class="dib">嬉しくてCSSの勉強も始める。</span><br>
				名刺の肩書きがデザイナー兼WEBコーダーに変更されていた。</dd>
			<dt>エンジニア</dt>
				<dd>パララックスの案件が増え、JavaScriptの勉強を始める。<br>
				支給された名札の肩書がエンジニアだった。とうとうデザイナーは消えたようだ。<br>
				この辺りでCSSアニメーションの面白さに目覚める。</dd>
			<dt>現在</dt>
				<dd>フロントエンドをメインで担当するように。<br>
				クライアント側で更新しやすいようにWordPressを使用することが多い。</dd>
		</dl>
	</div>
</section>

<section id="skill" class="box padh80">
	<div class="case">
		<h3 class="fadein">Skill</h3>
		<h5 class="fadein">技能</h5>
		<div class="imgList b3cols sp2cols mt60">
			<div class="b3col bound">
				<img src="images/top/b_img01.jpg" alt="HTML／CSS">
				<p>HTML／CSS</p>
			</div>
			<div class="b3col bound speed2">
				<img src="images/top/b_img02.jpg" alt="PHP">
				<p>PHP</p>
			</div>
			<div class="b3col bound speed3">
				<img src="images/top/b_img03.jpg" alt="JavaScript">
				<p>JavaScript</p>
			</div>
			<div class="b3col bound mt60">
				<img src="images/top/b_img04.jpg" alt="WordPress／CMS">
				<p>WordPress／<span class="dib">CMS</span></p>
			</div>
			<div class="b3col bound speed2 mt60">
				<img src="images/top/b_img05.jpg" alt="Photoshop／Illustrator">
				<p>Photoshop／<span class="dib">Illustrator</span></p>
			</div>
			<div class="b3col bound speed3 mt60">
				<img src="images/top/b_img06.jpg" alt="XD／Figma">
				<p>XD／Figma</p>
			</div>
		</div>
	</div>

	<div class="case w03 mt100">
		<div class="b2cols">
			<div class="b2col fadein marge01">
				<h4>WEBサイト</h4>
				<ul class="dotList mt20">
					<li>レスポンシブデザインで様々な端末に対応</li>
					<li>パララックスやCSSアニメーションで動きをつける</li>
					<li>完全オリジナルのWordPressテーマを作成</li>
					<li>XD・Figmaなどのデザインを元に構築</li>
					<li>GitHubでのデータ共有</li>
				</ul>
			</div>
			<div class="b2col fadein fade2 single01">
				<h4>その他</h4>
				<ul class="dotList mt20">
					<li>Photoshop・Illustratorでの画像加工</li>
					<li>Excelでの表計算およびグラフ作成</li>
					<li>PDF・Word・PowerPointなどの基本操作</li>
					<li>Evernote・Slack・<span class="dib">Messenger</span>・<span class="dib">Talknote</span>・<span class="dib">Chatwork</span><span class="dib">などの基本操作</span></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section id="responsive" class="box bg01 mt20">
	<div class="lrBox">
		<div class="lBox">
			<img src="images/top/c_img01.png" alt="PC">
		</div>
		<div class="rBox">
			<img src="images/top/c_img02.png" alt="スマホ・タブレット">
		</div>
		<div class="case w03 padh80">
			<h3 class="fadein">Responsive</h3>
			<h5 class="fadein mt05">レスポンシブ</h5>
			<p class="tac mt40">
				PC・スマホだけでなくタブレットや大型モニターなど、あらゆる画面に対応。<br>
				ウィンドウのサイズに応じてレイアウトを自動調整します。
			</p>
		</div>
	</div>
</section>

</article>
<footer>
	<div class="case">
		<p class="fs80 tac mt15">© 2023 Front-end Engineer A</p>
	</div>
	<div class="pagetop"><a href="#"><img src="images/common/pagetop.png" alt="ページトップへ"></a></div>
</footer>

</body>
</html>
