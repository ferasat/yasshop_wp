<?php get_header(); ?>
<body id="woocommerce">
<section id="header">
    <?php include ('template/header2.php'); ?>
</section>
<section id="main-sec">
    <div class="container-fluid">
        <div class="container padd0">
           <div id="main">
            <div class="row">
                   <div id="menu" class="col-md-12">
                        <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' =>'', 'menu_class' =>'mainnav' ) ); ?>
                   </div>
                   
                   <div class="col-md-12">
                       <div class="single">
                         <?php woocommerce_content(); ?>                               
                       </div>
                       
                   </div>
            </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>