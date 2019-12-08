<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login'] = 'AuthController/login';
$route['logout'] = 'AuthController/logout';

$route['akun'] = 'AkunController/index';
$route['akun/aktif/(:any)'] = 'AkunController/aktif/$1';

$route['cuti'] = 'CutiController/index';
$route['cuti/tambah'] = 'CutiController/tambah';
$route['cuti/setujui/(:any)'] = 'CutiController/setujui/$1';

$route['pegawai'] = 'PegawaiController/index';
$route['pegawai/tambah'] = 'PegawaiController/tambah';
$route['pegawai/edit/(:any)'] = 'PegawaiController/edit/$1';
$route['pegawai/delete/(:any)'] = 'PegawaiController/delete/$1';

$route['jabatan'] = 'JabatanController/index';
$route['jabatan/tambah'] = 'JabatanController/tambah';
$route['jabatan/edit/(:any)'] = 'JabatanController/edit/$1';
$route['jabatan/delete/(:any)'] = 'JabatanController/delete/$1';

$route['unit'] = 'UnitController/index';
$route['unit/tambah'] = 'UnitController/tambah';
$route['unit/edit/(:any)'] = 'UnitController/edit/$1';
$route['unit/delete/(:any)'] = 'UnitController/delete/$1';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
