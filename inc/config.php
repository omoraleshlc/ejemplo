<?php
/**
 * config.php
 *
 * Author: pixelcave
 *
 * Configuration file. It contains variables used in the template as well as the primary navigation array from which the navigation is created
 *
 */

/* Template variables */
$template = array(
    'name'              => 'SYSREY',
    'version'           => '1.0',
    'author'            => 'OAMG',
    
    'robots'            => 'noindex, nofollow',
    'title'             => 'SYSREY',
    'description'       => 'Sistema que permite controlar el flujo de inventarios',
    // true                         enable page preloader
    // false                        disable page preloader
    'page_preloader'    => true,
    // 'navbar-default'             for a light header
    // 'navbar-inverse'             for a dark header
    'header_navbar'     => 'navbar-inverse',
    // ''                           empty for a static header/main sidebar
    // 'navbar-fixed-top'           for a top fixed header/sidebars
    // 'navbar-fixed-bottom'        for a bottom fixed header/sidebars
    'header'            => 'navbar-fixed-top',
    // ''                           empty for the default full width layout
    // 'fixed-width'                for a fixed width layout (can only be used with a static header/main sidebar)
    'layout'            => '',
    // 'sidebar-visible-lg-mini'    main sidebar condensed - Mini Navigation (> 991px)
    // 'sidebar-visible-lg-full'    main sidebar full - Full Navigation (> 991px)
    // 'sidebar-alt-visible-lg'     alternative sidebar visible by default (> 991px) (You can add it along with another class - leaving a space between)
    // 'sidebar-light'              for a light main sidebar (You can add it along with another class - leaving a space between)
    'sidebar'           => 'sidebar-visible-lg-full',
    // ''                           Disable cookies (best for setting an active color theme from the next variable)
    // 'enable-cookies'             Enables cookies for remembering active color theme when changed from the sidebar links (the next color theme variable will be ignored)
    'cookies'           => '',
    // '', 'classy', 'social', 'flat', 'amethyst', 'creme', 'passion'
    'theme'             => '',
    // Used as the text for the header link - You can set a value in each page if you like to enable it in the header
    'header_link'       => '',
    // The name of the files in the inc/ folder to be included in page_head.php - Can be changed per page if you
    // would like to have a different file included (eg a different alternative sidebar)
    'inc_sidebar'       => 'page_sidebar',
    'inc_sidebar_alt'   => 'page_sidebar_alt',
    'inc_header'        => 'page_header',
    // The following variable is used for setting the active link in the sidebar menu
    'active_page'       => basename($_SERVER['PHP_SELF'])
);

/* Primary navigation array (the primary navigation will be created automatically based on this array, up to 3 levels deep) */
$primary_nav = array(
    array(
        'name'  => 'Inicio',
        'url'   => 'index.php',
        'icon'  => 'gi gi-home'
    ),
    array(
        'url'   => 'separator',
    ),
    
    
    array(
        'name'  => 'Configuraciones',
        'icon'  => 'fa fa-cog',
        'sub'   => array(
            array(
                'name'  => 'Usuarios',
                'url'   => 'view_usuarios.php',
            ),
            
        )
    ),
    
    
    
    
       array(
        'name'  => 'Inventarios',
        'icon'  => 'fa fa-cog',
        'sub'   => array(
            array(
                'name'  => 'Almacenes',
                'url'   => '',
            ),
             array(
                'name'  => 'Articulos',
                'url'   => '',
            ),
             array(
                'name'  => 'Grupos',
                'url'   => '',
            ),
             array(
                'name'  => 'Clasificacion',
                'url'   => '',
            ),
             array(
                'name'  => 'Unidad de Medida',
                'url'   => '',
            ),
            
        )
    ),
    
    
          array(
        'name'  => 'Compras',
        'icon'  => 'fa fa-shopping-cart',
        'sub'   => array(
            array(
                'name'  => 'Ordenes',
                'url'   => '',
            ),
             array(
                'name'  => 'Proveedores',
                'url'   => '',
            ),
            
        )
    ), 
    
    
    
    
    
        array(
        'name'  => 'Operaciones',
        'icon'  => 'fa fa-play',
        'sub'   => array(
            array(
                'name'  => 'Solicitudes',
                'url'   => '',
            ),
             
            
        )
    ), 
    
    
);