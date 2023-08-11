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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'User_Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// User

$route['user_login'] = 'User_Login/index';
$route['register'] = 'User_Login/user_register';

$route['dashboard'] = 'UserController/analytics';
$route['user-logout'] = 'UserController/logout';
$route['my_orders'] = 'UserController/my_orders';
$route['product_detail/(:any)'] = 'UserController/product_details/$1';
$route['analytics'] = 'UserController/analytics';
$route['message'] = 'UserController/message';
$route['documents'] = 'UserController/documents';
$route['contact'] = 'UserController/contact';
$route['sales_support'] = 'UserController/sales_support';
$route['refund'] = 'UserController/refund';
$route['settings'] = 'UserController/settings';
$route['order_details'] = 'UserController/order_details';
$route['order_cart'] = 'UserController/order_cart';
$route['configuration'] = 'UserController/configuration';
$route['fitting/(:any)'] = 'UserController/fitting/$1';
$route['furniture/(:any)'] = 'UserController/furniture/$1';

// Admin

$route['admin_login'] = 'Admin_Login/index';
$route['admin-dashboard'] = 'AdminController/dashboard';
$route['admin-logout'] = 'AdminController/logout';
$route['order_management'] = 'AdminController/order_management';
$route['order_management_details'] = 'AdminController/order_management_details';
$route['customer_management'] = 'AdminController/customer_management';
$route['customer_management_profile'] = 'AdminController/customer_management_profile';