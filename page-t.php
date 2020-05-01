<?php
/*
Template Name: page Test
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
                       <?php echo do_shortcode('[smartslider3 slider=5]');?>
                       </div>
                 </div>
                   <div class="col-md-12">
                   <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                       <div class=" textpost">
                           <?php the_content(' &raquo;'); ?>
                       </div>
                   <?php endwhile;  endif; ?>	   
                   </div>
            </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>