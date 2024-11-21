<?php

define("WEBSITE_TITLE", 'ECOMMERCE');

//database
define('DB_NAME', "ecommerce_db");
define('DB_USER', "root");
define('DB_PASS', "");

define('THEME','eshopper/');

define('DEBUG', true);

if(DEBUG){
    
    ini_set('display_errors',1); 
}else{
    ini_set('display_errors',0); 
}
