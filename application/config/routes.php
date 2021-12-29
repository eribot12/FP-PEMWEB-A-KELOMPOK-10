<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['home'] = 'home';

$route['customer/input'] = 'C_Customer/input_customer';
$route['customer/submit'] = 'C_Customer/submit_data';
$route['customer/view'] = 'C_Customer/view_customer';
$route['customer/view_edit/(:num)'] = 'C_Customer/view_edit_customer';
$route['customer/edit/(:num)'] = 'C_Customer/submit_edit';
$route['customer/delete/(:num)'] = 'C_Customer/delete_customer';


$route['karyawan/input'] = 'C_Karyawan/input_karyawan';
$route['karyawan/submit'] = 'C_Karyawan/submit_data';
$route['karyawan/absensi'] = 'C_Karyawan/input_absensi';
$route['karyawan/submit_absensi'] = 'C_Karyawan/submit_absensi';
$route['karyawan/penggajian'] = 'C_Karyawan/input_penggajian';
$route['karyawan/submit_gaji'] = 'C_Karyawan/submit_gaji';
$route['karyawan/view'] = 'C_Karyawan/view_karyawan';
$route['karyawan/view_edit/(:num)'] = 'C_Karyawan/view_edit_karyawan';
$route['karyawan/edit/(:num)'] = 'C_Karyawan/submit_edit';
$route['karyawan/delete/(:num)'] = 'C_Karyawan/delete_karyawan';


$route['supplier/input'] = 'C_supplier/input_supplier';
$route['supplier/submit'] = 'C_supplier/submit_data';
$route['supplier/view'] = 'C_supplier/view_supplier';
$route['supplier/view_edit/(:num)'] = 'C_supplier/view_edit_supplier';
$route['supplier/edit/(:num)'] = 'C_supplier/submit_edit';
$route['supplier/delete/(:num)'] = 'C_supplier/delete_supplier';



$route['sparepart/input'] = 'C_Sparepart/input_sparepart';
$route['sparepart/submit'] = 'C_Sparepart/submit_data';
$route['sparepart/view'] = 'C_Sparepart/view_sparepart';
$route['sparepart/view_edit/(:num)'] = 'C_Sparepart/view_edit_sparepart';
$route['sparepart/edit/(:num)'] = 'C_Sparepart/submit_edit';
$route['sparepart/delete/(:num)'] = 'C_Sparepart/delete_sparepart';

$route['servis/input'] = 'C_Servis/input_servis';
$route['servis/submit'] = 'C_Servis/submit_data';
$route['servis/view'] = 'C_Servis/view_servis';
$route['servis/view_edit/(:num)'] = 'C_Servis/view_edit_servis';
$route['servis/edit/(:num)'] = 'C_Servis/submit_edit';
$route['servis/delete/(:num)'] = 'C_Servis/delete_servis';


$route['transaksi/servis'] = 'C_Transaksi/input_transaksi_servis';
$route['transaksi/submit_servis'] = 'C_Transaksi/submit_data_servis';
$route['transaksi/sparepart'] = 'C_Transaksi/input_transaksi_sparepart';
$route['supply/sparepart'] = 'C_Transaksi/supply_part';
$route['supply/submit'] = 'C_Transaksi/supply_part_submit';
$route['transaksi/history'] = 'C_Transaksi/view_transaksi';
$route['transaksi/cetak_servis/(:num)'] = 'C_Transaksi/cetak_servis';
$route['transaksi/cetak_part/(:num)'] = 'C_Transaksi/cetak_part';