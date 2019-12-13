<?php 
add_action( 'cmb2_admin_init', 'kervis_front_page_register_about_page_metabox' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function kervis_front_page_register_about_page_metabox() {

	/**
	 * Metabox to be displayed on a single page ID
	 */
	$kervis_front_page = new_cmb2_box( array(
		'id'           => 'yourprefix_about_metabox',
		'title'        => esc_html__( 'campo home page', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( 2 ),
		), // Specific post IDs to display this metabox
	) );

	$kervis_front_page->add_field( array(
		'name' => esc_html__( 'Test Text', 'cmb2' ),
		'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'   => 'yourprefix_about_text',
		'type' => 'text',
	) );

}
?>