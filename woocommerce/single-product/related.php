<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs, the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<section class="hidden xl:block related products py-5">
		<?php
		$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

		if ( $heading ) :
			?>
			<h2 class="text-2xl font-bold mb-4 text-center"><?php echo esc_html( $heading ); ?></h2>
		<?php endif; ?>

		<div>
			<?php woocommerce_product_loop_start(); ?>
			
				<?php foreach ( $related_products as $related_product ) : ?>
					<?php
					$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found
					?>

					<div class="flex flex-col bg-white md:h-[60vh] shadow-lg rounded-lg overflow-hidden">
						<div class="md:h-[55vh] overflow-hidden flex justify-center items-center">
							

							<a href="<?php echo esc_url(get_permalink($related_product->get_id())); ?>" 
								   class="md:hidden flex justify-center">
								   <img
								class="object-cover w-1/2"
								src="<?php echo wp_get_attachment_url($related_product->get_image_id()); ?>" 
								alt="<?php echo esc_attr($related_product->get_name()); ?>"
							/>
							</a>

							

						</div>
						<div class="hidden md:flex flex-col items-center p-2">
						<img
								class="object-cover w-[70%]"
								src="<?php echo wp_get_attachment_url($related_product->get_image_id()); ?>" 
								alt="<?php echo esc_attr($related_product->get_name()); ?>"
							/>
							<div class='text-center'>
								<span class="mt-2 font-bold text-lg line-clamp-2"><?php echo $related_product->get_name(); ?></span>
								<span class="font-semibold text-slate-950">
									<br>
									<?php echo wc_price($related_product->get_price()); ?>
								</span>
								<br>
								<span><?php echo get_field('type', $related_product->get_id()); ?></span>
							</div>
							<div>
							<a href="<?php echo esc_url(get_permalink($related_product->get_id())); ?>" 
							class="my-5 h-10 md:w-36 w-20 flex items-center bg-[#E84C77] hover:bg-[#D43F6A] text-slate-100 rounded-full justify-center">
									Se produkt</span>
							</a>
							</div>
						</div>
					</div>
					
				<?php endforeach; ?>
			

			<?php woocommerce_product_loop_end(); ?>
		</div>
	</section>

<?php endif;

wp_reset_postdata();
