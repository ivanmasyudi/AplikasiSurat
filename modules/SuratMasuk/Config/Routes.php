<?php

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('suratmasuk', '\Modules\SuratMasuk\Controllers\Suratmasuk::index');
$routes->get('suratmasuk/create', '\Modules\SuratMasuk\Controllers\Suratmasuk::tambah');
$routes->get('suratmasuk/edit', '\Modules\SuratMasuk\Controllers\Suratmasuk::edit');
$routes->get('suratmasuk/delete', '\Modules\SuratMasuk\Controllers\Suratmasuk::hapus');
