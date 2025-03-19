<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
    echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
    return;
}
?>

<form name="checkout" method="post" class="checkout woocommerce-checkout md:mx-32  p-6 bg-red-100 border-[1px] border-teal-500 shadow-lg rounded-lg" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

    <?php if ( $checkout->get_checkout_fields() ) : ?>

        <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

        <div class="mb-6" id="customer_details">
            <h2 class="text-2xl text-teal-600 font-bold mb-4"><?php esc_html_e( 'Billing Details', 'woocommerce' ); ?></h2>
            <?php do_action( 'woocommerce_checkout_billing' ); ?>
        </div>

        <div class="mb-6">
            <h2 class="text-2xl font-bold mb-4"><?php esc_html_e( 'Shipping Details', 'woocommerce' ); ?></h2>
            <?php do_action( 'woocommerce_checkout_shipping' ); ?>
        </div>

        <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

    <?php endif; ?>

    <?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>

    <h3 id="order_review_heading" class="text-2xl font-bold my-4"><?php esc_html_e( 'Your Order', 'woocommerce' ); ?></h3>

    <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

    <div id="order_review" class="woocommerce-checkout-review-order bg-red-100 border-[1px] border-teal-500 p-4 rounded-lg shadow-md mb-6">
        <?php do_action( 'woocommerce_checkout_order_review' ); ?>
    </div>

    <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

    <div class="mt-6">
        <button type="submit" class="w-full bg-teal-400 text-white font-semibold py-3 rounded-lg hover:bg-teal-600 transition duration-200">
            <?php esc_html_e( 'Afgiv ordre', 'woocommerce' ); ?>
        </button>
    </div>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
