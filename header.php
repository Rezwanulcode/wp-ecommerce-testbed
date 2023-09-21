<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MobileEcom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'mobileecom'); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<?php
				the_custom_logo();

				if (is_front_page() && is_home()) :
				?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
				else :
				?>
					<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
				endif;
				$mobileecom_description = get_bloginfo('description', 'display');
				if ($mobileecom_description || is_customize_preview()) :
				?>
					<p class="site-description"><?php echo $mobileecom_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
															?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'mobileecom' ); 
																															?></button>
				<?php echo 	the_custom_logo(); ?>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>

				<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e('View your shopping cart'); ?>"><?php echo sprintf(_n('%d item', '%d items', WC()->cart->get_cart_contents_count()), WC()->cart->get_cart_contents_count()); ?> – <?php echo WC()->cart->get_cart_total();
																																																																																							// echo "<pre>";
																																																																																							// print_r(WC()->cart);
																																																																																							// echo "</pre>";

																																																																																							?></a>

				<!-- <table class="cart-table">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <?php
			foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
				$_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
			?>
            <tr>
                <td><?php echo $_product->get_title(); ?></td>
                <td><?php echo wc_price($_product->get_price()); ?></td>
                <td><?php echo $cart_item['quantity']; ?></td>
                <td><?php echo wc_price($cart_item['line_subtotal']); ?></td>
            </tr>
            <?php
			}
				?>
    </tbody>
</table> -->

				<?php
				// do_action('shoppingcart_cart_wishlist_icon_display');

				// the_widget('WC_Widget_Cart', '');
				echo "mukto wishlist";
				echo 	do_shortcode("[yith_wcwl_items_count] ");
				?>

				<?php
				echo "wishlist";
				echo 	do_shortcode('[yith_wcwl_wishlist]');


				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->