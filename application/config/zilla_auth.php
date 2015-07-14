<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//Authorization System Used for Zilla Company
//Based In Russia


/*---------Database Properties------------*/
$config['table_user']='zilla_users'; // Table for user Storage
$config['table_group']='zilla_usersgroup'; // Table For group Storage


/*--------Site Configurations-------------*/

$config['site_name']= "night-fly.xxx"; // name of the site i.e. www.google.com (WARNING DO NOT INCLUDE http:// )
$config['email_confirmation']=TRUE;
$config['main_page']='main';


/*--------Mailing Configuration------------*/
$config['admin_email']="admin@site.com";// name of the email you would like to display in the header
$config['header_confirmation']="Registartion Confirmation";
$config['confirmation_msg']="Thank you for registering with us, please confirm your account by click on: ";
$config['headers']="Activation no-reply";


/*--------Registration Configs-------------*/
$config['default_group']=3; //Use ID of default group in users_group for newly registered users



/* End of file zilla_auth.php */
/* Location: ./application/config/zilla_auth.php */