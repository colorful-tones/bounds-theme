/**
 * WordPress dependencies
 */
import { __ } from '@wordpress/i18n';
import {
	BlockEditorProvider,
	BlockInspector,
	BlockList,
	BlockTools,
	BlockEditorKeyboardShortcuts,
	WritingFlow,
	ObserveTyping,
} from '@wordpress/block-editor';

import { useState, useEffect, useRef } from '@wordpress/element';
import { serialize, parse } from '@wordpress/blocks';

import { Button, SlotFillProvider } from '@wordpress/components';

import { StrictMode } from '@wordpress/element';
import { ShortcutProvider } from '@wordpress/keyboard-shortcuts';

// Placeholder for the block editor
const Header = () => 'Header';
const Sidebar = () => (
	<div>
		<BlockInspector />
	</div>
);
const Notices = () => 'Notices';

const SpeakerNotes = ( { setAttributes, speakerNotes } ) => {
	const [ blocks, setBlocks ] = useState( parse( speakerNotes ) );
	const [ changesMade, setChangesMade ] = useState( false );
	const useHasChanged = ( val ) => {
		const prevVal = usePrevious( val );
		if ( prevVal === undefined ) {
			return false;
		}
		return prevVal !== val;
	};

	const usePrevious = ( value ) => {
		const ref = useRef();
		useEffect( () => {
			ref.current = value;
		} );
		return ref.current;
	};

	const blocksHaveChanged = useHasChanged( blocks );

	useEffect( () => {
		if ( blocksHaveChanged ) {
			setChangesMade( true );
		}
	}, [ blocksHaveChanged, blocks ] );
	return (
		<StrictMode>
			<ShortcutProvider>
				<SlotFillProvider>
					<BlockEditorProvider
						value={ blocks }
						onInput={ ( blocks ) => setBlocks( blocks ) }
						onChange={ ( blocks ) => setBlocks( blocks ) }
						settings={ {
							allowedBlockTypes: [
								'core/heading',
								'core/paragraph',
							],
						} }
					>
						<BlockEditorKeyboardShortcuts.Register />
						<BlockTools>
							<WritingFlow>
								<ObserveTyping>
									<BlockList renderAppender={ () => null } />
								</ObserveTyping>
							</WritingFlow>
						</BlockTools>
					</BlockEditorProvider>

					<Button
						variant="primary"
						disabled={ ! changesMade }
						onClick={ () => {
							setAttributes( {
								speakerNotes: serialize( blocks ),
							} );
							setChangesMade( false );
						} }
					>
						{ __( 'Save notes' ) }
					</Button>
				</SlotFillProvider>
			</ShortcutProvider>
		</StrictMode>
	);
};

export default SpeakerNotes;
