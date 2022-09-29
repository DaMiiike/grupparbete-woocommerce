<?php
$url       = add_query_arg( array( 'page' => 'forminator-reports' ) );
$banner_1x = forminator_plugin_url() . 'assets/images/new-feature-18.png';
$banner_2x = forminator_plugin_url() . 'assets/images/new-feature-18@2x.png';
?>

<div class="sui-modal sui-modal-md">

	<div
		role="dialog"
		id="forminator-new-feature"
		class="sui-modal-content"
		aria-live="polite"
		aria-modal="true"
		aria-labelledby="forminator-new-feature__title"
	>

		<div class="sui-box forminator-feature-modal" data-prop="forminator_dismiss_feature_1180" data-nonce="<?php echo esc_attr( wp_create_nonce( 'forminator_dismiss_notification' ) ); ?>">

			<div class="sui-box-header sui-flatten sui-content-center">

				<figure class="sui-box-banner" aria-hidden="true">
					<img
						src="<?php echo esc_url( $banner_1x ); ?>"
						srcset="<?php echo esc_url( $banner_1x ); ?> 1x, <?php echo esc_url( $banner_2x ); ?> 2x"
						alt=""
					/>
				</figure>

				<button class="sui-button-icon sui-button-white sui-button-float--right forminator-dismiss-new-feature" data-modal-close>
					<span class="sui-icon-close sui-md" aria-hidden="true"></span>
					<span class="sui-screen-reader-text"><?php esc_html_e( 'Close this dialog.', 'forminator' ); ?></span>
				</button>

				<h3 class="sui-box-title sui-lg" style="overflow: initial; white-space: initial; text-overflow: initial;"><?php esc_html_e( 'New! Reports and Automation Webhooks', 'forminator' ); ?></h3>

				<p class="sui-description">
					<?php esc_html_e( 'Want to track the performance of your forms, quizzes, and polls? We are happy to introduce Forminator\'s Reports feature! It lets you track the total number of views and submissions, conversion rates, collected payments, and data sent to third-party apps.', 'forminator' ); ?>
					<a href="<?php echo esc_url( $url ); ?>" target="_blank"><?php esc_html_e( 'View reports.', 'forminator' ); ?></a>
				</p>

			</div>

			<div class="sui-box-body sui-spacing-top--20">

				<ul style="margin: 0 0 0 20px; list-style: disc;">

					<li style="margin-bottom: 0;">
						<h4 style="margin-bottom: 0;"><?php esc_html_e( 'Webhook integration', 'forminator' ); ?></h4>
						<p class="sui-description" style="margin-left: -20px;"><?php esc_html_e( 'Now you can integrate automation tools into your forms, quizzes, and polls using webhooks. This allows you to send submission data to any automation tool that supports webhooks.', 'forminator' ); ?></p>
					</li>

				</ul>

			</div>

			<div class="sui-box-footer sui-flatten sui-content-center">

				<button class="sui-button forminator-dismiss-new-feature" data-modal-close><?php esc_html_e( 'Got it', 'forminator' ); ?></button>

			</div>

		</div>

	</div>

</div>

<script type="text/javascript">
	jQuery( '#forminator-new-feature .forminator-dismiss-new-feature' ).on( 'click', function( e ) {
		e.preventDefault();

		var $notice = jQuery( e.currentTarget ).closest( '.forminator-feature-modal' );
		var ajaxUrl = '<?php echo esc_url( forminator_ajax_url() ); ?>';

		jQuery.post(
			ajaxUrl,
			{
				action: 'forminator_dismiss_notification',
				prop: $notice.data('prop'),
				_ajax_nonce: $notice.data('nonce')
			}
		).always( function() {
			$notice.hide();
		});
	});
</script>
