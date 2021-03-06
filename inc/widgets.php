<?php
 
/**
 * Adds Foo_Widget widget.
 */
class Foo_Widget extends WP_Widget {
 
    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'foo_widget', // Base ID
            'kervis', // Name
            array( 'description' => __( 'A Foo Widget', 'text_domain' ), ) // Args
        );
    }
 
    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
        $cantidad = apply_filters( 'widget_title', $instance['cantidad'] );
 
        echo $before_widget;
        if ( ! empty( $title ) ) {
            echo $before_title . $title . $after_title;
        }
       
        
       $arg= array(
            'post_type' => 'portafolio2',
            'posts_per_page' => $cantidad
        );
        $portafolio = new WP_Query($arg);
        while($portafolio->have_posts()): $portafolio->the_post();
      ?>
            <div class="card">
                
                <?php the_post_thumbnail( 'mediano', array('class' => 'img-fluid') );?>
                <div class="card-body">
                   <h3 class="card-title"><?php the_title();?></h3>
                   <p class="card-subtitle m-0"> <?php the_excerpt();?></p>
                </div>
                <div class="card-footer">
                    <a href="<?php the_permalink();?>" class="">Ver entrada.</a>
                </div>
            </div>


      <?php 
      endwhile; wp_reset_postdata();  
        echo $after_widget;
    }
    
    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        $title = !empty($instance['title']) ? $instance['title'] : esc_html__( 'kervis ', 'text_domain');

        $cantidad = !empty($instance['cantidad']) ? $instance['cantidad'] : esc_html__( '¿Cuantos cursos desea mostrar?', 'text_domain');
                
        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Ingrese un titulo:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'Ingrese un titulo' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
         </p>
         <p>
            <label for="<?php echo $this->get_field_name( 'cantidad' ); ?>"><?php esc_attr_e( 'Ingrese la cantidad:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'cantidad' ); ?>" name="<?php echo $this->get_field_name( 'cantidad' ); ?>" type="text" value="<?php echo esc_attr( $cantidad ); ?>" />
         </p>
    <?php
    }
 
    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        
        $instance['cantidad'] = ( !empty( $new_instance['cantidad'] ) ) ?  sanitize_text_field( $new_instance['cantidad'] ) : '';
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : 'Últimos proyectos';
        return $instance;
    }
 
} // class Foo_Widget
 
?>

<?php
// Register Foo_Widget widget
add_action( 'widgets_init', 'register_foo' );
     
function register_foo() { 
    register_widget( 'Foo_Widget' ); 
}
?>