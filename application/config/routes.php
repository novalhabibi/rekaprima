<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'id/beranda'; //id/beranda, overview
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['id/kategori'] = 'id/beranda'; //id/beranda, overview
$route['id/kategori/(:any)'] = 'id/kategorimaintenance'; //id/beranda, overview
$route['id/maintenance/(:any)'] = 'id/detail_maintenance'; 


$route['id/category'] = 'en/home'; //id/beranda, overview
$route['en/category/(:any)'] = 'en/categorymaintenance'; //id/beranda, overview
$route['en/maintenance/(:any)'] = 'en/detail_maintenance'; 