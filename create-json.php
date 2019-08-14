<?php
/**
 * PHP script to create json data for templates.
 */
$templates = array(
	'default'    => array(
		'title' => 'Default Template',
		'thumb' => 'https://raw.githubusercontent.com/wpeverest/google-fonts/images/master/default.png',
		'data'  => ''
	),
	'layout-two' => array(
		'title' => 'Classic Template',
		'thumb' => 'https://raw.githubusercontent.com/wpeverest/google-fonts/images/master/default.png',
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
