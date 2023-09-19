<?php
/**
 * Title: End
 * Slug: bounds/end
 * Block Types: core/post-content
 * Categories: slides
 * Keywords: end, outro
 *
 * @package Bounds
 * @since 0.0.2
 */

?>

<!-- wp:cover {"overlayColor":"base","isDark":false,"tagName":"section","align":"full","className":"is-style-slide","layout":{"type":"constrained"}} -->
<section class="wp-block-cover alignfull is-light is-style-slide" id="slide-end"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"},"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide" style="min-height:100vh"><!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-small-font-size" style="margin-top:var(--wp--preset--spacing--10)"><!-- wp:paragraph -->
<p><a href="#slide-code"><?php echo esc_html__( 'Previous slide', 'bounds' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":1,"align":"wide","style":{"layout":{"selfStretch":"fit"}}} -->
<h1 class="wp-block-heading alignwide"><?php echo esc_html__( 'Thanks!', 'bounds' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"2vh","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div></section>
<!-- /wp:cover -->