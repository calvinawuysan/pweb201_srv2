<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['pweb'] = 'welcome/pweb';
$route['resep'] = 'resep';
$route['resep/pallubasa'] = 'resep/pallubasa';


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
