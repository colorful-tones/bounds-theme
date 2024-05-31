<?php
/**
 * PHP file to use when rendering the block type on the server to show on the front end.
 *
 * The following variables are exposed to the file:
 *     $attributes (array): The block attributes.
 *     $content (string): The block default content.
 *     $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

?>
<div
	<?php echo wp_kses_data( get_block_wrapper_attributes() ); ?>
	data-wp-interactive='presentation'
	data-wp-on-document--keydown="actions.onKeyDown"
	data-wp-on-document--fullscreenchange="actions.onFullScreenChange"
	data-wp-init="callbacks.initSlideShow"
>
	<div
		aria-live="polite"
		class="slider-container"
		data-wp-style--transform="state.currentPos"
		data-wp-on--touchstart="actions.onTouchStart"
		data-wp-on--touchend="actions.onTouchEnd"
	>
		<?php echo $content; ?>
	</div>

	<div class="presentation-navigation" data-wp-bind--hidden="state.isPresenting">
		<button class="presentation-navigation__button" data-wp-on--click="actions.prevSlide" data-wp-bind--disabled="state.noPrevSlide" aria-label="go to previous slide">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="presentation-icon presentation-icon--arrow-left">
				<path d="m12 19-7-7 7-7M19 12H5" />
			</svg>
		</button>

		<p class="presentation-slide-count" data-wp-text="state.slideIndex"></p>

		<button
			aria-label="go to next slide"	
			class="presentation-navigation__button"
			data-wp-on--click="actions.nextSlide" data-wp-bind--disabled="state.noNextSlide"
		>
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="presentation-icon presentation-icon--arrow-right" viewBox="0 0 24 24">
				<path d="M5 12h14M12 5l7 7-7 7" />
			</svg>
		</button>
	</div>
</div>
