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
$route['default_controller'] = 'frontend/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['sell'] 						= 'frontend/home/sell';

$route['(:any)'] 					= 'frontend/$1';
$route['admin/(:any)'] 				= 'admin/$1';

$route['product/details/(:any)'] 	= 'frontend/product/product_details/$1';
$route['store/category'] 			= 'frontend/store/category/topwear';
$route['store/category/(:any)'] 	= 'frontend/store/category/$1';

//cart url
$route['cart/add'] 					= 'frontend/cart/add';
$route['cart/address'] 				= 'frontend/cart/address';
$route['cart/login'] 				= 'frontend/cart/login';
$route['cart/checkout'] 			= 'frontend/cart/checkout';
$route['cart/remove'] 				= 'frontend/cart/remove';
$route['cart/coupon'] 				= 'frontend/cart/coupon';
$route['cart/remove/coupon'] 		= 'frontend/cart/removecoupon';

$route['api/login'] 				= 'admin/login/web_login';
$route['api/registration']			= 'admin/login/web_user_registration';
$route['api/product_details'] 		= 'frontend/product/product_details_api';

//User Url's
$route['user/wallet'] 				= 'frontend/user/wallet';
$route['user/seller'] 				= 'frontend/user/seller';
$route['user/seller/product'] 		= 'frontend/user/seller_products';
$route['user/orders']				= 'frontend/user/myorders';
$route['user/update_details'] 		= 'frontend/user/update_details';
