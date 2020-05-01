<?php 
/*
Template Name: تمام صفحه
*/
get_header(); ?>
<body id="page">
<section id="header">
    <?php include ('template/header2.php'); ?>
</section>
<section id="main-sec">
    <div class="container-fluid">
        <div class="container padd0">
           <div id="main">
            <div class="row">

               <div class="col-md-12">
                   <div id="menu" class="col-md-12">
                        <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' =>'', 'menu_class' =>'mainnav' ) ); ?>
                   </div>
                   
                   <div class="col-md-12">
                       <div class="single">
                         <?php if (have_posts()) :  while (have_posts()) : the_post();
                            $id_thumbnail = get_post_thumbnail_id();
                            $thumbnail_size = 'full'; // or array(width, height);
                            $thumbnail = wp_get_attachment_image_src($id, $thumbnail_size);// the_post_thumbnail('thumbnail');
                            $url_thumbnail = $thumbnail[0];
                         ?>
                         <?php if($id_thumbnail){ ?>
                         <div class="col-md-12 center">
                              
                               <img alt="<?php the_title(); ?>" title="<?php the_title(); ?>" src="<?php echo $url_thumbnail; ?>" class="img-responsive center">
                               
                         </div>
                         <?php } ?>
                          <h1 class="entry-title headbimar yellow" title="<?php the_title_attribute(); ?>">
                          <span><a class="subject-profilo-single" href="<?php the_permalink() ?>" rel="bookmark" target="_blank" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a> </span>
                          </h1>
                             
                            <div class="col-md-12 textpost">
                                <?php the_content(' &raquo;'); ?>
                            </div>
                           <?php endwhile; endif; ?>
                               
                       </div>
                       
                   </div>
                   
               </div>
            </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>