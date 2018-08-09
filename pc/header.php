<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=no">
<title>三輪塗装グループ</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/index.ico" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

<!-- Bootstrap -->
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/allpage.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/css/page.css" rel="stylesheet" type="text/css">

<?php if(is_post_type_archive('ekaken')||is_singular( 'ekaken' )||is_tax('ekaken_cat') ): ?>
<!-- Eka券 -->
<link href="<?php echo get_template_directory_uri(); ?>/css/ekaken.css" rel="stylesheet" type="text/css">
<!-- /Eka券 -->
<?php endif; ?>

<?php if(is_post_type_archive('media')||is_singular( 'media' ) ): ?>
<!--メディア -->
<link href="<?php echo get_template_directory_uri(); ?>/css/media.css" rel="stylesheet" type="text/css">
<!-- /メディア -->
<?php endif; ?>

<?php if(is_page(2423)|| is_page(2429)): ?>
<!-- お問い合わせ -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/contact.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/contact.js"></script>
<!-- /お問い合わせ -->
<?php endif; ?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php if(is_post_type_archive('ekaken')||is_singular( 'ekaken' )||is_tax('ekaken_cat') ): ?>
<!-- Eka券 -->
<?php if(is_mobile()) { ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.display-more.js"></script>
	<script>
$(function() {
    $('.show_more_open.row').displayMore({
        itemElement : '> .open.clearfix',
        showNumber  : 1,
        openText				: 'もっと見る',
        closeText			: '閉じる',
        openButtonClass	:	'close-btn',
    });
});</script>
<?php } ?>

<!-- /Eka券 -->
<?php endif; ?>

<link href="<?php echo get_template_directory_uri(); ?>/css/lightbox.css" type="text/css" rel="stylesheet" media="all" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script>
$(function () {
var width = $(window).width();
if( width < 640 ){
	$(".toggleImg").each(function(){
		$(this).attr("src", $(this).attr("src").replace("_pc","_sp"));
	})
}
});
</script>

<?php wp_head(); ?>
</head>
<body>
<header id="head" class="clearfix">
  <h1 id="h_logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/head/h_logo.gif" width="400" height="65" alt="三輪塗装グループ" class="img-responsive img_over"></a></h1>
  <div class="head_inner sp_none">
    <div class="h_right">
      <div class="moji">文字サイズ
        <ul id="fontSize" class="btn-group" role="group">
          <li class="middle btn current">標準</li>
          <li class="large btn">大</li>
        </ul>
      </div>
      <p class="contact"><a href="<?php bloginfo('url'); ?>/contact"><img src="<?php echo get_template_directory_uri(); ?>/images/head/head_btn.gif" width="241" height="40" alt="お問い合わせバナー" class="img_over"></a></p>
      <p>&nbsp;</p>
    </div>
  </div>
  <!--============================================= Head_Nav-->
  <nav id="head_nav" class="navbar navbar-default"> <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="menu-trigger navbar-toggle pc_none" id="menu-trigger01" href="#" data-toggle="collapse" data-target="#defaultNavbar1">
		<span></span>
		<span></span>
		<span></span>
	</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav nav-justified">
        <li><a href="<?php bloginfo('url'); ?>">ホーム</a></li>
        <li class="dropdown"><a href="<?php bloginfo('url'); ?>/#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">三輪塗装グループについて</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php bloginfo('url'); ?>/company">会社案内</a></li>
            <li><a href="<?php bloginfo('url'); ?>/greeting">代表あいさつ</a></li>
			<li><a href="<?php bloginfo('url'); ?>/interview_executive">スタッフインタビュー</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="<?php bloginfo('url'); ?>/#jigyou_annai" class="dropdown-toggle">事業案内</a>
          <!--<ul class="dropdown-menu" role="menu">
            <li><a href="#">テキストテキストテキスト</a></li>
            <li><a href="#">テキストテキストテキスト</a></li>
            <li><a href="#">テキストテキストテキスト</a></li>
            <li><a href="#">テキストテキストテキスト</a></li>
            <li><a href="#">テキストテキストテキスト</a></li>
            <li><a href="#">テキストテキストテキスト</a></li>
		  </ul>-->
        </li>
        <li class="dropdown"><a href="<?php bloginfo('url'); ?>/csr" class="dropdown-toggle">ＣＳＲ・地域への取り組み</a>
          <!--<ul class="dropdown-menu" role="menu">
            <li><a href="#">テキストテキストテキスト</a></li>
            <li><a href="#">テキストテキストテキスト</a></li>
            <li><a href="#">テキストテキストテキスト</a></li>
            <li><a href="#">テキストテキストテキスト</a></li>
            <li><a href="#">テキストテキストテキスト</a></li>
            <li><a href="#">テキストテキストテキスト</a></li>
		  </ul>-->
        </li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">採用情報</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php bloginfo('url'); ?>/recruit">採用案内</a></li>
            <li><a href="<?php bloginfo('url'); ?>/interview_staff01">三輪塗装ってどんな会社？</a></li>
		  </ul>
        </li>
        <li class="pc_none"><a href="<?php bloginfo('url'); ?>/contact">お問い合わせ</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </nav>
    <!-- analytics -->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-79391112-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- analytics -->
</header>
