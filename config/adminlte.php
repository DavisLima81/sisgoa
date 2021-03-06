<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'SisGoa',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => true,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>Sis</b>GOA',
    //'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img' => 'vendor/adminlte/dist/img/logo_img.png',
    'logo_img_class' => 'brand-image elevation-6',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'SisGOA',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 250,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => true,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'pesquisar',
            'topnav_right' => false,
        ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        [
            'type' => 'sidebar-menu-search',
            'text' => 'pesquisar',
        ],        
        
        // Legenda/t??tulo sec??o:
        [
            'header' => 'SE????ES',
            'classes' => 'text-light-gray',
        ],
        /* MENU ITEM - SE????O DE PROJETOS E AQUISI????ES */
        [
            'text'    => 'Aquisi????es (APA)',
            'icon'    => 'fas fa-fw fa-credit-card',
            'icon_color' => 'info',
            'can' => 'spa',
            'submenu' => [
                [
                    'text' => 'Processos',
                    'url'  => '#',
                    'icon' => 'fa fa-fw fa-book',
                    'label'       => '!',
                    'label_color' => 'danger',
                ],
                [
                    'text' => 'Projetos',
                    'url'  => '#',
                    'icon' => 'fas fa-fw fa-file',
                    'label'       => '!',
                    'label_color' => 'danger',
                ],
            ],
        ],
        /* MENU ITEM - ASSESSORIA DE SEGURAN??A OPERACIONAL */
        [
            'text'    => 'Seguran??a de Voo (ASO)',
            'icon'    => 'fas fa-fw fa-user-shield',
            'icon_color' => 'info',
            'can' => 'aso',
            'submenu' => [
                [
                    'text'        => 'Relprev',
                    'url'         => '#',
                    'icon'        => 'fas fa-fw fa-skull-crossbones',
                    'label'       => '!',
                    'label_color' => 'danger',
                ],
                [
                    'text'        => 'Dilig??ncia',
                    'url'         => '#',
                    'icon'        => 'fas fa-fw fa-feather',
                    'label'       => '!',
                    'label_color' => 'danger',
                ],
                [
                    'text'        => 'Divop',
                    'url'         => '#',
                    'icon'        => 'fas fa-fw fa-exclamation',
                    'label'       => '!',
                    'label_color' => 'danger',
                ],
                [
                    'text'        => 'Briefing',
                    'url'         => '#',
                    'icon'        => 'far fa-fw fa-comment',
                    'label'       => '!',
                    'label_color' => 'danger',
                ],
            ],
        ],
        /* MENU ITEM - SE????O ADMINISTRATIVA */
        [
            'text'    => 'Administrativa (SAD)',
            'icon'    => 'fas fa-fw fa-building',
            'icon_color' => 'info',
            'can' => 'sop',
            'submenu' => [
                [
                    'text'        => 'Escala de servi??o',
                    'url'         => '#',
                    'icon'    => 'fas fa-fw fa-solid fa-fire-extinguisher',
                    'label'       => '!',
                    'label_color' => 'danger',
                ],
                [
                    'text'        => 'Escala de expediente',
                    'url'         => '#',
                    'icon'        => 'fas fa-fw fa-chair',
                    'label'       => '!',
                    'label_color' => 'danger',
                ],
                [
                    'text'        => 'Permutas',
                    'url'         => '#',
                    'icon'        => 'far fa-fw fa-handshake',
                    'label'       => '!',
                    'label_color' => 'danger',
                ],
                [
                    'text'        => 'Boletim GOA',
                    'url'         => '#',
                    'icon'        => 'fa fa-fw fa-newspaper',
                    'label'       => '!',
                    'label_color' => 'danger',
                ],
                [
                    'text'        => 'Configura????es',
                    'url'         => '#',
                    'icon'        => 'fas fa-fw fa-desktop',
                    'label'       => '!',
                    'label_color' => 'danger',
                ],
            ],
        ],
        /* MENU ITEM - SE????O OPERACIONAL */
        [
            'text'    => 'Opera????es (SOP)',
            'icon'    => 'fas fa-fw fa-rocket',
            'icon_color' => 'info',
            'can' => 'sop',
            'submenu' => [
                [
                    'text'        => 'Relatar Voo',
                    'url'         => '#',
                    'icon'        => 'fas fa-fw fa-save',
                    'label'       => '!',
                    'label_color' => 'danger',
                ],
                [
                    'text'        => 'Procedimentos (POP)',
                    'url'         => 'pops',
                    'icon'        => 'fas fa-fw fa-thumbs-up',
                    /* 'label'       => 18, */
                    'label_color' => 'danger',
                ],
                [
                    'text'        => 'Pilotos',
                    'url'         => '#',
                    'icon'        => 'fa fa-fw fa-address-card',
                    'label'       => '!',
                    'label_color' => 'danger',
                ],
                [
                    'text'        => 'Tripulantes',
                    'url'         => '#',
                    'icon'        => 'far fa-fw fa-star',
                    'label'       => '!',
                    'label_color' => 'danger',
                ],
            ],
        ],

        /* MENU ITEM - SE????O DE MANUTEN????O DE HELIC??PTEROS*/
        [
            'text'    => 'Manuten????o (SMH)',
            'icon'    => 'fas fa-fw fa-wrench',
            'icon_color' => 'info',
            'can' => 'smh',
            'submenu' => [
                [
                    'text' => 'Frota',
                    'url'  => '#',
                    'icon' => 'fa fa-fw fa-helicopter',
                    'label'       => '!',
                    'label_color' => 'danger',
                ],
                [
                    'text' => 'Disponibilidade',
                    'url'  => '#',
                    'icon' => 'fas fa-fw fa-clock',
                    'label'       => '!',
                    'label_color' => 'danger',
                ],
                [
                    'text' => 'Suprimentos',
                    'url'  => '#',
                    'icon' => 'fas fa-fw fa-fan',
                    'label'       => '!',
                    'label_color' => 'danger',
                ],
            ],
        ],
        // Legenda/t??tulo sec??o|menu:
        [
            'header' => 'RECURSOS',
            'classes' => 'text-light-gray',
        ],
        /* MENU ITEM - CONTROLE DE COMBUST??VEL DE AVIA????O*/
        [
            'text'    => 'Combust??vel',
            'icon'    => 'fas fa-fw fa-gas-pump',
            'icon_color' => 'info',
            'can' => 'smh',
            'submenu' => [
                [
                    'text'        => 'Relatar Abatescimento',
                    'url'         => '#',
                    'icon'        => 'fas fa-fw fa-save',
                    'label'       => '!',
                    'label_color' => 'danger',
                ],
                [
                    'text' => 'Controle',
                    'url'  => '#',
                    'icon' => 'fas fa-fw fa-ruler',
                    'label'       => '!',
                    'label_color' => 'danger',
                ],
            ],
        ],
        /* MENU ITEM - CONFIGURA????ES */
        [
            'text'    => 'Sistema',
            'icon'    => 'fas fa-fw fa-desktop',
            'icon_color' => 'info',
            'can' => 'config',
            'submenu' => [
                [
                    'text' => 'Usu??rios',
                    'url'  => 'users',
                    'icon' => 'fa fa-fw fa-user',
                    'active' => ['users', 'users*', 'regex:@^users/[0-9]+$@']
                ],
                [
                    'text' => 'Permiss??es',
                    'url'  => 'roles',
                    'icon' => 'fa fa-fw fa-ban',
                    'active' => ['roles', 'roles*', 'regex:@^roles/[0-9]+$@']
                ],
                [
                    'text' => 'Miscel??nea',
                    'url'  => '#',
                    'icon' => 'fas fa-fw fa-wrench',
                    'label'       => '!',
                    'label_color' => 'danger',
                ],
            ],
        ],


        /* ABAIXO O MENU DE REFER??NCIA/TEMPLATE ADMINLTE */
        /* [
            'text'    => 'multilevel',
            'icon'    => 'fas fa-fw fa-share',
            'submenu' => [
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
                [
                    'text'    => 'level_one',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => 'level_two',
                            'url'  => '#',
                        ],
                        [
                            'text'    => 'level_two',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
            ],
        ], */
        /* ['header' => 'labels'],
        [
            'text'       => 'important',
            'icon_color' => 'red',
            'url'        => '#',
        ],
        [
            'text'       => 'warning',
            'icon_color' => 'yellow',
            'url'        => '#',
        ],
        [
            'text'       => 'information',
            'icon_color' => 'cyan',
            'url'        => '#',
        ], */
    ],
    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];
