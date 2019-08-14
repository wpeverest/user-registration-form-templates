<?php
/**
 * PHP script to create json data for templates.
 */
$templates = array(
	'default'    => array(
		'title' => 'Default Template',
		'thumb' => 'https://raw.githubusercontent.com/wpeverest/user-registration-form-templates/master/images/default.png',
		'data'  => '{"wrapper":{"width":"100","font_family":"","background_color":"#ffffff","background_image":"","background_preset":"default","background_position_x":"left","background_position_y":"top","background_size":"auto","background_repeat":"repeat","background_attachment":"scroll","border_type":"solid","border_width":{"top":1,"right":1,"bottom":1,"left":1},"border_color":"#ddd","border_radius":{"top":0,"right":0,"bottom":0,"left":0,"unit":"px"},"margin":{"desktop":{"top":0,"right":0,"bottom":30,"left":0}},"padding":{"desktop":{"top":20,"right":20,"bottom":20,"left":20}}},"field_label":{"font_size":"14","font_color":"","font_style":{"bold":false,"italic":false,"underline":false,"uppercase":false},"text_alignment":"left","line_height":"1.7","margin":{"desktop":{"top":0,"right":0,"bottom":10,"left":0}},"padding":{"desktop":{"top":0,"right":0,"bottom":0,"left":0}}},"field_description":{"font_size":"14","font_color":"#575757","font_style":{"bold":false,"italic":false,"underline":false,"uppercase":false},"text_alignment":"left","line_height":"1.7","margin":{"desktop":{"top":0,"right":0,"bottom":10,"left":0}},"padding":{"desktop":{"top":0,"right":0,"bottom":0,"left":0}}},"field_styles":{"font_size":"14","font_color":"#575757","placeholder_font_color":"#c6ccd7","font_style":{"bold":false,"italic":false,"underline":false,"uppercase":false},"alignment":"left","border_type":"solid","border_width":{"top":1,"right":1,"bottom":1,"left":1},"border_color":"#969696","border_focus_color":"#7ca8eb","border_radius":{"top":3,"right":3,"bottom":3,"left":3,"unit":"px"},"background_color":"rgba(255,255,255,0.99)","margin":{"desktop":{"top":0,"right":0,"bottom":10,"left":0}},"padding":{"desktop":{"top":6,"right":12,"bottom":6,"left":12}}},"checkbox_radio_styles":{"font_size":"14","font_color":"#575757","font_style":{"bold":false,"italic":false,"underline":false,"uppercase":false},"alignment":"left","inline_style":"default","style_variation":"default","size":"16","color":"#575757","checked_color":"#575757","margin":{"desktop":{"top":0,"right":0,"bottom":0,"left":0}},"padding":{"desktop":{"top":0,"right":0,"bottom":0,"left":0}}},"section_title":{"font_size":"16","font_color":"#575757","font_style":{"bold":true,"italic":false,"underline":false,"uppercase":false},"text_alignment":"left","line_height":"1.5","margin":{"desktop":{"top":25,"right":0,"bottom":25,"left":0}},"padding":{"desktop":{"top":0,"right":0,"bottom":0,"left":0}}},"button":{"font_size":"14","font_style":{"bold":false,"italic":false,"underline":false,"uppercase":false},"font_color":"#555555","hover_font_color":"#23282d","background_color":"#f7f7f7","hover_background_color":"#eeeeee","alignment":"right","border_type":"solid","border_width":{"top":1,"right":1,"bottom":1,"left":1},"border_color":"#cccccc","border_hover_color":"#cccccc","border_radius":{"top":3,"right":3,"bottom":3,"left":3,"unit":"px"},"line_height":"1.5","margin":{"desktop":{"top":0,"right":0,"bottom":0,"left":0}},"padding":{"desktop":{"top":10,"right":15,"bottom":10,"left":15}}}}',
	),
	'layout-two' => array(
		'title' => 'Classic Template',
		'thumb' => 'https://raw.githubusercontent.com/wpeverest/user-registration-form-templates/master/images/default.png',
		'data'  => ''
	),
);

$json_data = json_encode( array( 'styles' => $templates ) );

$filename = 'style-templates.json';

try {
	// @codingStandardsIgnoreStart
	$file = fopen( $filename, 'w' );
	fwrite( $file, $json_data );
	fclose( $file );
	echo "File created Successfully";
	// @codingStandardsIgnoreEnd
} catch ( Exception $e ) {
	echo "Error : " . $e->getMessage(); // @codingStandardsIgnoreLine
	die();
}
