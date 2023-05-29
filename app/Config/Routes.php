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
$routes->setDefaultController('Users');
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
$routes->get('/', 'Users::index');
$routes->get('/dashboard', 'Users::dashboard');
$routes->match(['get','post'],'cropvarieties', 'Users::cropvarieties');
$routes->match(['get','post'],'agroinput', 'Users::agroinput');
$routes->match(['get','post'],'marketabletechnologies', 'Users::marketabletechnologies');
$routes->match(['get','post'],'othertechnologies', 'Users::othertechnologies');
$routes->match(['get','post'],'processedfoods', 'Users::processedfoods');
$routes->match(['get','post'],'register', 'Users::register');
$routes->match(['get','post'],'login', 'Users::login');
$routes->match(['get','post'],'about', 'Users::about');
$routes->match(['get','post'],'faq', 'Users::faq');
$routes->match(['get','post'],'contact', 'Users::contact');
$routes->match(['get','post'],'mainagroinputs', 'Users::mainagroinputs');
$routes->match(['get','post'],'maincropvarieties', 'Users::maincropvarieties');
$routes->match(['get','post'],'mainmarketable', 'Users::mainmarketable');
$routes->match(['get','post'],'mainothertechnologies', 'Users::mainothertechnologies');
$routes->match(['get','post'],'mainprocessedfoods', 'Users::mainprocessedfoods');


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