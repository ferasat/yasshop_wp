<?php
/*
Template Name: خانه
*/
 get_header(); ?>
<body id="home">
<section id="header">
<?php include ('template/header1.php'); ?>
</section>
<section id="main-sec">
<div class="container-fluid">
<div class="container padd0">
<div id="main">
<div class="row">
<div id="menu" class="col-md-12">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' =>'', 'menu_class' =>'mainnav' ) ); ?>
</div>
<div id="slideshow" class="col-md-12">
<div class="slideshow">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
</ol>
<div class="carousel-inner" role="listbox">
<div class="item active">
<img src="<?php bloginfo('template_url'); ?>/img/yasshop-slider.jpg" alt="بزرگترین فروشگاه اینترنتی زیورآلات مسی">
<div class="carousel-caption">
</div>
</div>
</div>
<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
<span class="sr-only">قبلی</span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">بعدی</span>
</a>
</div>
</div>
</div>
<div class="col-md-12">
<div class="box1">
<h1 class="headhome">
بزرگترین فروشگاه زیورآلات مسی
</h1>
<p class="discriptads">
پرداخت هزینه در محل
</p>
<p class="discriptads">
تضمین کیفیت کالا
</p>
<p class="discriptads">
100% ایرانی = کالایی ایرانی
</p>
</div>
<div class="col-md-3">
<div class="ih-item circle colored effect10 bottom_to_top"><a href="http://yasshop.ir/product-category/%d8%b2%db%8c%d9%88%d8%b1%d8%a2%d9%84%d8%a7%d8%aa/%d8%af%d8%b3%d8%aa%d8%a8%d9%86%d8%af/">
<div class="img"><img src="<?php bloginfo('template_url'); ?>/img/dastband.jpg" alt="دستبند مسی"></div>
<div class="info">
<h3 title="دستبند مسی">دستبند مسی</h3>
<p>دستبند مردانه و زنانه </p>
</div>
</a>
</div>
</div>
<div class="col-md-3">
<div class="ih-item circle colored effect10 bottom_to_top"><a href="http://yasshop.ir/product-category/%d8%b2%db%8c%d9%88%d8%b1%d8%a2%d9%84%d8%a7%d8%aa/%da%af%d8%b1%d8%af%d9%86%d8%a8%d9%86%d8%af/">
<div class="img"><img src="<?php bloginfo('template_url'); ?>/img/gardanband.jpg" alt="گردنبند مسی"></div>
<div class="info">
<h3 title="گردنبند مسی"> گردنبند مسی </h3>
<p>انواع گردنبند های مسی سنگی</p>
</div>
</a>
</div>
</div>
<div class="col-md-3">
<div class="ih-item circle colored effect10 bottom_to_top"><a href="http://yasshop.ir/product-category/%d8%b2%db%8c%d9%88%d8%b1%d8%a2%d9%84%d8%a7%d8%aa/%d8%a7%d9%86%da%af%d8%b4%d8%aa%d8%b1/">
<div class="img"><img src="<?php bloginfo('template_url'); ?>/img/angoshtar.jpg" alt="انگشتر مسی"></div>
<div class="info">
<h3 title="انگشتر مسی"> انگشتر مسی</h3>
<p>انگشتر مسی زنانه و مردانه</p>
</div>
</a>
</div>
</div>
<div class="col-md-3">
<div class="ih-item circle colored effect10 bottom_to_top"><a href="http://yasshop.ir/product-category/%d8%b2%db%8c%d9%88%d8%b1%d8%a2%d9%84%d8%a7%d8%aa/%d9%86%db%8c%d9%85-%d8%b3%d8%aa/">
<div class="img"><img src="<?php bloginfo('template_url'); ?>/img/set-mesi.jpg" alt="ست مسی"></div>
<div class="info">
<h3 title="ست مسی">ست های مسی</h3>
<p>ست و نیم ست های مسی</p>
</div>
</a>
</div>
</div>
</div>
<div class="col-md-12">
<div class="headhome">
<span>
جدیدترین زیورآلات مسی
</span>
</div>
<?php echo do_shortcode('
                          [recent_products per_page="4" columns="4"]
                          '); ?>
</div>
<div class="col-md-12">
<div class="col-md-4">
<div class="hover-fold">
<h2 title="زیورآلات مسی مذهبی" class='h2home'>
<a title="زیورآلات مسی مذهبی" href="http://yasshop.ir/product-tag/%d9%85%d8%b0%d9%87%d8%a8%db%8c/">زیورآلات مسی مذهبی</a>
</h2>
<div class="top">
<div class="front face"></div>
<div class="back face">
<p>طراحی و تولید انواع زیورالات مسی مذهبی و قرآنی با کیفیت و زیبا . </p>
</div>
</div>
<div class="bottom">دیدن</div>
</div>
</div>
<div class="col-md-4">
<div class="hover-fold">
<h2 title="زیورآلات مسی مذهبی" class='h2home'>
<a title="زیورآلات مسی مذهبی" href="http://yasshop.ir/product-tag/%d9%85%d8%b0%d9%87%d8%a8%db%8c/">زیورآلات مسی مذهبی</a>
</h2>
<div class="top">
<div class="front face"></div>
<div class="back face">
<p>طراحی و تولید انواع زیورالات مسی مذهبی و قرآنی با کیفیت و زیبا . </p>
</div>
</div>
<div class="bottom">دیدن</div>
</div>
</div>
<div class="col-md-4">
<div class="hover-fold">
<h2 title="زیورآلات مسی مذهبی" class='h2home'>
<a title="زیورآلات مسی مذهبی" href="http://yasshop.ir/product-tag/%d9%85%d8%b0%d9%87%d8%a8%db%8c/">زیورآلات مسی مذهبی</a>
</h2>
<div class="top">
<div class="front face"></div>
<div class="back face">
<p>طراحی و تولید انواع زیورالات مسی مذهبی و قرآنی با کیفیت و زیبا . </p>
</div>
</div>
<div class="bottom">دیدن</div>
</div>
</div>
</div>
<div class="col-md-12">
<div class="headhome">
<span>
محبوبترین زیورآلات مسی
</span>
</div>
<?php echo do_shortcode('
                          [products limit="4" columns="4" orderby="popularity" class="quick-sale" on_sale="true" ]
                          '); ?>
</div>
</div>
</div>
</div>
</div>
</section>
<?php get_footer(); ?>