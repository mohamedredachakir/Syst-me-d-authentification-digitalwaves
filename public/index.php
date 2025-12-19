<?php

session_start();
include_once __DIR__ . '/../config/database.php';


$page = $_SERVER['REQUEST_URI'];
echo $page;
if(isset($page))
{
    include __DIR__ .'/../controllers/' . $page;
}else {
    include './views/404.php';
}
// $uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
// $uri = trim($uri,'/');




// $routes = [
//     ''          => 'home.php',
//     'home'      => 'home.php',
//     'about'     => 'about.php',
//     'services'  => 'services.php',
//     'contact'   => 'contact.php',
//     'login'     => 'auth/login.php',
//     'logout'    => 'auth/logout.php',
//     'profile'   => 'auth/profile.php',
// ];

// if(array_key_exists($uri,$routes)){
//     require __DIR__ . '../controllers/' . $routes[$uri];
// }else{
//     require '../views/404.php';


// };
// ?>
