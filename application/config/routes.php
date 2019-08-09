<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'id/beranda'; //id/beranda, overview
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Backend
$route['dashboard'] = 'backendcontroller';
$route['dashboard/logout'] = 'auth/logout';
$route['dashboard/logout_all'] = 'auth/logout_all';
$route['dashboard/login'] = 'auth/login';
$route['dashboard/ceklogin'] = 'auth/ceklogin';
$route['dashboard/logout_session'] = 'auth/logout_session';





$route['dashboard/tabel'] = 'backendcontroller/tabel';
$route['dashboard/form_validation'] = 'backendcontroller/form_validation';



$route['dashboard/admin'] = 'admin';
$route['dashboard/admin/tambah'] = 'admin/tambah';
$route['dashboard/admin/edit/(:any)'] = 'admin/edit';
$route['dashboard/admin/update'] = 'admin/update';
$route['dashboard/admin/hapus'] = 'admin/hapus';
// Akhir Backend





$route['id/kategori'] = 'id/beranda'; //id/beranda, overview
$route['id/kategori/(:any)'] = 'id/kategorimaintenance'; //id/beranda, overview
$route['id/maintenance/(:any)'] = 'id/detail_maintenance'; 
$route['id/projek/(:any)'] = 'id/projek'; 


$route['id/category'] = 'en/home'; //id/beranda, overview
$route['en/category/(:any)'] = 'en/categorymaintenance'; //id/beranda, overview
$route['en/maintenance/(:any)'] = 'en/detail_maintenance'; 
$route['en/project/(:any)'] = 'en/project'; 