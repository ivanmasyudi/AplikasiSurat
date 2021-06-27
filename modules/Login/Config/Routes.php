<?php

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', '\Modules\Login\Controllers\Auth::index');
$routes->post('auth/login', '\Modules\Login\Controllers\Auth::cekLogin');
$routes->get('auth/logout', '\Modules\Login\Controllers\Auth::logout');
