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

	<section class="container mx-auto px-4 py-12">
		<?php
		$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

		if ( $heading ) : ?>
			<h2 class="text-center text-2xl lg:text-3xl text-slate-800 font-bold mb-10">
				<?php echo esc_html( $heading ); ?>
			</h2>
		<?php endif; ?>

		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
			<?php foreach ( $related_products as $related_product ) :
				$product_id = $related_product->get_id();
				$post_object = get_post( $product_id );
				setup_postdata( $GLOBALS['post'] = $post_object );
			?>
				<div class="border-b-2 border-slate-700 overflow-hidden flex flex-col items-center">
					<a href="<?php the_permalink(); ?>">
						<?php woocommerce_show_product_sale_flash(); ?>
						<div class="border-[8px] border-[#E84C77] rounded-3xl overflow-hidden">
							<?php woocommerce_template_loop_product_thumbnail(); ?>
						</div>
					</a>
					<div class="p-4 text-center">
						<h2 class="text-lg font-bold h-10"><?php the_title(); ?></h2>
						<div class="mt-2 font-semibold"><?php woocommerce_template_loop_price(); ?></div>
						<div class="mt-4"><?php woocommerce_template_loop_add_to_cart(); ?></div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<?php wp_reset_postdata(); ?>
	</section>

<?php endif; ?>
