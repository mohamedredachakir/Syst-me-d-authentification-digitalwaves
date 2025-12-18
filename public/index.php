<?php

include_once __DIR__ . '../../config/database.php';

session_start();


$uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
$uri = trim($uri,'/');

$routes = [
    ''          => 'home.php',
    'home'      => 'home.php',
    'about'     => 'about.php',
    'services'  => 'services.php',
    'contact'   => 'contact.php',
    'login'     => 'auth/login.php',
    'logout'    => 'auth/logout.php',
    'profile'   => 'auth/profile.php',
];

if(array_key_exists($uri,$routes)){
    require __DIR__ . '/controller/' . $routes[$uri];
}else{
    require __DIR__ . '/views/404.php';

};
?>
