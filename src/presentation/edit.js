/**
 * WordPress dependencies
 */
import {
	useBlockProps,
	useInnerBlocksProps,
	InspectorControls,
} from '@wordpress/block-editor';
import {
	PanelBody,
	ToggleControl,
	__experimentalNumberControl as NumberControl,
} from '@wordpress/components';
import { __ } from '@wordpress/i18n';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @param {Object}   props               Properties passed to the function.
 *
 * @return {Element} Element to render.
 */
export default function Edit( {
	attributes: { continuous, autoplay, speed },
	setAttributes,
} ) {
	const blockProps = useBlockProps();
	const innerBlockProps = useInnerBlocksProps(
		{ className: 'slider-container' },
		{ allowedBlocks: [ 'core/cover' ] }
	);
	return (
		<div { ...blockProps }>
			<div { ...innerBlockProps }></div>
			<div className="buttons">
				<button aria-label="go to previous slide">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" className="presentation-icon presentation-icon--arrow-left">
						<path d="m12 19-7-7 7-7M19 12H5" />
					</svg>
				</button>
				<p data-wp-text="state.imageIndex">1/10</p>
				<button aria-label="go to next slide">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" className="presentation-icon presentation-icon--arrow-right" viewBox="0 0 24 24">
						<path d="M5 12h14M12 5l7 7-7 7" />
					</svg>
				</button>
			</div>
			<InspectorControls>
				<PanelBody title={ __( 'Slider Controls' ) }>
					<ToggleControl
						label={ __( 'Continuous' ) }
						help={ __(
							'If enabled, the slider will loop back to the first slide after the last slide.'
						) }
						checked={ continuous }
						onChange={ () =>
							setAttributes( { continuous: ! continuous } )
						}
					/>
					<ToggleControl
						label={ __( 'Autoplay' ) }
						help={ __(
							'Set the slideshow to play automatically.'
						) }
						checked={ autoplay }
						onChange={ () =>
							setAttributes( { autoplay: ! autoplay } )
						}
					/>
					{ autoplay && (
						<NumberControl
							label={ __( 'Slide Duration' ) }
							help={ __(
								'The duration of each slide in seconds.'
							) }
							min={ 1 }
							max={ 10 }
							value={ speed }
							onChange={ ( newSpeed ) =>
								setAttributes( { speed: newSpeed } )
							}
						/>
					) }
				</PanelBody>
			</InspectorControls>
		</div>
	);
}