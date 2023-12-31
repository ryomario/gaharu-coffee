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

    'title' => 'Gaharu POS',
    'title_prefix' => '',
    'title_postfix' => '| Gaharu Coffee',

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

    'use_ico_only' => false,
    'use_full_favicon' => true,

    /*
    |--------------------------------------------------------------------------
    | Google Fonts
    |--------------------------------------------------------------------------
    |
    | Here you can allow or not the use of external google fonts. Disabling the
    | google fonts may be useful if your admin panel internet access is
    | restricted somehow.
    |
    | For detailed instructions you can look the google fonts section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'google_fonts' => [
        'allowed' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>Gaharu</b>Coffee',
    'logo_img' => 'images/favicon.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Gaharu Logo',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    |
    | Here you can setup an alternative logo to use on your login and register
    | screens. When disabled, the admin panel logo will be used instead.
    |
    | For detailed instructions you can look the auth logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'auth_logo' => [
        'enabled' => false,
        'img' => [
            'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
            'alt' => 'Auth Logo',
            'class' => '',
            'width' => 50,
            'height' => 50,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Preloader Animation
    |--------------------------------------------------------------------------
    |
    | Here you can change the preloader animation configuration.
    |
    | For detailed instructions you can look the preloader section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'preloader' => [
        'enabled' => true,
        'img' => [
            'path' => 'images/favicon.png',
            'alt' => 'Gaharu Preloader Image',
            'effect' => 'animation__shake',
            'width' => 60,
            'height' => 60,
        ],
    ],

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
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => true,
    'usermenu_desc' => true,
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
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => true,
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
    'sidebar_nav_animation_speed' => 300,

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
    'register_url' => false,
    'password_reset_url' => false,
    'password_email_url' => false,
    'profile_url' => 'user/profile',

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

    'enabled_laravel_mix' => false,
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
        // [
        //     'type'         => 'navbar-search',
        //     'text'         => 'search',
        //     'topnav_right' => true,
        // ],
        // [
        //     'type'         => 'fullscreen-widget',
        //     'topnav_right' => true,
        // ],
        [
            'type'         => 'navbar-notification',
            'id'           => 'my-notification',      // An ID attribute (required).
            'can'          => 'show_notifications',
            'icon'         => 'far fa-bell',          // A font awesome icon (required).
            'icon_color'   => '',              // The initial icon color (optional).
            'label'        => 0,                      // The initial label for the badge (optional).
            'label_color'  => 'danger',               // The initial badge color (optional).
            'url'          => 'notifications/show',   // The url to access all notifications/elements (required).
            'topnav_right' => true,                   // Or "topnav => true" to place on the left (required).
            'dropdown_mode'   => true,                // Enables the dropdown mode (optional).
            'dropdown_flabel' => 'All notifications', // The label for the dropdown footer link (optional).
            'update_cfg'   => [
                'url' => 'notifications/get',         // The url to periodically fetch new data (optional).
                'period' => 30,                       // The update period for get new data (in seconds, optional).
            ],
        ],

        // Sidebar items:
        [
            'type' => 'sidebar-menu-search',
            'text' => 'search',
        ],
        [
            'text' => 'Dashboard',
            'route'  => 'home',
            'icon' => 'fas fa-fw fa-tachometer-alt',
        ],
        [
            'text' => 'Transaksi',
            'route'  => 'app.pos.index',
            'can'   => 'create_pos_sales',
            'icon' => 'fas fa-fw fa-shopping-cart',
        ],
        [
            'text'        => 'Produk',
            'can'         => 'access_products',
            'icon'        => 'fas fa-fw fa-th',
            'submenu'     => [
                [
                    'text'  => 'Kategori',
                    'can'   => 'access_product_categories',
                    'route'   => 'product-categories.index',
                    'active' => ['regex:@^product-categories/*@'],
                ],
                [
                    'text'  => 'Buat Produk',
                    'can'   => 'create_products',
                    'route'   => 'products.create',
                ],
                [
                    'text'  => 'Semua Produk',
                    'route'   => 'products.index',
                    'active' => ['regex:@^products/(?!create)@'],
                ],
                [
                    'text'  => 'Print Barcode',
                    'can'   => 'print_barcodes',
                    'route'   => 'barcode.print',
                ],
            ],
        ],
        [
            'text'        => 'Penyesuaian Stok',
            'can'         => 'access_adjustments',
            'icon'        => 'fas fa-fw fa-clipboard-check',
            'submenu'     => [
                [
                    'text'  => 'Tambah Stok',
                    'can'   => 'create_adjustments',
                    'route'   => 'adjustments.create',
                ],
                [
                    'text'  => 'Semua Penyesuaian Stok',
                    'route'   => 'adjustments.index',
                    'active' => ['regex:@^adjustments/(?!create)@'],
                ],
            ],
        ],
        [
            'text'        => 'Quotations',
            'can'         => 'access_quotations',
            'icon'        => 'fas fa-fw fa-cart-arrow-down',
            'submenu'     => [
                [
                    'text'  => 'Tambah Quotations',
                    'can'   => 'create_quotations',
                    'route'   => 'quotations.create',
                ],
                [
                    'text'  => 'Semua Quotations',
                    'route'   => 'quotations.index',
                    'active' => ['regex:@^quotations/(?!create)@'],
                ],
            ],
        ],
        [
            'header' => 'KEUANGAN',
            'can'    => ['access_purchases', 'access_purchase_returns', 'access_sales', 'access_sale_returns', 'access_expenses'],
        ],
        [
            'text'        => 'Pembelian',
            'can'         => 'access_purchases',
            'icon'        => 'fas fa-fw fa-shopping-bag',
            'submenu'     => [
                [
                    'text'  => 'Tambah Pembelian',
                    'can'   => 'create_purchase',
                    'route'   => 'purchases.create',
                ],
                [
                    'text'  => 'Semua Pembelian',
                    'route'   => 'purchases.index',
                    'active' => ['regex:@^purchases/(?!create)@'],
                ],
            ],
        ],
        [
            'text'        => 'Retur Pembelian',
            'can'         => 'access_purchase_returns',
            'icon'        => 'bi bi-arrow-return-right',
            'submenu'     => [
                [
                    'text'  => 'Tambah Retur Pembelian',
                    'can'   => 'create_purchase_returns',
                    'route'   => 'purchase-returns.create',
                ],
                [
                    'text'  => 'Semua Retur Pembelian',
                    'route'   => 'purchase-returns.index',
                    'active' => ['regex:@^purchase-returns/(?!create)@'],
                ],
            ],
        ],
        [
            'text'        => 'Penjualan',
            'can'         => 'access_sales',
            'icon'        => 'fas fa-fw fa-receipt',
            'submenu'     => [
                [
                    'text'  => 'Tambah Penjualan',
                    'can'   => 'create_sales',
                    'route'   => 'sales.create',
                ],
                [
                    'text'  => 'Semua Penjualan',
                    'route'   => 'sales.index',
                    'active' => ['regex:@^sales/(?!create)@'],
                ],
            ],
        ],
        [
            'text'        => 'Retur Penjualan',
            'can'         => 'access_sale_returns',
            'icon'        => 'bi bi-arrow-return-left',
            'submenu'     => [
                [
                    'text'  => 'Tambah Retur Penjualan',
                    'can'   => 'create_sale_returns',
                    'route'   => 'sale-returns.create',
                ],
                [
                    'text'  => 'Semua Retur Penjualan',
                    'route'   => 'sale-returns.index',
                    'active' => ['regex:@^sale-returns/(?!create)@'],
                ],
            ],
        ],
        [
            'text'        => 'Pengeluaran',
            'can'         => 'access_expenses',
            'icon'        => 'fas fa-fw fa-wallet',
            'submenu'     => [
                [
                    'text'  => 'Kategori Pengeluaran',
                    'can'   => 'access_expense_categories',
                    'route'   => 'expense-categories.index',
                    'active' => ['regex:@^expense-categories/*@'],
                ],
                [
                    'text'  => 'Tambah Pengeluaran',
                    'can'   => 'create_expenses',
                    'route'   => 'expenses.create',
                ],
                [
                    'text'  => 'Semua Pengeluaran',
                    'route'   => 'expenses.index',
                    'active' => ['regex:@^expenses/(?!create)@'],
                ],
            ],
        ],
        [
            'header' => 'LAINNYA',
            'can'    => ['access_customers', 'access_suppliers', 'access_reports'],
        ],
        [
            'text'        => 'Mitra',
            'can'         => ['access_customers', 'access_suppliers'],
            'icon'        => 'fas fa-fw fa-users',
            'submenu'     => [
                [
                    'text'  => 'Pelanggan',
                    'can'   => 'access_customers',
                    'route'   => 'customers.index',
                    'active' => ['regex:@^customers/*@'],
                ],
                [
                    'text'  => 'Pemasok',
                    'can'   => 'access_suppliers',
                    'route'   => 'suppliers.index',
                    'active' => ['regex:@^suppliers/*@'],
                ],
            ],
        ],
        [
            'text'        => 'Laporan',
            'can'         => 'access_reports',
            'icon'        => 'fas fa-fw fa-chart-line',
            'submenu'     => [
                [
                    'text'  => 'Profit / Loss Report',
                    'route'   => 'profit-loss-report.index',
                ],
                [
                    'text'  => 'Payments Report',
                    'route'   => 'payments-report.index',
                ],
                [
                    'text'  => 'Sales Report',
                    'route'   => 'sales-report.index',
                ],
                [
                    'text'  => 'Purchases Report',
                    'route'   => 'purchases-report.index',
                ],
                [
                    'text'  => 'Sales Return Report',
                    'route'   => 'sales-return-report.index',
                ],
                [
                    'text'  => 'Purchases Return Report',
                    'route'   => 'purchases-return-report.index',
                ],
            ],
        ],
        [
            'header' => 'PENGATURAN',
            'can'    => ['edit_own_profile', 'access_user_management'],
        ],
        [
            'text'        => 'Pengguna',
            'can'         => 'access_user_management',
            'icon'        => 'fas fa-fw fa-users-cog',
            'submenu'     => [
                [
                    'text'  => 'Tambah Pengguna',
                    'route'   => 'users.create',
                ],
                [
                    'text'  => 'Semua Pengguna',
                    'route'   => 'users.index',
                    'active' => ['regex:@^users/(?!create)@'],
                ],
                [
                    'text'  => 'Ijin & Peran',
                    'route'   => 'roles.index',
                    'active' => ['regex:@^roles/*@'],
                ],
            ],
        ],
        [
            'text'        => 'Pengaturan',
            'can'         => ['access_currencies', 'access_settings', 'access_units'],
            'icon'        => 'fas fa-fw fa-cogs',
            'submenu'     => [
                [
                    'text'  => 'Units',
                    'can' => 'access_units',
                    'route'   => 'units.index',
                    'active' => ['regex:@^units/*@'],
                ],
                [
                    'text'  => 'Currencies',
                    'can' => 'access_currencies',
                    'route'   => 'currencies.index',
                    'active' => ['regex:@^currencies/*@'],
                ],
                [
                    'text'  => 'Pengaturan Sistem',
                    'can' => 'access_settings',
                    'route'   => 'settings.index',
                    'active' => ['regex:@^settings/*@'],
                ],
            ],
        ],
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
