<?php /*افزونه به سبد خرید*/
defined( 'ABSPATH' ) || exit;
do_action( 'woocommerce_before_add_to_cart_form' ); 
?>

<form class="cart pp" action="<?php echo esc_url( $product_url ); ?>" method="get">
	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

	<button type="submit" class="single_add_to_cart_button button alt">
	<i class="fas fa-cart-plus"></i>
	<?php echo esc_html( $button_text ); ?>
	</button>

	<?php wc_query_string_form_fields( $product_url ); ?>

	<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
</form>

<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>
