<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['Admin'] = 'admin/dashboard';
$route['Admin/Pemesanan'] = 'admin/Pemesanan';
$route['Admin/Pemesanan/(:any)'] = 'admin/Pemesanan/$1';


$route['manager'] = 'manager/dashboard';

$route['manager'] = 'teknisi/dashboard';

$route['login/(:any)'] = 'login/$1';


$route['default_controller'] = 'login';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
