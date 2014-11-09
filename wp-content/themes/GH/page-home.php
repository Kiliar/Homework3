<!DOCTYPE html>
<html>
<head>
	<title>GeekHub</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.6.4.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/prefixfree.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/flipclock.min.js"></script>
    <script type="text/javascript" src="http://userapi.com/js/api/openapi.js?34"></script>
     <script type="text/javascript">
        $(function(){
        	$('.courses li').click(function(){
                var index = $(this).index();
                window.location = '<?php bloginfo(url) ?>/category/courses?'+index;
                return false;
            });
        });
      </script>
</head>
<body>
	<header>
		<div class="header">
		<nav>
			<h1><a class="hide" href="http://geekhub.ck.ua/">GeekHub</a></h1>
			<ul class="menu-header">
				<li ><a href="#" class="home active">головна</a></li>
				<li><a href="<?php bloginfo(url) ?>/about">про geekhub</a></li>
				<li><a href="<?php bloginfo(url) ?>/team">команда</a></li>
				<li><a href="<?php bloginfo(url) ?>/faq">faq</a></li>
				<li><a href="<?php bloginfo(url) ?>/contact">зв'язок</a></li>
			</ul>
			<ul class="social-links">
				<li class="facebook "><a class="hide" href="#">facebook</a></li>
				<li class="vk"><a class="hide" href="#">vk</a></li>
				<li class="twitter"><a class="hide" href="#">twitter</a></li>
				<li class="youtube"><a class="hide" href="#">youtube</a></li>
			</ul>
		</nav>
		<div class="information">
			<?php 
			$page = get_page_by_title( 'home' );
			echo $page->post_content;
			 ?>
		</div>
	</div>
	</header>
	<div class="content">
		<h2>деталі курсів та реєстрація</h2>
		<ul class="courses">
			<?php query_posts('orderby=date&order=ASC'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
 			<li>
 			<?php the_post_thumbnail() ?>
 				<strong><?php the_title(); ?></strong>
 			<?php the_excerpt(); ?>
 				<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Докладніше + реєстрація</a>
 			</li>
 			<?php endwhile; ?>
 			<?php endif; ?>
		</ul>
	</div>
	<footer>
		<div calass="vk-groop" id="vk">
			<script type="text/javascript">
                VK.Widgets.Group("vk", {mode: 0, width: "276", height: "240"}, 30111409);
            </script>
        </div>
        <a href="#" class="sertificates_list hide" >Сертифiкованi професiонали</a>
        <div class="sponsors">
        	<strong>наші спонсори</strong>
        	<ul class="sponsors-list">
        		<li class="de"><a href="http://povnahata.com">Дім Євангелія</a></li>
            	<li class="moc"><a href="http://masterofcode.com">Masterofcode LTD</a></li>
           		<li class="sergium"><a href="http://sergium.net">SerGium.net</a></li>
          		<li class="clear left stuff"><a href="http://val.co.ua/">val.co.ua/</a></li>
           		<li class="youthog"><a href="http://yothog.com">Youthog.com</a></li>
          		<li class="jetbrains"><a href="http://jetbrains.com/">JetBrains.com</a></li>
          		<li class="ucoz"><a href="http://rabota.ucoz.ua/">ucoz.ua</a></li>
           		<li class="spd-ukraine"><a href="http://spd-ukraine.com/">SPD-Ukraine.com</a></li>
          		<li class="ekreative"><a href="http://www.ekreative.com/">Ekreative.com</a></li>
          		<li class="n3wnormal"><a href="http://n3wnormal.com/">n3wnormal.ua</a></li>
          		<li class="in-ck-ua"><a href="http://in.ck.ua/">in.ck.ua</a></li>
        	</ul>
        </div>
        <ul class="footer-nav">
        	<li><a href="#">головна</a></li>
			<li><a href="#">про geekhub</a></li>
			<li><a href="#">команда</a></li>
			<li><a href="#">faq</a></li>
			<li><a href="#">зв'язок</a></li>
        </ul>
	</footer>
</body>
</html>