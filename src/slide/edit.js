/**
 * WordPress dependencies
 */
import { __ } from '@wordpress/i18n';
import {
	useBlockProps,
	useInnerBlocksProps,
	InspectorControls,
} from '@wordpress/block-editor';

import { Button, Modal, PanelBody } from '@wordpress/components';
import { useState } from '@wordpress/element';

/**
 * Internal dependencies
 */
import './editor.css';
import SpeakerNotes from './speaker-notes';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit( {
	setAttributes,
	attributes: { speakerNotes },
} ) {
	const [ isOpen, setOpen ] = useState( false );
	const openModal = () => setOpen( true );
	const closeModal = () => setOpen( false );
	return (
		<section { ...useBlockProps( { className: 'slide__container' } ) }>
			<div
				{ ...useInnerBlocksProps( { className: 'slide__content' } ) }
			></div>
			<InspectorControls>
				<PanelBody>
					<h2>{ __( 'Speaker Notes', 'presentation' ) }</h2>
					<Button variant="secondary" onClick={ openModal }>
						{ __( 'Speaker Notes', 'presentation' ) }
					</Button>
					{ isOpen && (
						<Modal
							title={ __( 'Speaker Notes', 'presentation' ) }
							onRequestClose={ closeModal }
							size="large"
						>
							<SpeakerNotes
								speakerNotes={ speakerNotes }
								setAttributes={ setAttributes }
							/>
						</Modal>
					) }
				</PanelBody>
			</InspectorControls>
		</section>
	);
}
