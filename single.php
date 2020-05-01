<?php get_header(); ?>

<body id="single">
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
                        <div class="col-md-3">
                            <?php include ('template/sidebar-r.php'); ?>
                        </div>
                        <div class="col-md-9">
                            <div class="col-md-12">
                                <div class="single">
                                                             <?php if (have_posts()) :  while (have_posts()) : the_post();
                            $id_thumbnail = get_post_thumbnail_id();
                            $thumbnail_size = 'full'; // or array(width, height);
                            $thumbnail = wp_get_attachment_image_src($id_thumbnail, $thumbnail_size);// the_post_thumbnail('thumbnail');
                            $url_thumbnail = $thumbnail[0];
                         ?>
                         <div class="col-md-12 padd0 mrgt-b5 center">
                               <img alt="<?php the_title(); ?>" title="<?php the_title(); ?>" src="<?php echo $url_thumbnail; ?>" class="img-responsive center">
                        </div>
                                    <h1 class="entry-title headbimar yellow" title="<?php the_title_attribute(); ?>">
                                        <a class="subject-h1" href="<?php the_permalink() ?>"  title="<?php the_title_attribute(); ?>">
                                            <?php the_title(); ?></a>
                                    </h1>
                                    <div class="col-md-12 post-info">
                                        <div>
                                            <div class="info-box"><i class="fa fa-bars"></i>
                                                <?php the_category(', ') ?>
                                            </div>
                                            <div class="info-box"><i class="fa fa-calendar"></i>
                                                <?php the_time('y-m-d') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 textpost">
                                        <?php the_content(' &raquo;'); ?>
                                    </div>
                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                    <?php
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('
<p id="breadcrumbs">','</p>
');
}
?>
                                    <div class="headbimar yellow tags"><i class="fa fa-tags fa-flip-horizontal iconhead" aria-hidden="true"></i>
                                        <?php the_tags('برچسب ها : ', ' ، ', ''); ?>
                                    </div>
                                </div>
                                <div class="hide">
                                    <a href="http://mehrepedar.ir/%D8%A8%DB%8C%D8%B4-%D9%81%D8%B9%D8%A7%D9%84%DB%8C-%D8%AF%D8%B1-%D8%A7%D8%B5%D9%81%D9%87%D8%A7%D9%86/" title="بیش فعالی در اصفهان" class="hidelink" rel="bookmark">بیش فعالی در اصفهان</a>
                                    <a href="http://mehrepedar.ir/%d8%af%d8%b1%d9%85%d8%a7%d9%86-%d8%a7%d8%ae%d8%aa%d9%84%d8%a7%d9%84-%d8%aa%d9%88%d8%ac%d9%87-%d9%88-%d8%aa%d9%85%d8%b1%da%a9%d8%b2-%d8%af%d8%b1-%d8%a7%d8%b5%d9%81%d9%87%d8%a7%d9%86/" title="درمان اختلال توجه و تمرکز در اصفهان" class="hidelink" rel="bookmark">درمان اختلال توجه و تمرکز در اصفهان</a>
                                    <a href="http://mehrepedar.ir/%d8%af%d8%b1%d9%85%d8%a7%d9%86-%d8%a7%d9%88%d8%aa%db%8c%d8%b3%d9%85-%d8%af%d8%b1-%d8%a7%d8%b5%d9%81%d9%87%d8%a7%d9%86/" title="درمان اوتیسم در اصفهان" class="hidelink" rel="bookmark">درمان اوتیسم در اصفهان</a>
                                    <a href="http://mehrepedar.ir/%da%a9%d8%a7%d8%b1%d8%af%d8%b1%d9%85%d8%a7%d9%86%db%8c-%d8%af%d8%b1-%d8%a7%d8%b5%d9%81%d9%87%d8%a7%d9%86/" title="کاردرمانی در اصفهان" class="hidelink" rel="bookmark">کاردرمانی در اصفهان</a>
                                    <a href="http://mehrepedar.ir/%da%af%d9%81%d8%aa%d8%a7%d8%b1%d8%af%d8%b1%d9%85%d8%a7%d9%86%db%8c-%d8%af%d8%b1-%d8%a7%d8%b5%d9%81%d9%87%d8%a7%d9%86/" title="گفتاردرمانی در اصفهان" class="hidelink" rel="bookmark">گفتاردرمانی در اصفهان</a>
                                    <a href="http://mehrepedar.ir/%d9%85%d8%b4%d8%a7%d9%88%d8%b1-%da%a9%d9%88%d8%af%da%a9-%d9%88-%d9%86%d9%88%d8%ac%d9%88%d8%a7%d9%86-%d8%af%d8%b1-%d8%a7%d8%b5%d9%81%d9%87%d8%a7%d9%86/" title="مشاور کودک و نوجوان در اصفهان" class="hidelink" rel="bookmark">مشاور کودک و نوجوان در اصفهان</a>
                                </div>
                                <div class="col-md-12 coments" id="comments_wrapper">
                                    <?php comments_template(); ?>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
