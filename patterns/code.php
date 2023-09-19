<?php
/**
 * Title: Code
 * Slug: bounds/code
 * Block Types: core/post-content
 * Categories: slides
 * Keywords: columns, side-by-side, code
 *
 * @package Bounds
 * @since 0.0.2
 */

?>

<!-- wp:cover {"overlayColor":"base","isDark":false,"tagName":"section","align":"full","className":"is-style-slide","layout":{"type":"constrained"}} -->
<section class="wp-block-cover alignfull is-light is-style-slide" id="slide-code"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"},"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide" style="min-height:100vh"><!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-small-font-size" style="margin-top:var(--wp--preset--spacing--10)"><!-- wp:paragraph -->
<p><a href="#slide-columns"><?php echo esc_html__( 'Previous slide', 'bounds' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Custom CSS', 'bounds' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:list {"fontSize":"large"} -->
<ul class="has-large-font-size"><!-- wp:list-item -->
<li><?php echo esc_html__( 'Per block and global', 'bounds' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php echo esc_html__( 'Not ideal for long blocks of CSS', 'bounds' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"full","style":{"border":{"radius":{"topLeft":"8px","topRight":"8px"}},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"},"blockGap":"0rem"}},"backgroundColor":"accent","textColor":"base-2","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignfull has-base-2-color has-accent-background-color has-text-color has-background" style="border-top-left-radius:8px;border-top-right-radius:8px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem"}}} -->
<p style="font-size:0.7rem">🔴 🟡 🟢</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"layout":{"selfStretch":"fill"}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><code>theme.json</code></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:code {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"bottomLeft":"8px","bottomRight":"8px"}}},"backgroundColor":"contrast","textColor":"base-2","fontSize":"small"} -->
<pre class="wp-block-code has-base-2-color has-contrast-background-color has-text-color has-background has-small-font-size" style="border-bottom-left-radius:8px;border-bottom-right-radius:8px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><code>{
	"<strong>styles</strong>": {
		"<strong>blocks</strong>": {
			"<strong>core/post-title</strong>": {
				<mark style="background-color:#5E503F" class="has-inline-color has-base-2-color">"<strong>css</strong>": "letter-spacing: 1px;"</mark>
			},
			"<strong>core/heading</strong>": {
				<mark style="background-color:#5E503F" class="has-inline-color has-base-2-color">"<strong>css</strong>": "&amp;::before {\n  content: '👍';\n  display: inline-block;\n}"</mark>
			}
		}
	},
	"$schema": "https://schemas.wp.org/trunk/theme.json",
	"version": 2
}</code></pre>
<!-- /wp:code --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--10)"><!-- wp:paragraph -->
<p><a href="#slide-end"><?php echo esc_html__( 'Next slide', 'bounds' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></section>
<!-- /wp:cover -->
