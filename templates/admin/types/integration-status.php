<?php
/**
 * Integration status
 *
 * @author  YITH
 * @package YITH\Mailchimp\Templates\Admin\Types
 * @version 1.0.0
 */

if ( ! defined( 'YITH_WCMC' ) ) {
	exit;
} // Exit if accessed directly
?>
<tr valign="top">
	<th scope="row" class="titledesc">
		<label for="<?php echo esc_attr( $value['id'] ); ?>"><?php echo esc_html( $value['title'] ); ?></label>
	</th>
	<td class="forminp forminp-<?php echo esc_attr( sanitize_title( $value['type'] ) ); ?> <?php echo esc_attr( sanitize_title( $value['type'] ) ); ?>">
		<div class="account-banner">
			<div class="account-avatar">
				<div class="account-thumb">
					<?php echo get_avatar( $email, 96 ); ?>
				</div>
				<div class="account-name tips" data-tip="<?php echo ! empty( $username ) ? esc_html__( 'MailChimp user', 'yith-woocommerce-mailchimp' ) : esc_html__( 'No user can be found with this API key', 'yith-woocommerce-mailchimp' ); ?>">
					<?php echo ! empty( $username ) ? esc_html( $username ) : esc_html__( '&lt; Not Found &gt;' ); ?>
				</div>
			</div>
			<div class="account-details">
				<p class="account-info">
					<span class="label"><b><?php esc_html_e( 'Status:', 'yith-woocommerce-mailchimp' ); ?></b></span>

					<?php if ( ! empty( $user_id ) ) : ?>
						<mark class="completed tips" data-tip="<?php esc_attr_e( 'Correctly synchronized', 'yith-woocommerce-mailchimp' ); ?>"><?php esc_html_e( 'OK', 'yith-woocommerce-mailchimp' ); ?></mark>
					<?php else : ?>
						<mark class="cancelled tips" data-tip="<?php esc_attr_e( 'Wrong API key', 'yith-woocommerce-mailchimp' ); ?>"><?php esc_html_e( 'KO', 'yith-woocommerce-mailchimp' ); ?></mark>
					<?php endif; ?>
				</p>

				<p class="account-info">
					<span class="label"><b><?php esc_html_e( 'Name:', 'yith-woocommerce-mailchimp' ); ?></b></span>

					<?php echo ! empty( $name ) ? esc_html( $name ) : esc_html__( '&lt; Not Found &gt;', 'yith-woocommerce-mailchimp' ); ?>
				</p>

				<p class="account-info">
					<span class="label"><b><?php esc_html_e( 'Email:', 'yith-woocommerce-mailchimp' ); ?></b></span>

					<?php echo ! empty( $email ) ? esc_html( $email ) : esc_html__( '&lt; Not Found &gt;', 'yith-woocommerce-mailchimp' ); ?>
				</p>
			</div>
		</div>
	</td>
</tr>
