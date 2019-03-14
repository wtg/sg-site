<?php
/**
 * @package wtg-theme
 * @since 0.1.0
 * @version 0.4.0
 */
?>
<div class="column is-3">
	<aside class="menu">
		<?php if( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'sidebar' ) ) : endif; ?>
	</aside>
</div>
