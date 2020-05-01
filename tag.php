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
                        <div class="col-md-12">
                            <div class="head-tag">
                                <h1 class="entry-title" title="<?php single_tag_title(); ?>">
                                    <?php single_tag_title(); ?>
                                </h1>
                                <?php if ( tag_description() ) : ?>
                                <div class="archive-meta">
                                    <?php echo tag_description(); ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <?php include ('template/sidebar-r.php'); ?>
                        </div>
                        <div class="col-md-9">

                            
                            <div class="single">
                                <?php if (have_posts()) :  while (have_posts()) : the_post();
                                $title_sub = the_title_attribute();
                            $id_thumbnail = get_post_thumbnail_id();
                            $thumbnail_size = 'index-pst-i'; // or array(width, height);
                            $thumbnail = wp_get_attachment_image_src($id_thumbnail, $thumbnail_size);// the_post_thumbnail('thumbnail');
                            $url_thumbnail = $thumbnail[0];
                         ?>
                                <div class="block">
                                    <div class="col-md-3 padd0 mrgt-b5">
                                        
                                        <a href="<?php the_permalink() ?>">
                                        <?php the_post_thumbnail( 'index-pst-i',array('class' => 'img-responsive center','alt'=>$title_sub )); ?>
                                        </a>
                                    </div>
                                    <div class="col-md-9">
                                        <h2 class="headbimar yellow">
                                            <span><a class="subject-link-a" href="<?php the_permalink() ?>" rel="bookmark" target="_blank" title="<?php the_title_attribute(); ?>">
                                                    <?php the_title(); ?></a> </span>
                                        </h2>
                                        <div class="col-md-12 post-info">
                                            <div class="block">
                                                <div class="info-box"><i class="fa fa-bars"></i>
                                                    <?php the_category(', ') ?>
                                                </div>
                                                <div class="info-box"><i class="fa fa-calendar"></i>
                                                    <?php the_time('y-m-d') ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 textpost">
                                            <?php the_excerpt('ادامه نوشته &raquo;'); ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; endif; ?>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
