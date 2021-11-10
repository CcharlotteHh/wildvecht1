<?php 
function mijnthema_menu(){
    register_nav_menu( 'hoofdmenu', 'Het Hoofdmenu' );
}

add_action('init','mijnthema_menu');

function mijnwidgets_init(){
    register_Sidebar(array(
        'name'=> 'sidebar',
        'id' => 'mijn-sidebar-widgets',
        )
    );        

    register_Sidebar(array(
        'name'=> 'footer',
        'id' => 'mijn-footer-widgets',
        )
    );      
}
add_action('widgets_init','mijnwidgets_init');



?>