<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/tambah-data', 'Home::tambahData');
$routes->post('/tambah-data-simpan', 'Home::tambahDataSimpan');
$routes->post('/edit-data', 'Home::editData');
$routes->post('/edit-data-simpan', 'Home::editDataSimpan');
