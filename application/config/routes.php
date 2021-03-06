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
$route['default_controller'] 	= 'site';
$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= FALSE;


$route['immunization'] 				= 'site/immunization';
$route['about-us'] 				= 'site/about_us';
$route['service'] 				= 'site/services';
$route['contact-us'] 			= 'site/contact_us';
$route['registration'] 			= 'site/registration';
$route['login'] 					= 'site/login';
$route['day-care-details/(:any)'] 		= 'site/day_care_details/$1';
$route['day-care-centers'] 		= 'site/day_care_centers'; #Day Care Centers
$route['day-care-centers-under-mohila'] = 'site/mohila_day_care_centers';

#6-12 years children routes
$route['six-to-twelve-children-day-care'] = 'site/six_to_twelve_children_day_care';
$route['six-to-twelve-children-food-nutrition']  = 'site/six_to_twelve_children_food_nutrition';
$route['six-to-twelve-children-excitement'] = 'site/six_to_twelve_children_excitement';
$route['six-to-twelve-children-health-care'] = 'site/six_to_twelve_children_health_care';
$route['six-to-twelve-children-mental-improvement'] = 'site/six_to_twelve_children_mental_improvement';
$route['six-to-twelve-children-health-improvement'] = 'site/six_to_twelve_children_health_improvement';
$route['six-to-twelve-children-curricular'] = 'site/six_to_twelve_childen_curricular';


#12-30 years children routes
$route['twelve-to-thirty-children-day-care'] = 'site/twelve_to_thirty_children_day_care';
$route['twelve-to-thirty-children-food-nutrition']  = 'site/twelve_to_thirty_children_food_nutrition';
$route['twelve-to-thirty-children-excitement'] = 'site/twelve_to_thirty_children_excitement';
$route['twelve-to-thirty-children-health-care'] = 'site/twelve_to_thirty_children_health_care';
$route['twelve-to-thirty-children-mental-improvement'] = 'site/twelve_to_thirty_children_mental_improvement';
$route['twelve-to-thirty-children-health-improvement'] = 'site/twelve_to_thirty_children_health_improvement';
$route['twelve-to-thirty-children-curricular'] = 'site/twelve_to_thirty_childen_curricular';




$route['event-details'] 		= 'site/event_details';

$route['logout'] 					= 'site/logout';
$route['my-profile'] 			= 'site/my_profile';
$route['my-profile/(:any)'] 			= 'site/my_profile/$1';
$route['my-profile/application-details'] = 'site/my_profile/application_details';
$route['application-form'] 	= 'site/application_form';
$route['application-list'] 	= 'site/application_list';
$route['article/(:any)'] 		= 'site/article/$1';
$route['category/(:any)'] 		= 'site/category/$1';

$route['about-activities'] 	= 'site/about_activities';
$route['about-philosophy'] 	= 'site/about_philosophy';
$route['gallery'] 				= 'site/gallery';
$route['events'] 					= 'site/events';

// $route['event-details/(:any)'] = 'site/event_details/$1';
$route['choose-us/(:any)'] 	= 'site/choose_us/$1';
$route['success']					= 'site/success';

