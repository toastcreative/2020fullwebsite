<?php
add_filter( 'rwmb_meta_boxes', 'YOURPREFIX_register_meta_boxes' );
function YOURPREFIX_register_meta_boxes( $meta_boxes ) {
    $prefix = 'rw_';
    //get post ID
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;

    //FOR HOMEPAGE
    if ($post_id == '31') { //Check if its homepage id
    
        $meta_boxes[] = array(
            'id'         => 'personal',
            'title'      => __( 'Personal Information', 'twenty20people' ),
            'post_types' => array( 'page' ),
            'context'    => 'normal',
            'priority'   => 'high',
            'fields' => array(
                array(
                    'name'  => __( 'Welcome Text', 'twenty20people' ),
                    'desc'  => 'Enter Your text here',
                    'id'    => $prefix . 'wtext',
                    'type'  => 'wysiwyg',
                    'class' => 'custom-class',
                    
                ),
            )
        );
    }
    //FOR CUSTOM POST Membership
    $meta_boxes[] = array(
            'id'         => 'Membership',
            'title'      => __( 'Membership', 'twenty20people' ),
            'post_types' => array( 'Membership' ),
            'context'    => 'normal',
            'priority'   => 'high',
            'fields' => array(
                array(
                    'name'  => __( 'Price', 'twenty20people' ),
                    'desc'  => 'Price in USD',
                    'id'    => $prefix . 'wtext',
                    'type'  => 'number',
                    'class' => 'custom-class',
                    
                ),
            )
        );

    return $meta_boxes;
}