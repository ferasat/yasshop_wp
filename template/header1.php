<div class="container-fluid padd0">
    <div class="container margintop32">
        <div class="row">
            <div class="col-md-3">
                <div id="logo">
                    <img title="<?php bloginfo('name'); ?>" src="<?php echo of_get_option('logo_uploader', 'Not Set'); ?>" alt="<?php bloginfo('name'); ?>" class="logo img-responsive">
                </div>
            </div>
            <div class="col-md-9 box_lrt">
              <div class="boxtopmenu">
               <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                <a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
                 <?php echo WC()->cart->get_cart_total(); ?>
                </a>
              </div>
              <div class="boxtopmenu">
               <i class="fa fa-user" aria-hidden="true"></i>
                <a class="linkboxtop" href="http://yasshop.ir/my-account/">
                    <span>حساب کاربری</span>
                </a>
              </div>
            </div>
        </div>
    </div>
</div>