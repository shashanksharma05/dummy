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
$route['search/(:any)'] = 'home/search/$1';

//New created Routes
$route['searchNew/(:any)'] = 'home/searchNew/$1';

$route['checkout/(:any)'] = 'home/checkout/$1';
$route['private-limited-company'] = 'home/private_limited_company';
$route['limited-liability-partnership'] = 'home/limited_liability_partnership';
$route['one-person-company'] = 'home/one_person_company';

$route['trademark-registration'] = 'home/trademark_registration';
$route['trademark-objection'] = 'home/trademark_objection';
$route['trademark-renewal-and-assignment'] = 'home/trademark_renewal_and_assignment';
$route['copyright-registration'] = 'home/copyright_registration';

$route['GST-registration'] = 'home/gst_registration';
$route['MSME-registration'] = 'home/msme_registration';
$route['import-export-code'] = 'home/import_export_code';
$route['patent-registration'] = 'home/patent_registration';

$route['buypackage/(:any)'] = 'home/buypackage/$1';

$route['terms-of-service'] = 'home/terms_and_services';
$route['founder-agreement'] = 'home/founder_agreement';
$route['employment-contract'] = 'home/employment_contract';
$route['terms_and_conditions'] = 'home/terms_and_conditions';
$route['links'] = 'home/links';
$route['privacy_policy'] = 'home/privacy_policy';
$route['refund_policy'] = 'home/refund_policy';
$route['default_controller'] = 'home';
$route['404_override'] = '';//'home/error';
$route['translate_uri_dashes'] = FALSE;
$route['404'] = 'home/error';

$route['sitemap\.xml'] = 'home/sitemap';
$route['feed'] = 'home/feed';

$route['(:any)'] = 'home/pages/$1';	// This function always listed at end of file
