<?php
/**
 * Title: About
 * Slug: bounds/about
 * Block Types: core/post-content
 * Categories: slides
 * Keywords: slide, about
 *
 * @package Bounds
 * @since 0.0.2
 */

?>

<!-- wp:cover {"overlayColor":"base","isDark":false,"tagName":"section","align":"full","className":"is-style-slide","layout":{"type":"constrained"}} -->
<section class="wp-block-cover alignfull is-light is-style-slide" id="slide-about"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"},"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide" style="min-height:100vh"><!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-small-font-size" style="margin-top:var(--wp--preset--spacing--10)"><!-- wp:paragraph -->
<p><a href="#slide-beginning"><?php echo esc_html__( 'Previous slide', 'bounds' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10"},"dimensions":{"minHeight":"25vh"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"left"}} -->
<div class="wp-block-group alignwide" style="min-height:25vh"><!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","orientation":"horizontal"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":110,"style":{"border":{"radius":"100px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"},"fontSize":"medium"} -->
<div class="wp-block-group has-medium-font-size"><!-- wp:post-author-name /-->

<!-- wp:post-date /-->

<!-- wp:social-links {"iconColor":"contrast-2","iconColorValue":"#636363","showLabels":true,"style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|10"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-visible-labels has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"chain","label":"My Site"} /-->

<!-- wp:social-link {"url":"#","service":"WordPress"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--10)"><!-- wp:paragraph -->
<p><a href="#slide-columns"><?php echo esc_html__( 'Next slide', 'bounds' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></section>
<!-- /wp:cover -->
