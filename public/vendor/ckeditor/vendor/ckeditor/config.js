/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'links' },
		{ name: 'insert' },
		{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'colors' },
		{ name: 'about' }
	];




		config.filebrowserBrowseUrl = CKEDITOR.getUrl( CKEDITOR.plugins.getPath( 'kcfinder' ) + 'browse.php?type=files' );
	config.filebrowserImageBrowseUrl = CKEDITOR.getUrl( CKEDITOR.plugins.getPath( 'kcfinder' ) + 'browse.php?type=images' );
	config.filebrowserFlashBrowseUrl = CKEDITOR.getUrl( CKEDITOR.plugins.getPath( 'kcfinder' ) + 'browse.php?type=flash' );
	config.filebrowserUploadUrl = CKEDITOR.getUrl( CKEDITOR.plugins.getPath( 'kcfinder' ) + 'upload.php?type=files' );
	config.filebrowserImageUploadUrl = CKEDITOR.getUrl( CKEDITOR.plugins.getPath( 'kcfinder' ) + 'upload.php?type=images' );
	config.filebrowserFlashUploadUrl = CKEDITOR.getUrl( CKEDITOR.plugins.getPath( 'kcfinder' ) + 'upload.php?type=flash' );

	config.allowedContent=true;
	config.enterMode = CKEDITOR.ENTER_BR;

	//config.baseUrl = "http://www.yourdomain.com/assets/images/";
	//config.baseHref = 'http://capitaladvisors.app:8000/vendor/ckeditor/vendor/ckeditor/plugins/kcfinder/upload/images/';


	config.pasteFromWordPromptCleanup = true;
    config.pasteFromWordRemoveFontStyles = true;
    config.forcePasteAsPlainText = true;
    config.ignoreEmptyParagraph = true;
    config.removeFormatAttributes = true;



    // Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';
};
