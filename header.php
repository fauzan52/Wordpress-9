<?php
    global $fauzanredux;
?>
<!DOCTYPE html>
<html>
<head>
	<marquee width="" direction="left" height="10px">ALAMAT TOKO : TAMAN BUKIT CIBOGO, CIMAHI</marquee>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body>
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 logo">
                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $fauzanredux['logo']['url'] ?>" alt=""></a>
                <div class="resposive-menu"></div>
            </div>
            <div class="col-md-9 col-xs-12">
                <div class="header-right">
                    <a href="<?php echo esc_url('www.google.com'); ?>"><img src="<?php echo $fauzanredux['header-logo']['url'] ?>" alt=""></a>
                </div>
            </div>
        </div>
    </div>
		<nav>
		<?php
			$args = array ('theme_location' => 'main_menu');
			wp_nav_menu($args);
		?>
		</nav>

        <!-- <div id="search_form">
         <?php get_search_form(); ?>
        </div> -->
        <div class="clear"></div>
</header>

</body>
</html>