/**
 * @license Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */
var host=window.location.href;
host = host.split('backend');

CKEDITOR.editorConfig = function( config ) {
config.filebrowserBrowseUrl = host[0]+'backend/web/ckfinder/ckfinder.html';
 
config.filebrowserImageBrowseUrl = host[0]+'backend/web/ckfinder/ckfinder.html?type=Images';
 
config.filebrowserFlashBrowseUrl = host[0]+'backend/web/ckfinder/ckfinder.html?type=Flash';
 
config.filebrowserUploadUrl = host[0]+'backend/web/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
 
config.filebrowserImageUploadUrl = host[0]+'backend/web/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
 
config.filebrowserFlashUploadUrl = host[0]+'backend/web/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';

};
