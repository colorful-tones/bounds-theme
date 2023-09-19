<?php
/**
 * Title: Columns
 * Slug: bounds/columns
 * Block Types: core/post-content
 * Categories: slides
 * Keywords: columns, side-by-side
 *
 * @package Bounds
 * @since 0.0.2
 */

?>

<!-- wp:cover {"overlayColor":"base","isDark":false,"tagName":"section","align":"full","className":"is-style-slide","layout":{"type":"constrained"}} -->
<section class="wp-block-cover alignfull is-light is-style-slide" id="slide-columns"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"},"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide" style="min-height:100vh"><!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-small-font-size" style="margin-top:var(--wp--preset--spacing--10)"><!-- wp:paragraph -->
<p><a href="#slide-about"><?php echo esc_html__( 'Previous slide', 'bounds' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained","contentSize":"","wideSize":"","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Title', 'bounds' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php echo esc_html__( 'Subtitle', 'bounds' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><!-- wp:list-item -->
<li><?php echo esc_html__( 'Item one', 'bounds' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Item two', 'bounds' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Item three', 'bounds' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"id":10,"aspectRatio":"3/4","scale":"contain","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/image-from-rawpixel-id-9084949-jpeg.jpg" alt="<?php echo esc_attr__( 'Person demonstrating fencing maneuvers', 'bounds' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--10)"><!-- wp:paragraph -->
<p><a href="#slide-code"><?php echo esc_html__( 'Next slide', 'bounds' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></section>
<!-- /wp:cover -->
