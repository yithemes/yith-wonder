<?php
/**
 * Title: 404
 * Slug: wonder/404-page
 * Categories: wonder-pages
 * Block Types: core/post-content
 *
 * @package wonder
 * @since 1.0.0
 */

?>
<!-- wp:template-part {"slug":"header","theme":"wonder","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","layout":{"inherit":true}} -->
<main class="wp-block-group alignfull">
	<!-- wp:spacer {"height":"50px"} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"120px"}}} -->
	<h1 class="has-text-align-center" style="font-size:120px">4🙃4</h1>
	<!-- /wp:heading -->

	<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"huge"} -->
	<h2 class="has-text-align-center has-huge-font-size"><?php esc_html_e( 'Ooops, page not found.', 'wonder' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php esc_html_e( 'Sorry, but the requested page is not found. You might try a search below.', 'wonder' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"50px"} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:search {"label":"Search","showLabel":false,"width":75,"widthUnit":"%","buttonText":"<?php esc_attr_e( 'Search', 'wonder' ); ?>","buttonUseIcon":true,"align":"center"} /-->

	<!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"wonder","tagName":"footer"} /-->