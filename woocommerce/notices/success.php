<?php
/**
 * Show messages
 * نمایش اضافه شدن به سبد خرید
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! $messages ) {
	return;
}

?>

<?php foreach ( $messages as $message ) : ?>
	<div class="woocommerce-message" role="alert">
		<?php
			echo wc_kses_notice( $message );
		?>
	</div>
<?php endforeach; ?>
