<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->group('dashboard', function ($routes) {
    $routes->add('dashboard_analytics', 'Dashboard::dashboard_analytics');
    $routes->add('dashboard_marketing', 'Dashboard::dashboard_marketing');
    $routes->add('dashboard_social', 'Dashboard::dashboard_social');
});

$routes->group('smartint', function ($routes) {
    $routes->add('smartint_layouts', 'Smartint::smartint_layouts');
    $routes->add('smartint_skins', 'Smartint::smartint_skins');
    $routes->add('smartint_applayout', 'Smartint::smartint_applayout');
    $routes->add('smartint_difver', 'Smartint::smartint_difver');
});

$routes->get('/inbox/inbox', 'Inbox::inbox');

$routes->group('graphs', function ($routes) {
    $routes->add('graph_flot', 'Graphs::graph_flot');
    $routes->add('graph_morris', 'Graphs::graph_morris');
    $routes->add('graph_sparkline_charts', 'Graphs::graph_sparkline_charts');
    $routes->add('graph_easypie_charts', 'Graphs::graph_easypie_charts');
    $routes->add('graph_dygraphs', 'Graphs::graph_dygraphs');
    $routes->add('graph_chartjs', 'Graphs::graph_chartjs');
    $routes->add('graph_hchartable', 'Graphs::graph_hchartable');
});

$routes->group('tables', function ($routes) {
    $routes->add('table_normal', 'Tables::table_normal');
    $routes->add('table_datatables', 'Tables::table_datatables');
    $routes->add('table_jqgrid', 'Tables::table_jqgrid');
});

$routes->group('forms', function ($routes) {
    $routes->add('form_elements', 'Forms::form_elements');
    $routes->add('form_layout', 'Forms::form_layout');
    $routes->add('form_validation', 'Forms::form_validation');
    $routes->add('form_bootstrap_forms', 'Forms::form_bootstrap_forms');
    $routes->add('form_plugins', 'Forms::form_plugins');
    $routes->add('form_wizard', 'Forms::form_wizard');
    $routes->add('form_other_editors', 'Forms::form_other_editors');
    $routes->add('form_dropzone', 'Forms::form_dropzone');
    $routes->add('form_image_editor', 'Forms::form_image_editor');
    $routes->add('form_ckeditor', 'Forms::form_ckeditor');
});

$routes->group('elements', function ($routes) {
    $routes->add('ui_general_elements', 'Elements::ui_general_elements');
    $routes->add('ui_buttons', 'Elements::ui_buttons');
    $routes->add('ui_icon_fa', 'Elements::ui_icon_fa');
    $routes->add('ui_icon_glyph', 'Elements::ui_icon_glyph');
    $routes->add('ui_icon_flags', 'Elements::ui_icon_flags');
    $routes->add('ui_grid', 'Elements::ui_grid');
    $routes->add('ui_treeview', 'Elements::ui_treeview');
    $routes->add('ui_nestable_list', 'Elements::ui_nestable_list');
    $routes->add('ui_jqui', 'Elements::ui_jqui');
    $routes->add('ui_typography', 'Elements::ui_typography');
});

$routes->get('/widget/widgets', 'Widget::widgets');

$routes->group('cool', function ($routes) {
    $routes->add('cool_calendar', 'Cool::cool_calendar');
    $routes->add('cool_gmap_xml', 'Cool::cool_gmap_xml');
});

$routes->group('appviews', function ($routes) {
    $routes->add('views_projects', 'Appviews::views_projects');
    $routes->add('views_blog', 'Appviews::views_blog');
    $routes->add('views_gallery', 'Appviews::views_gallery');
    $routes->add('views_forum', 'Appviews::views_forum');
    $routes->add('views_forum_topic', 'Appviews::views_forum_topic');
    $routes->add('views_forum_post', 'Appviews::views_forum_post');
    $routes->add('views_profile', 'Appviews::views_profile');
    $routes->add('views_timeline', 'Appviews::views_timeline');
    $routes->add('views_search', 'Appviews::views_search');
});

$routes->group('ecommerce', function ($routes) {
    $routes->add('ecommerce_orders', 'Ecommerce::ecommerce_orders');
    $routes->add('ecommerce_products_view', 'Ecommerce::ecommerce_products_view');
    $routes->add('ecommerce_products_detail', 'Ecommerce::ecommerce_products_detail');
});

$routes->group('miscellaneous', function ($routes) {
    $routes->add('misc_pricing_table', 'Miscellaneous::misc_pricing_table');
    $routes->add('misc_invoice', 'Miscellaneous::misc_invoice');
    $routes->add('misc_login', 'Miscellaneous::misc_login');
    $routes->add('misc_register', 'Miscellaneous::misc_register');
    $routes->add('misc_forgotpassword', 'Miscellaneous::misc_forgotpassword');
    $routes->add('misc_lock', 'Miscellaneous::misc_lock');
    $routes->add('misc_email_template', 'Miscellaneous::misc_email_template');
    $routes->add('misc_error404', 'Miscellaneous::misc_error404');
    $routes->add('misc_error500', 'Miscellaneous::misc_error500');
    $routes->add('misc_blank_', 'Miscellaneous::misc_blank_');
    $routes->add('misc_coming_soon', 'Miscellaneous::misc_coming_soon');
});



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
