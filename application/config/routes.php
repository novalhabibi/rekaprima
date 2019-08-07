<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'id/beranda'; //id/beranda, overview
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Backend
$route['dashboard'] = 'backendcontroller/dashboard';
$route['dashboard/logout'] = 'backendcontroller/logout';
$route['dashboard/login'] = 'backendcontroller/login';
$route['dashboard/ceklogin'] = 'backendcontroller/ceklogin';





$route['dashboard/tabel'] = 'backendcontroller/tabel';
$route['dashboard/form_validation'] = 'backendcontroller/form_validation';



$route['dashboard/admin/tambah'] = 'backendcontroller/tambah';
// Akhir Backend





$route['id/kategori'] = 'id/beranda'; //id/beranda, overview
$route['id/kategori/(:any)'] = 'id/kategorimaintenance'; //id/beranda, overview
$route['id/maintenance/(:any)'] = 'id/detail_maintenance'; 
$route['id/projek/(:any)'] = 'id/projek'; 


$route['id/category'] = 'en/home'; //id/beranda, overview
$route['en/category/(:any)'] = 'en/categorymaintenance'; //id/beranda, overview
$route['en/maintenance/(:any)'] = 'en/detail_maintenance'; 
$route['en/project/(:any)'] = 'en/project'; 