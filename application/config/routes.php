	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['login'] 				= 'Clogin'; 
$route['canbo'] 				= 'canbo/Ccanbo'; 
$route['logout'] 				= 'Clogin/logout'; 
$route['Welcome'] 				= 'Ctrangchu';


$route['taosukien']				= 'quanlysukien/Ctaosukien';
$route['danhsachsukien']		= 'quanlysukien/Cdanhsachsukien';
$route['xacnhan']				= 'quanlysukien/Cxacnhan';

$route['thongkechamcong/previewtt']				= 'quanlychamcong/CThongkechamcong/previewtt';

$route['chamcongdonvi']			= 'quanlychamcong/CChamcong_donvi';
$route['chamcongnhanvien']		= 'quanlychamcong/CChamcong_nhanvien';
$route['thongkechamcong']		= 'quanlychamcong/CThongkechamcong';
$route['thongkedonvi']			= 'quanlychamcong/CThongke_donvi';

$route['taikhoan'] 				= 'danhmuc/Ctaikhoan'; 
$route['canbo'] 				= 'danhmuc/Ccanbo'; 
$route['chucvu'] 				= 'danhmuc/Cchucvu'; 
$route['donvi'] 				= 'danhmuc/Cdonvi'; 
$route['loaibienche'] 			= 'danhmuc/Cloaibienche'; 

$route['default_controller'] 	= 'Clogin';
$route['404_override'] 			= 'C404';
$route['403_Forbidden'] 		= 'C403';
$route['translate_uri_dashes'] 	= FALSE;
