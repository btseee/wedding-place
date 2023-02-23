<?php 

if ( class_exists( 'Redux' ) ) {
$options = get_option('nikah_framework');
if(!empty($options['footer-layout'])) {
    $nikah_footer_widget = $options['footer-layout'];
} else {
    $nikah_footer_widget = "";
}

if($nikah_footer_widget === '1widget-footer') {
    register_sidebar( array(
    'name'          => esc_html__( 'Footer 1', 'nikah' ),
    'id'            => 'footer-1',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="widget-footer %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="title"><h4 class="widget-title">',
    'after_title'   => '</h4></div>' ));  

}


if($nikah_footer_widget === '2widget-footer') {
    register_sidebar( array(
    'name'          => esc_html__( 'Footer 1', 'nikah' ),
    'id'            => 'footer-1',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="widget-footer %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="title"><h4 class="widget-title">',
    'after_title'   => '</h4></div>' ));

    register_sidebar( array(
    'name'          => esc_html__( 'Footer 2', 'nikah' ),
    'id'            => 'footer-2',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="widget-footer %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="title"><h4 class="widget-title">',
    'after_title'   => '</h4></div>' ));

}

if($nikah_footer_widget === '3widget-footer') {
    register_sidebar( array(
    'name'          => esc_html__( 'Footer 1', 'nikah' ),
    'id'            => 'footer-1',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="widget-footer %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="title"><h4 class="widget-title">',
    'after_title'   => '</h4></div>' ));

    register_sidebar( array(
    'name'          => esc_html__( 'Footer 2', 'nikah' ),
    'id'            => 'footer-2',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="widget-footer %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="title"><h4 class="widget-title">',
    'after_title'   => '</h4></div>' ));

    register_sidebar( array(
    'name'          => esc_html__( 'Footer 3', 'nikah' ),
    'id'            => 'footer-3',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="widget-footer %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="title"><h4 class="widget-title">',
    'after_title'   => '</h4></div>' ));

}

if($nikah_footer_widget === '4widget-footer') {
    register_sidebar( array(
    'name'          => esc_html__( 'Footer 1', 'nikah' ),
    'id'            => 'footer-1',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="widget-footer %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="title"><h4 class="widget-title">',
    'after_title'   => '</h4></div>' ));

    register_sidebar( array(
    'name'          => esc_html__( 'Footer 2', 'nikah' ),
    'id'            => 'footer-2',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="widget-footer %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="title"><h4 class="widget-title">',
    'after_title'   => '</h4></div>' ));

     register_sidebar( array(
    'name'          => esc_html__( 'Footer 3', 'nikah' ),
    'id'            => 'footer-3',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="widget-footer %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="title"><h4 class="widget-title">',
    'after_title'   => '</h4></div>' ));

      register_sidebar( array(
    'name'          => esc_html__( 'Footer 4', 'nikah' ),
    'id'            => 'footer-4',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="widget-footer %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="title"><h4 class="widget-title">',
    'after_title'   => '</h4></div>' ));

}


function nikah_footer_widget() {
    $options = get_option('nikah_framework');
    if(!empty($options['footer-layout'])) {
        $nikah_footer_widget = $options['footer-layout'];
    } else {
        $nikah_footer_widget = "";
    }

    switch ($nikah_footer_widget){
    case '1widget-footer' : ?>
      
        <div class="footer-widget item column column-1">
            <?php dynamic_sidebar( 'footer-1' ); ?>
        </div>
        
    <?php break;
      
    case '2widget-footer' : ?>
      
        <div class="footer-widget item column column-2">
            <?php dynamic_sidebar( 'footer-1' ); ?>
        </div>
            
        <div class="footer-widget item column column-2">
            <?php dynamic_sidebar( 'footer-2' ); ?>
        </div>
        
    <?php break;
      
    case '3widget-footer' : ?>
      
        <div class="footer-widget item column column-3">
            <?php dynamic_sidebar( 'footer-1' ); ?>
        </div>
            
        <div class="footer-widget item column column-3">
            <?php dynamic_sidebar( 'footer-2' ); ?>
        </div>
            
        <div class="footer-widget item column column-3">
            <?php dynamic_sidebar( 'footer-3' ); ?>
        </div>
        
    <?php break;
      
    case '4widget-footer' : ?>
      
        <div class="footer-widget item column column-4">
            <?php dynamic_sidebar( 'footer-1' ); ?>
        </div>
        
        <div class="footer-widget item column column-4">
            <?php dynamic_sidebar( 'footer-2' ); ?>
        </div>
        
        <div class="footer-widget item column column-4">
            <?php dynamic_sidebar( 'footer-3' ); ?>
        </div>
        
        <div class="footer-widget item column column-4">
            <?php dynamic_sidebar( 'footer-4' ); ?>
        </div>
    
    <?php break; }
}
}