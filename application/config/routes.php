<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

//My entries
// last	Navbar	A suitable new controller in controllers/last/
$route['last'] = "last/";
// sleep	Homepage	Remapped to first::zzz
$route['sleep'] = "first/zzz";
// lock/em/up	Homepage	Remapped to welcome::shucks, using wildcard (lock / *)
$route['lock/:any/:any'] = "welcome/shucks";
// show/3	Homepage	Remapped to first::gimme/3, using wildcard (show / digit)
$route['show/:num'] = "first/gimme/3";
// dunno	Homepage	Remapped to guess (new controller)
$route['dunno'] = "guess";
// wise/bingo	Homepage	Remapped to bingo, using regular expression (4 letters / bingo) (new controller)
$route['([a-z]{4})/bingo'] = "bingo";
// comp4711/wisdom	Homepage	Remapped to bingo::wisdom, using regular expression (comp + digits / *)
$route['comp\d{4}/:any'] = "bingo/wisdom";

//Default
$route['default_controller'] = "welcome";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */