<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'admin/dashboard';

$route['manager'] = 'manager/dashboard';

$route['manager'] = 'teknisi/dashboard';

$route['login/(:any)'] = 'login/$1';
