<?php
/**
 * Title: Beginning
 * Slug: bounds/beginning
 * Block Types: core/post-content
 * Categories: slides
 * Keywords: start, beginning
 *
 * @package Bounds
 * @since 0.0.2
 */

?>

<!-- wp:cover {"overlayColor":"base","isDark":false,"tagName":"section","align":"full","className":"is-style-slide","layout":{"type":"constrained"}} -->
<section class="wp-block-cover alignfull is-light is-style-slide" id="slide-beginning"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"},"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide" style="min-height:100vh"><!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"2vh","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10"},"dimensions":{"minHeight":""},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":1,"align":"wide","style":{"layout":{"selfStretch":"fixed","flexSize":"100%"}},"textColor":"contrast-2"} -->
<h1 class="wp-block-heading alignwide has-contrast-2-color has-text-color"><?php echo esc_html__( 'Presentation title', 'bounds' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:separator {"opacity":"css","className":"is-style-wide"} -->
<hr class="wp-block-separator has-css-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"200"},"layout":{"selfStretch":"fill","flexSize":null}},"fontSize":"x-large"} -->
<p class="has-x-large-font-size" style="font-style:normal;font-weight:200"><?php echo esc_html__( 'Subtitle', 'bounds' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--10)"><!-- wp:paragraph -->
<p><a href="#slide-about"><?php echo esc_html__( 'Next slide', 'bounds' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></section>
<!-- /wp:cover -->
