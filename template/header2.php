<div class="container-fluid padd0">
    <div class="container margintop32">
        <div class="row">
            <div class="col-md-4">
                <div id="logo">
                    <a href="<?php bloginfo('url'); ?>"><img title="<?php bloginfo('name'); ?>" src="<?php echo of_get_option('logo_uploader', 'Not Set'); ?>" alt="<?php bloginfo('name'); ?>" class="logo img-responsive"></a>
                </div>
                <div class="txtlogo" title="<?php bloginfo('name'); ?>">
                     <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"> <?php bloginfo('name'); ?></a>
                </div>
            </div>
            <div class="col-md-8 box_lrt">
				
                <div class="boxtopmenu">
                    <i class="fab fa-telegram"></i>
                    <a class="cart-contents" href="https://t.me/yasshop" title="تلگرام فروشگاه یاس">
                        <span>کانال تلگرام</span>
                    </a>
                </div>
                <div class="boxtopmenu">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    <a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
                        <?php echo WC()->cart->get_cart_total(); ?>
                    </a>
                </div>
                <div class="boxtopmenu">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <a class="linkboxtop" href="http://yasshop.ir/profile/">
                        <span>حساب کاربری</span>
                    </a>
                </div>
                <?php echo do_shortcode('[wcas-search-form]'); ?>
            </div>
        </div>
    </div>
</div>