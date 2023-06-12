<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller']    = 'home';
$route['404_override']          = '';
$route['translate_uri_dashes']  = TRUE;
$route['master/wisata/gambar/(:any)']['get'] = "master/wisata/gambar/index/$1";
