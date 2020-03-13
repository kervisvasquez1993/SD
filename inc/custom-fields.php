<?php 
add_action( 'cmb2_admin_init', 'kervis_home_pages' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function kervis_home_pages()
 {

	/**
	 * Metabox to be displayed on a single page ID
	 */
    $id_home = get_option('page_on_front');
    
	$home_page_custom = new_cmb2_box( array(
		'id'           => 'home',
		'title'        => esc_html__( 'homepage', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( $id_home ),
		), // Specific post IDs to display this metabox
	) );

    $home_page_custom->add_field( array(
		'name'    => esc_html__( 'Texto superior 1', 'cmb2' ),
		'desc'    => esc_html__( 'Texto en la parte superior del sitio web', 'cmb2' ),
		'id'      => 'texto_superior_1',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
    ) );
    $home_page_custom->add_field( array(
		'name' => esc_html__( 'Imagen 1', 'cmb2' ),
		'desc' => esc_html__( 'seleciona la imagen .', 'cmb2' ),
		'id'   => 'image1_home',
		'type' => 'file',
	) );
       $home_page_custom->add_field( array(
		'name'    => esc_html__( 'Texto superior 2', 'cmb2' ),
		'desc'    => esc_html__( 'Ingrese la primera imagen del homepage', 'cmb2' ),
		'id'      => 'texto_superior_2',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
    ) );
    $home_page_custom->add_field( array(
		'name' => esc_html__( 'Imagen 2', 'cmb2' ),
		'desc' => esc_html__( 'Ingrese la segunda imagen del homepage', 'cmb2' ),
		'id'   => 'image2_home',
		'type' => 'file',
	) );

	//texto secundartio 
	$home_page_custom->add_field( array(
		'name'    => esc_html__( 'Texto porque nosotros', 'cmb2' ),
		'desc'    => esc_html__( 'añada el texto para la descripcion', 'cmb2' ),
		'id'      => 'texto_nosotros',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
    ) );
    $home_page_custom->add_field( array(
		'name' => esc_html__( 'Imagen de fondo nosotros', 'cmb2' ),
		'desc' => esc_html__( 'ingrese la imagen que pertenece a este campo', 'cmb2' ),
		'id'   => 'imagen_nosotros_home',
		'type' => 'file',
	) );
    
    

}

//group de campo

add_action( 'cmb2_admin_init', 'kervis_nosotros' );

function kervis_nosotros()
 {

	/**
	 * Repeatable Field Groups
	 */
	$kervis_iconos = new_cmb2_box( array(
		'id'           => 'yourprefix_group_metabox',
		'title'        => esc_html__( 'Iconos con descripcion', 'cmb2' ),
		'object_types' => array( 'page' ),
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => 'true',
		'show_on' => array(
			'key' => 'page-template',
			'value' => 'page-iconos.php'
		)
	) );

	// $group_field_id is the field id string, so in this case: 'yourprefix_group_demo'
	$kervis_iconos->add_field( array(
		'name' => esc_html__( 'Titulo seccion', 'cmb2' ),
		'desc' => esc_html__( 'Añada un titulo para la seccion', 'cmb2' ),
		'id'   => 'titulo_icono_principal',
		'type' => 'text',
	) );
	$group_field_id = $kervis_iconos->add_field( array(
		'id'          => 'nosotros',
		'type'        => 'group',
		'description' => esc_html__( 'Agregue las opciones segun sea necesario', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Caracteristicas  {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar otro Grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar Grupo', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );


	$kervis_iconos->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Titulo', 'cmb2' ),
		'id'         => 'titulo_icono',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$kervis_iconos->add_group_field( $group_field_id, array(
		'name'        => esc_html__( 'Description', 'cmb2' ),
		'description' => esc_html__( 'Agregue una descripcion para esta caracteristicas', 'cmb2' ),
		'id'          => 'desc_iconos',
		'type'        => 'textarea_small',
	) );

	$kervis_iconos->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Icono', 'cmb2' ),
		'id'   => 'img_icono',
		'type' => 'file',
	) );


}


/**
 * blog 
 */

add_action( 'cmb2_admin_init', 'kervis_blog' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function kervis_blog()
 {
	 
	$id_blog = get_option('page_for_posts');
	$campos_blog = new_cmb2_box( array(
		'id'           => 'blog',
		'title'        => esc_html__( 'Campos Blog', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => 'page-template',
			'value' => 'page-iconos.php'
		), // Specific post IDs to display this metabox
	) );

	$campos_blog->add_field( array(
		'name' => esc_html__( 'Slogan Blog', 'cmb2' ),
		'desc' => esc_html__( 'Añada un una descripcion de la pagina web', 'cmb2' ),
		'id'   => 'slogan_blog',
		'type' => 'text',
	) );
 }

 /*
 	campos para el portafolio
 */


add_action( 'cmb2_admin_init', 'portafolio' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function portafolio()
 {
	 
	
	$portafolio = new_cmb2_box( array(
		'id'           => 'portafolio',
		'title'        => esc_html__( 'Campos de Persoanl', 'cmb2' ),
		'object_types' => array( 'portafolio2' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		
	) );

	$portafolio->add_field( array(
		'name' => esc_html__( 'subtitulo de la entrada', 'cmb2' ),
		'desc' => esc_html__( 'Añada un subtitulo para el curso', 'cmb2' ),
		'id'   => 'portafolio_subtitulo',
		'type' => 'text',
	) );
	$portafolio->add_field( array(
		'name' => esc_html__( 'Informacion sobre fecha ', 'cmb2' ),
		'desc' => esc_html__( 'Informacion sobre la fecha y hora', 'cmb2' ),
		'id'   => 'info',
		'type' => 'title',
	) );

	//horas y dias 
	$portafolio->add_field( array(
		'name' => esc_html__( 'Indicaciones para los dias', 'cmb2' ),
		'desc' => esc_html__( 'Añada las indicaciones de los dias', 'cmb2' ),
		'id'   => 'indicaciones',
		'type' => 'text_date',
	) );

	$portafolio->add_field( array(
		'name' => esc_html__( 'Precio', 'cmb2' ),
		'desc' => esc_html__( 'Precio del curso', 'cmb2' ),
		'id'   => 'precio',
		'type' => 'text_money',
		// 'before_field' => '£', // override '$' symbol if needed
		// 'repeatable' => true,
	) );
	
	$portafolio->add_field( array(
		'name' => esc_html__( 'Personal de la pagina', 'cmb2' ),
		'desc' => esc_html__( 'Seleccione a la persona', 'cmb2' ),
		'id' => 'personal',
		'type' => 'post_search_ajax',
		'query_args' => array(
			'post_type' => array('personal'),
			'post_status' =>array('publish'),
			'post_per_page' => -1
		)
	)
	);
	

 }

 //campos para entradas


 // galeria 


 add_action( 'cmb2_admin_init', 'galeria' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function galeria()
 {
	 
	$galeria = new_cmb2_box( array(
		'id'           => 'Galeria',
		'title'        => 'Galeria',
		'object_types' => array( 'page' ), // post type
		'show_on'      => array( 'key' => 'page-template', 'value' => 'page-galeria.php' ),
		'context'      => 'normal', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );

    $galeria->add_field( array(
				'name'         => esc_html__( 'Selecciona las imagenes', 'cmb2' ),
				'desc'         => esc_html__( 'Upload or add multiple images/attachments.', 'cmb2' ),
				'id'           => 'galeria',
				'type'         => 'file_list',
				'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
							) );
 
}
